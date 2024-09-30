<?php

namespace App\Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PrincipalController extends BaseController
{
    /**
     * Controlador que recibe la peticion para renderizar la vista principal de la aplicacion
     *
     * @return View vista principal de la aplicacion
     */
    public function index()
    {
        return view('principal');
    }
}