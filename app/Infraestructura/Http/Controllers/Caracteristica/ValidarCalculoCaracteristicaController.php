<?php

namespace App\Infraestructura\Http\Controllers\Caracteristica;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;
use App\Dominio\Interfaces\ValorCaracteristica\ValorCaracteristicaRepositoryInterface;


class ValidarCalculoCaracteristicaController extends BaseController
{
    private $evaluacionRepository;
    private $resultadoMetricaRepository;
    private $valorCaracteristicaRepository;

    public function __construct(
        CaracteristicaRepositoryInterface $caracteristicaRepository,
        EvaluacionRepositoryInterface $evaluacionRepository,
        ResultadoMetricaRepositoryInterface $resultadoMetricaRepository,
        ValorCaracteristicaRepositoryInterface $valorCaracteristicaRepository
        )
    {
        $this->caracteristicaRepository = $caracteristicaRepository;
        $this->evaluacionRepository = $evaluacionRepository;
        $this->resultadoMetricaRepository = $resultadoMetricaRepository;
        $this->valorCaracteristicaRepository = $valorCaracteristicaRepository;
    }

    /**
     * Controlador que recibe la peticion para validar si se debe realizar el calculo de la caracteristica
     *
     * @param $request: informacion de la peticion
     * [id_caracteristica]: id de la caracteristica a validar
     * [token]: token de la evaluacion
     * [tipo]: tipo de caracteristica a validar: subcaracteristica, caracteristica, transparencia
     *
     * @return Response $response: respuesta de la peticion
     *
     * @throws \Throwable $ex captura cualquier error inesperado que ocurra en la ejecucion
     */
    public function validar(Request $request)
    {
        try{
            $id_caracteristica = $request->input('id_caracteristica');
            $token = $request->input('token');
            $tipo =$request->input('tipo');

            $respuesta = [];
            $respuesta['calcular'] = false;
            $caracteristica = $this->caracteristicaRepository->find($id_caracteristica);
            $evaluacion = $this->evaluacionRepository->validarToken($token);
            switch($tipo){
                case 'subcaracteristica':
                    $metricas = $caracteristica->metricas;
                    $resultadosMetrica = $this->resultadoMetricaRepository->obtenerResultadosMetricaPorEvaluacionYCaracteristica(
                        $evaluacion->id,$caracteristica->id);
                    if(count($metricas) == count($resultadosMetrica)){
                        $respuesta['id_caracteristica'] = $caracteristica->id;
                        $respuesta['tipo'] = "subcaracteristica";
                        $respuesta['calcular'] = true;
                    }
                    break;
                case 'caracteristica':
                    if(is_null($caracteristica->id_caracteristica_principal)){
                        $caracteristicaPadre = $caracteristica;
                    }
                    else{
                        $caracteristicaPadre = $caracteristica->caracteristicaPrincipal;
                    }
                    $subcaracteristicas = $caracteristicaPadre->subCaracteristicas;
                    $valorSubcaracteristicas = $this->caracteristicaRepository->obtenerValoresSubcaracteristicas($caracteristicaPadre->id, $evaluacion->id);
                    if(count($subcaracteristicas) == count($valorSubcaracteristicas)){
                        $respuesta['id_caracteristica'] = $caracteristicaPadre->id;
                        $respuesta['tipo'] = "caracteristica";
                        $respuesta['calcular'] = true;
                    }
                    break;
                case 'transparencia':
                    $caracteristicasPrincipales = $this->caracteristicaRepository->obtenerCaracteristicaPrincipales();
                    $valorCaracteristicasPrincipales = $this->caracteristicaRepository->obtenerValoresCaracteristicasPrincipales($evaluacion->id);
                    if(count($caracteristicasPrincipales) == count($valorCaracteristicasPrincipales)){
                        $respuesta['id_caracteristica'] = $caracteristica->id;
                        $respuesta['tipo'] = "transparencia";
                        $respuesta['calcular'] = true;
                    }
                    break;
                default:
                    $respuesta['id_caracteristica'] = $caracteristica->id;
                    $respuesta['tipo'] = "";
                    $respuesta['tipo_siguiente'] = "";
                    $respuesta['calcular'] = false;
            }
            return response()->json([
                'estado' => 'exito',
                'resultado' => $respuesta
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