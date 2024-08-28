<?php

namespace App\Infraestructura\Http\Controllers\PaginaWeb;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;
use Illuminate\Support\Facades\View;

class AgregarPaginaWebController extends BaseController
{
    private $plataformaWebRepository;

    public function __construct(PlataformaWebRepositoryInterface $plataformaWebRepository)
    {
        $this->plataformaWebRepository = $plataformaWebRepository;
    }

    public function agregar(Request $request)
    {
        try{
            $datos = $request->all();
            $estado = 'success';

            $resultados = $this->plataformaWebRepository->obtenerPlataformaPorNombreYUrl($datos['nombre'], $datos['url']);
            if (!$resultados->isNotEmpty()) {
                $this->plataformaWebRepository->create($datos);
            }
            $vistaDisponibilidad = View::make('caracteristicaPrincipal')->render();
            return response()->json([
                'estado' => true,
                'vista' => $vistaDisponibilidad
            ], 200);
        }
        catch(\Throwable $ex){
            return response()->json([
                'estado' => 'error',
            ], 400);
        }
        
    }
}