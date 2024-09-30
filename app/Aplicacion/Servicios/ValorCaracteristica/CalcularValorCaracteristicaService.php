<?php

namespace App\Aplicacion\Servicios\ValorCaracteristica;

use App\Dominio\Interfaces\ValorCaracteristica\CalcularValorCaracteristicaInterface;
use App\Dominio\Interfaces\ValorCaracteristica\ValorCaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;

class CalcularValorCaracteristicaService implements CalcularValorCaracteristicaInterface
{
    private $acumulado = 0;
    private $numMetricas = 0;
    private $formula = "(";
    private $valores = [];

    private $valorCaracteristicaRepositoryInterface;
    private $caracteristicaRepository;
    private $evaluacionRepository;
    private $resultadoMetricaRepository;

    public function __construct(
        ValorCaracteristicaRepositoryInterface $valorCaracteristicaRepositoryInterface,
        EvaluacionRepositoryInterface $evaluacionRepository,
        CaracteristicaRepositoryInterface $caracteristicaRepository,
        ResultadoMetricaRepositoryInterface $resultadoMetricaRepository
    )
    {
        $this->valorCaracteristicaRepositoryInterface = $valorCaracteristicaRepositoryInterface;
        $this->evaluacionRepository = $evaluacionRepository;
        $this->caracteristicaRepository = $caracteristicaRepository;
        $this->resultadoMetricaRepository = $resultadoMetricaRepository;
    }

    /**
     * Funcion para calcular el valor de una caracteristica
     *
     * @param $caracteristica: informacion de la caracteristica
     * @param $evaluacion: informacion de la evaluacion
     * @param $tipo: tipo de calculo: subcaracteristica, caracteristica, transparencia
     *
     * @return $respuesta: contiene la respuesta de la funcion
     * [valor]: resultado del calculo de la caracteristica
     * [formula]: formula utilizada para el calculo de la caracteristica
     * [siguiente_calculo]: el siguiente nivel a evaluar: caracteristica, transparencia
     */
    public function calcular($caracteristica, $evaluacion, $tipo)
    {
        $resultadosMetrica = $this->resultadoMetricaRepository->obtenerResultadosMetricaPorEvaluacionYCaracteristica(
                $evaluacion->id, $caracteristica->id);
        $respuesta = [];
        $respuesta['valor'] = 0;
        $respuesta['formula'] = '';
        switch($tipo){
            case 'subcaracteristica':
                $respuesta['valor'] = $this->calcularSubcaracteristica($caracteristica->id, $evaluacion->id,$resultadosMetrica);
                $respuesta['siguiente_calculo'] = "caracteristica";
                break;
            case 'caracteristica':
                $respuesta['valor'] = $this->calcularCaracteristica($caracteristica->id, $evaluacion->id);
                $respuesta['siguiente_calculo'] = "transparencia";
                break;
            case 'transparencia':
                $respuesta['valor'] = $this->calcularTransparencia($evaluacion->id);
                $respuesta['siguiente_calculo'] = "";
                break;
        }
        $respuesta['formula'] = $this->formula;
        return $respuesta;
    }

    /**
     * Funcion para calcular el valor de una caracteristica
     *
     * @param $idCaracteristica: id de la caracteristica
     * @param $idEvaluacion: id de la evaluacion
     *
     * @return $respuesta: el valor o resultado del calculo de la caracteristica
     */
    protected function calcularCaracteristica($idCaracteristica, $idEvaluacion){
        $valorSubcaracteristicas = $this->caracteristicaRepository->obtenerValoresSubcaracteristicas($idCaracteristica,$idEvaluacion);
        foreach ($valorSubcaracteristicas as $subcaracteristica) {
            $valor = $subcaracteristica->valorCaracteristica->first();
            $this->acumulado += $valor->valor;
            $this->numMetricas ++;
            $this->valores[] = $valor->valor;
        }
        
        $this->formula .= implode("+", $this->valores). ")";
        $resultado = round($this->acumulado / $this->numMetricas,1);
        $this->formula .= " / ".$this->numMetricas;
        $valorCaracteristica = $this->valorCaracteristicaRepositoryInterface->obtenerValorCaracteristicaPorEvaluacionYCaracteristica($idCaracteristica,$idEvaluacion);
        if(is_null($valorCaracteristica)){
            $this->valorCaracteristicaRepositoryInterface->create([
                "id_evaluacion" => $idEvaluacion,
                "id_caracteristica" => $idCaracteristica,
                "valor" => $resultado,
                "formula" => $this->formula
            ]);
        }
        else{
            $this->valorCaracteristicaRepositoryInterface->update($valorCaracteristica->id,["valor" => $resultado,
            "formula" => $this->formula]);
        }
        return $resultado;
    }

