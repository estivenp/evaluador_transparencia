<?php

namespace App\Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;

class VerTransparenciaController extends BaseController
{
    private $caracteristicaRepository;
    private $evaluacionRepository;
    private $plataformaWebRepository;

    public function __construct(
        PlataformaWebRepositoryInterface $plataformaWebRepository,
        EvaluacionRepositoryInterface $evaluacionRepository,
        CaracteristicaRepositoryInterface $caracteristicaRepository,
        )
    {
        $this->evaluacionRepository = $evaluacionRepository;
        $this->caracteristicaRepository = $caracteristicaRepository;
        $this->plataformaWebRepository = $plataformaWebRepository;
    }

    public function index(Request $request)
    {
        try{
            $token = $request->input('token');
            $evaluacion = $this->evaluacionRepository->validarToken($token);
            $plataforma = $evaluacion->plataformaWeb;
            $caracteristicasPrincipales = $this->caracteristicaRepository->obtenerValoresCaracteristicasPrincipales($evaluacion->id);
            $caracteristicas = [];
            $formula = "(";
            foreach ($caracteristicasPrincipales as $caracteristica) {
                $valor = $caracteristica->valorCaracteristica->first();
                $caracteristicas[$valor->caracteristica->nombre] = $valor->valor;
                $formula .= $valor->valor."+";
            }
            $formula = rtrim($formula, $formula[-1]);
            $formula .= ")/5";

            $vista = View::make('transparencia',[
                'plataforma' => $plataforma,
                'caracteristicas' => $caracteristicas,
                'evaluacion' => $evaluacion,
                'formula' => $formula
            ])->render();
            return response()->json(['vista' => $vista], 200);
        }catch(\Throwable $ex){
            return response()->json([
                'estado' => 'error',
                'msg' => $ex->getMessage()
            ], 400);
        }
    }
}