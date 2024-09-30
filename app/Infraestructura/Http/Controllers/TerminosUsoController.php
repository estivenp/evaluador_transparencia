<?php

namespace App\Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class TerminosUsoController extends BaseController
{
    /**
     * Controlador que recibe la peticion para renderizar la vista de terminos de uso
     *
     * @return View vista terminos de uso
     */
    public function index()
    {
        return view('terminosUso');
    }
}