    /**
     * Funcion para calcular el valor de una subcaracteristica
     *
     * @param $idCaracteristica: id de la caracteristica
     * @param $idEvaluacion: id de la evaluacion
     * @param $resultadosMetricas: lista de la informacion de los resultados de las metricas de la subcaracteristica
     *
     * @return $respuesta: el valor o resultado del calculo de la subcaracteristica
     */
    protected function calcularSubcaracteristica($idCaracteristica, $idEvaluacion, $resultadosMetrica){
        foreach($resultadosMetrica as $resultadoMetrica){
            $resultado = $resultadoMetrica->resultado;
            if($resultadoMetrica->abreviatura == 'CDD'){
                $resultado = ($resultadoMetrica->resultado/3)*100;
                $this->acumulado += $resultado;
                $this->numMetricas ++;
                $this->valores[] = "((".$resultadoMetrica->resultado."/3)*100)";
                break;
            }
            if($resultadoMetrica->abreviatura == 'LMF'){
                $resultado = ($resultadoMetrica->resultado/18)*100;
                $this->acumulado += $resultado;
                $this->numMetricas ++;
                $this->valores[] = "((".$resultadoMetrica->resultado."/18)*100)";
                break;
            }
            $this->acumulado += $resultado;
            $this->numMetricas ++;
            $this->valores[] = $resultadoMetrica->resultado;
        }
        $this->formula .= implode("+", $this->valores). ")";
        $resultado = round($this->acumulado / $this->numMetricas,1);
        $this->formula .= " / ".$this->numMetricas;
        $valorCaracteristica = $this->valorCaracteristicaRepositoryInterface->obtenerValorCaracteristicaPorEvaluacionYCaracteristica($idCaracteristica,$idEvaluacion);
        if(is_null($valorCaracteristica)){
            $this->valorCaracteristicaRepositoryInterface->create([
                "id_evaluacion" => $idEvaluacion,
                "id_caracteristica" => $idCaracteristica,
                "valor" => $resultado,
                "formula" => $this->formula
            ]);
        }
        else{
            $this->valorCaracteristicaRepositoryInterface->update($valorCaracteristica->id,["valor" => $resultado,
            "formula" => $this->formula]);
        }
        return $resultado;
    }

    /**
     * Funcion para calcular el valor de la transparencia en la gestion de los datos del usuario
     *
     * @param $idEvaluacion: id de la evaluacion
     *
     * @return $respuesta: el valor o resultado del calculo de la transparencia
     */
    protected function calcularTransparencia($idEvaluacion){
        $valorCaracteristicasPrincipales = $this->caracteristicaRepository->obtenerValoresCaracteristicasPrincipales($idEvaluacion);

        foreach ($valorCaracteristicasPrincipales as $caracteristica) {
            $valor = $caracteristica->valorCaracteristica->first();
            $this->acumulado += $valor->valor;
            $this->numMetricas ++;
        }
        $resultado = round($this->acumulado / $this->numMetricas, 1);
        $this->evaluacionRepository->update($idEvaluacion,["resultado_final"=>$resultado]);
        return $resultado;
    }

}