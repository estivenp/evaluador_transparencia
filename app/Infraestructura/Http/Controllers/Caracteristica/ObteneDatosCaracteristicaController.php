<?php

namespace App\Infraestructura\Http\Controllers\Caracteristica;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\Caracteristica\ObtenerDatosCaracteristicaInterface;
use Illuminate\Support\Facades\View;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;
use App\Dominio\Interfaces\ValorCaracteristica\ValorCaracteristicaRepositoryInterface;


class ObteneDatosCaracteristicaController extends BaseController
{
    private $obtenerDatosCaracteristicaServ;
    private $evaluacionRepository;
    private $resultadoMetricaRepository;
    private $valorCaracteristicaRepository;

    public function __construct(ObtenerDatosCaracteristicaInterface $obtenerDatosCaracteristicaServ, 
        CaracteristicaRepositoryInterface $caracteristicaRepository,
        EvaluacionRepositoryInterface $evaluacionRepository,
        ResultadoMetricaRepositoryInterface $resultadoMetricaRepository,
        ValorCaracteristicaRepositoryInterface $valorCaracteristicaRepository
        )
    {
        $this->obtenerDatosCaracteristicaServ = $obtenerDatosCaracteristicaServ;
        $this->caracteristicaRepository = $caracteristicaRepository;
        $this->evaluacionRepository = $evaluacionRepository;
        $this->resultadoMetricaRepository = $resultadoMetricaRepository;
        $this->valorCaracteristicaRepository = $valorCaracteristicaRepository;
    }

    public function obtenerDatos(Request $request)
    {
        try{
            $nombre = $request->input('nombre');
            $token = $request->input('token');

            $caracteristica = $this->caracteristicaRepository->obtenerCaracteristicaPorNombre($nombre);
            $metricas = $caracteristica->metricas;
            $resultados = [];
            $valorCaracteristica = null;
            $valoresCar = [];
            if(!is_null($token)){
                $contador = 0;
                $numeroMetricas = count($metricas);
                $evaluacion = $this->evaluacionRepository->validarToken($token);
                foreach($metricas as $metrica){
                    $contador ++;
                    $resultadoMetrica = $this->resultadoMetricaRepository->obtenerResultadoMetricaPorEvaluacionYMetrica($evaluacion->id,$metrica->id);
                    if(!is_null($resultadoMetrica)){
                        $datosEscala = explode(", ", trim($metrica->escala, "[]"));
                        $resultado['id_metrica'] = $metrica->id;
                        $resultado['abreviatura'] = $metrica->abreviatura;
                        $resultado['resultado'] = $resultadoMetrica->resultado;
                        $resultado['formula'] = $resultadoMetrica->formula;
                        $resultado['escala'] = $datosEscala;
                        $resultado['unidad'] = $metrica->unidad;

                        $resultados[] = $resultado;
                        $valoresCar[$metrica->abreviatura] = $resultadoMetrica->resultado;
                    }
                    if($contador == $numeroMetricas){
                        $valorCaracteristica = $this->valorCaracteristicaRepository->obtenerValorCaracteristicaPorEvaluacionYCaracteristica(
                            $caracteristica->id, $evaluacion->id);
                    }
                }
                if(is_null($caracteristica->id_caracteristica_principal)){
                    $valorCaracteristica = $this->valorCaracteristicaRepository->obtenerValorCaracteristicaPorEvaluacionYCaracteristica(
                        $caracteristica->id, $evaluacion->id);
                    $valorSubcaracteristicas = $this->caracteristicaRepository->obtenerValoresSubcaracteristicas($caracteristica->id,$evaluacion->id);
                    foreach ($valorSubcaracteristicas as $subcaracteristica) {
                        $valor = $subcaracteristica->valorCaracteristica->first();
                        $valoresCar[$subcaracteristica->nombre] = $valor->valor;
                    }
                }
            }
            $vistaDisponibilidad = View::make('caracteristica', ['caracteristica'=>$caracteristica,
                'metricas'=>$metricas, 'resultados'=>$resultados,
                'valorCaracteristica'=>$valorCaracteristica,'valores'=>$valoresCar])->render();

            return response()->json([
                'estado' => 'exito',
                'datos' => $caracteristica,
                'vista' => $vistaDisponibilidad,
                'resultados' => $resultados,
                'valorCaracteristica' => $valorCaracteristica,
            ], 200);
        }
        catch(\Throwable $ex){
            return response()->json([
                'estado' => 'error',
                'msg' => $ex->getMessage()
            ], 400);
        }
        
    }
}