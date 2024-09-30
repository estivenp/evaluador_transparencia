<?php

namespace App\Infraestructura\Http\Controllers\Archivo;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;
use App\Dominio\Interfaces\Archivos\GenerarCsvInterface;


class GenerarReporteController extends BaseController
{
    private $generarCsv;

    public function __construct(
        GenerarCsvInterface $generarCsv
        )
    {
        $this->generarCsv = $generarCsv;
    }

    public function generar(Request $request)
    {
        try{

            $token = $request->input('token');
            $csvContent = $this->generarCsv->generar($token);
            $fecha = Carbon::now()->format('Y-m-d');
            $plataforma = "facebook";

            // Create response
            $response = Response::make($csvContent);
            $response->header('Content-Type', 'text/csv');
            $response->header('Content-Disposition', 'attachment; filename="informe_transparencia_'.$plataforma."_".$fecha.'.csv"');
            $response->header('fecha', $fecha);
            $response->header('plataforma', $plataforma);

            return $response;
        }catch(\Throwable $ex){
            return response()->json([
                'estado' => 'error',
                'msg' => $ex->getMessage()
            ], 400);
        }
    }

}