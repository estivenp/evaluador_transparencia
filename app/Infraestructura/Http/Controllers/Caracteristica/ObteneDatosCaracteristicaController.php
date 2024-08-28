<?php

namespace App\Infraestructura\Http\Controllers\Caracteristica;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Dominio\Interfaces\Caracteristica\ObtenerDatosCaracteristicaInterface;
use Illuminate\Support\Facades\View;


class ObteneDatosCaracteristicaController extends BaseController
{
    private $obtenerDatosCaracteristicaServ;

    public function __construct(ObtenerDatosCaracteristicaInterface $obtenerDatosCaracteristicaServ)
    {
        $this->obtenerDatosCaracteristicaServ = $obtenerDatosCaracteristicaServ;
    }

    public function obtenerDatos(Request $request)
    {
        try{
            $nombre = $request->input('nombre');

            $caracteristica = $this->obtenerDatosCaracteristicaServ->obtenerDatos($nombre);
            $vistaDisponibilidad = View::make('caracteristicaPrincipal', ['caracteristica'=>$caracteristica])->render();

            return response()->json([
                'estado' => 'success',
                'datos' => $caracteristica,
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