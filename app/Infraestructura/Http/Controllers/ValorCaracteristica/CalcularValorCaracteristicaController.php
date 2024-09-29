<?php

namespace App\Infraestructura\Http\Controllers\ValorCaracteristica;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\ValorCaracteristica\CalcularValorCaracteristicaInterface;
use App\Dominio\Interfaces\ValorCaracteristica\ValorCaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;

class CalcularValorCaracteristicaController extends BaseController
{
    private $calcularValorCaracteristica;
    private $valorCaracteristicaRepositoryInterface;
    private $caracteristicaRepository;
    private $evaluacionRepository;
    private $resultadoMetricaRepository;

    public function __construct(
        CalcularValorCaracteristicaInterface $calcularValorCaracteristica,
        ValorCaracteristicaRepositoryInterface $valorCaracteristicaRepositoryInterface,
        EvaluacionRepositoryInterface $evaluacionRepository,
        CaracteristicaRepositoryInterface $caracteristicaRepository,
        ResultadoMetricaRepositoryInterface $resultadoMetricaRepository
        )
    {
        $this->calcularValorCaracteristica = $calcularValorCaracteristica;
        $this->valorCaracteristicaRepositoryInterface = $valorCaracteristicaRepositoryInterface;
        $this->evaluacionRepository = $evaluacionRepository;
        $this->caracteristicaRepository = $caracteristicaRepository;
        $this->resultadoMetricaRepository = $resultadoMetricaRepository;
    }

    public function calcular(Request $request)
    {
        try{
            $id_caracteristica = $request->input('id_caracteristica');
            $token = $request->input('token');
            $tipo = $request->input('tipo');

            $caracteristica = $this->caracteristicaRepository->find($id_caracteristica);
            $evaluacion = $this->evaluacionRepository->validarToken($token);
            $resultado = $this->calcularValorCaracteristica->calcular($caracteristica,$evaluacion,$tipo);
            $resultadosAsociados = $this->resultadoMetricaRepository->obtenerResultadosMetricaPorEvaluacionYCaracteristica($evaluacion->id, $caracteristica->id);
            return response()->json([
                'estado' => 'exito',
                'id_caracteristica' => $caracteristica->id,
                'resultado' => $resultado['valor'],
                'formula' => $resultado['formula'],
                'metricas' => $resultadosAsociados,
                'tipo' => $tipo
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