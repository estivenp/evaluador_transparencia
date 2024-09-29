<?php

namespace App\Infraestructura\Http\Controllers\Metrica;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\Metrica\CalcularMetricaInterface;
use Illuminate\Support\Facades\View;
use App\Dominio\Interfaces\Metrica\MetricaRepositoryInterface;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;

class CalcularMetricaController extends BaseController
{
    private $calcularMetricaInterface;
    private $metricaRepositoryInterface;
    private $evaluacionRepository;
    private $resultadoMetricaRepository;

    public function __construct(
        CalcularMetricaInterface $calcularMetricaInterface,
        MetricaRepositoryInterface $metricaRepositoryInterface,
        EvaluacionRepositoryInterface $evaluacionRepository,
        ResultadoMetricaRepositoryInterface $resultadoMetricaRepository
        )
    {
        $this->calcularMetricaInterface = $calcularMetricaInterface;
        $this->metricaRepositoryInterface = $metricaRepositoryInterface;
        $this->evaluacionRepository = $evaluacionRepository;
        $this->resultadoMetricaRepository = $resultadoMetricaRepository;
    }

    public function calcular(Request $request)
    {
        try{
            $data = $request->json()->all();
            $id_metrica = $data['id_metrica'];
            $datos = $data['datos'];
            $token  = $data['token'];

            $metrica = $this->metricaRepositoryInterface->find($id_metrica);
            $resultado = $this->calcularMetricaInterface->calcular($metrica, $datos);
            $datosEscala = explode(", ", trim($metrica->escala, "[]"));
            $evaluacion = $this->evaluacionRepository->validarToken($token);

            $resultadoMetrica = $this->resultadoMetricaRepository->obtenerResultadoMetricaPorEvaluacionYMetrica(
                    $evaluacion->id,$metrica->id);
            if(is_null($resultadoMetrica)){
                $this->resultadoMetricaRepository->
                    create(['id_metrica'=>$metrica->id,
                            'id_evaluacion'=>$evaluacion->id,
                            'resultado'=>$resultado['resultado'],
                            'formula'=>$resultado['formula']]);
            }
            else{
                $this->resultadoMetricaRepository->
                    update($resultadoMetrica->id, ['resultado'=>$resultado['resultado'],
                        'formula'=>$resultado['formula']]);
            }

            return response()->json([
                'estado' => 'exito',
                'resultado' => $resultado['resultado'],
                'formula' => $resultado['formula'],
                'valores' => $datos,
                'id_metrica' => $id_metrica,
                'abreviatura' => $metrica->abreviatura,
                'id_caracteristica' => $metrica->caracteristica->id,
                'unidad' => $metrica->unidad,
                'escala' => $datosEscala
            ], 200);
        }
        catch(\Throwable $ex){
            return response()->json([
                'estado' => 'error',
            ], 400);
        }
        
    }
}