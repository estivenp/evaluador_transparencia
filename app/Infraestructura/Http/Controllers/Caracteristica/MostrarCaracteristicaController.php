<?php

namespace App\Infraestructura\Http\Controllers\Caracteristica;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class MostrarCaracteristicaController extends BaseController
{
    public function index()
    {
        return view('caracteristicaPrincipal');
    }
}