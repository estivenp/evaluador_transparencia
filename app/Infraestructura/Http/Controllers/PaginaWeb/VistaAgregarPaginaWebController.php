<?php

namespace App\Infraestructura\Http\Controllers\PaginaWeb;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VistaAgregarPaginaWebController extends BaseController
{
    /**
     * Controlador que recibe la peticion para renderizar la vista de agregar plataforma web
     *
     * @return View vista de agregar plataforma web
     */
    public function index()
    {
        return view('agregarPlataformaWeb');
    }
}