<?php

namespace App\Infraestructura\Http\Controllers\Evaluacion;

use App\Dominio\Interfaces\Evaluacion\TablaResultadoInterface;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class TablaResultadoController extends BaseController
{
    private $evaluacionService;

    public function __construct(TablaResultadoInterface $evaluacionService)
    {
        $this->evaluacionService = $evaluacionService;
    }

    public function index()
    {
        $evaluaciones = $this->evaluacionService->getAllEvaluaciones();
        return view('Evaluacion.TablaResultados', compact('evaluaciones'));
    }
}