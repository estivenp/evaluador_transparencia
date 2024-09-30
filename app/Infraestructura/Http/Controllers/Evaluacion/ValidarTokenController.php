<?php

namespace App\Infraestructura\Http\Controllers\Evaluacion;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;


class ValidarTokenController extends BaseController
{
    private $evaluacionRepository;

    public function __construct(
        EvaluacionRepositoryInterface $evaluacionRepository,
        )
    {
        $this->evaluacionRepository = $evaluacionRepository;
    }

    /**
     * Controlador que recibe la peticion para validar si hay una evaluacion pendiente
     *
     * @param $request: informacion de la peticion
     * [token]: token de la evaluacion
     *
     * @return Response $response: respuesta de la peticion
     *
     * @throws \Throwable $ex captura cualquier error inesperado que ocurra en la ejecucion
     */
    public function verificar(Request $request)
    {
        try{
            $token = $request->input('token');
            $validacion = $this->evaluacionRepository->validarToken($token);

            if (!is_null($validacion)) {
                $platadormaWeb = $validacion->plataformaWeb;
                return response()->json([
                    'valido' => true,
                    'plataforma_nombre' => $platadormaWeb->nombre,
                    'plataforma_url' => $platadormaWeb->url
                ]);
            } else {
                return response()->json([
                    'valido' => false,
                    'mensaje' => 'Token inválido o expirado'
                ]);
            }
        }
        catch(\Throwable $ex){
            return response()->json([
                'estado' => 'error',
                'msg' => $ex->getMessage()
            ], 400);
        }
        
    }
}