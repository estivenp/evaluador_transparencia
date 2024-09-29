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

    public function validar(Request $request)
    {
        try{
            $id_caracteristica = $request->input('id_caracteristica');
            $token = $request->input('token');
            $cambio_metrica =$request->input('cambio_metrica');

            $respuesta = [];
            $respuesta['calcular'] = false;

            $caracteristica = $this->caracteristicaRepository->find($id_caracteristica);
            $evaluacion = $this->evaluacionRepository->validarToken($token);
            $valorCaracteristica = $this->valorCaracteristicaRepository->obtenerValorCaracteristicaPorEvaluacionYCaracteristica(
                $caracteristica->id, $evaluacion->id);
            if($cambio_metrica == 'true' || is_null($valorCaracteristica)){
                $metricas = $caracteristica->metricas;
                $resultadosMetrica = $this->resultadoMetricaRepository->obtenerResultadosMetricaPorEvaluacionYCaracteristica(
                    $evaluacion->id,$caracteristica->id);
                if(count($metricas) == count($resultadosMetrica)){
                    $respuesta['id_caracteristica'] = $caracteristica->id;
                    $respuesta['tipo'] = "subcaracteristica";
                    $respuesta['calcular'] = true;
                }
            }
            else{
                if(is_null($caracteristica->id_caracteristica_principal)){
                    $caracteristicaPadre = $caracteristica;
                }
                else{
                    $caracteristicaPadre = $caracteristica->caracteristicaPrincipal;
                }
                $valorCaracteristicaPadre = $this->valorCaracteristicaRepository->obtenerValorCaracteristicaPorEvaluacionYCaracteristica(
                    $caracteristicaPadre->id, $evaluacion->id);
                if(is_null($valorCaracteristicaPadre)){
                    $subcaracteristicas = $caracteristicaPadre->subCaracteristicas;
                    $valorSubcaracteristicas = $this->caracteristicaRepository->obtenerValoresSubcaracteristicas($caracteristicaPadre->id, $evaluacion->id);
                    if(count($subcaracteristicas) == count($valorSubcaracteristicas)){
                        $respuesta['id_caracteristica'] = $caracteristicaPadre->id;
                        $respuesta['tipo'] = "caracteristica";
                        $respuesta['calcular'] = true;
                    }
                }
                else{
                    $caracteristicasPrincipales = $this->caracteristicaRepository->obtenerCaracteristicaPrincipales();
                    $valorCaracteristicasPrincipales = $this->caracteristicaRepository->obtenerValoresCaracteristicasPrincipales($evaluacion->id);
                    if(is_null($evaluacion->resultado_final) && count($caracteristicasPrincipales) == count($valorCaracteristicasPrincipales)){
                        $respuesta['id_caracteristica'] = $caracteristica->id;
                        $respuesta['tipo'] = "transparencia";
                        $respuesta['calcular'] = true;
                    }
                }
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