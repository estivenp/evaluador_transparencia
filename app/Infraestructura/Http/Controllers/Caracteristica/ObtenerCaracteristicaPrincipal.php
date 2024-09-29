<?php

namespace App\Infraestructura\Http\Controllers\Caracteristica;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\PlataformaWeb\PlataformaWebRepositoryInterface;

class ObtenerCaracteristicaPrincipalController extends BaseController
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

            $resultados = $this->plataformaWebRepository->obtenerPlataformaPorNombreYUrl($datos['nombre'], $datos['url']);
            if ($resultados->isNotEmpty()) {
                return response()->json([
                    'estado' => 'success',
                    'exite' => true,
                ], 200);
            } else {
                $this->plataformaWebRepository->create($datos);
                return response()->json([
                    'estado' => 'success',
                    'exite' => false,
                ], 200);
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