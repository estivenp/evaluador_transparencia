<?php

namespace App\Infraestructura\Http\Controllers\PaginaWeb;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;
use Illuminate\Support\Facades\View;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;
use Illuminate\Support\Str;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;


class AgregarPaginaWebController extends BaseController
{
    private $plataformaWebRepository;
    private $caracteristicaRepository;
    private $evaluacionRepository;

    public function __construct(PlataformaWebRepositoryInterface $plataformaWebRepository,
        CaracteristicaRepositoryInterface $caracteristicaRepository,
        EvaluacionRepositoryInterface $evaluacionRepository
        )
    {
        $this->plataformaWebRepository = $plataformaWebRepository;
        $this->caracteristicaRepository = $caracteristicaRepository;
        $this->evaluacionRepository = $evaluacionRepository;
    }

    public function agregar(Request $request)
    {
        try{
            $datos = $request->all();

            $pagina = $this->plataformaWebRepository->obtenerPlataformaPorNombreYUrl($datos['nombre'], $datos['url']);
            if (is_null($pagina)) {
                $pagina = $this->plataformaWebRepository->create($datos);
            }

            $token = Str::uuid()->toString();
            $this->evaluacionRepository->create([
                'id_plataforma' => $pagina->id,
                'fecha_evaluacion' => now(),
                'token' => $token,
                'token_expira_en' => now()->addHours(24),
            ]);
            
            return response()->json([
                'estado' => true,
                'token' => $token
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