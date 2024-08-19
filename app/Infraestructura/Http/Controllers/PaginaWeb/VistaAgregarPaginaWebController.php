<?php

namespace App\Infraestructura\Http\Controllers\PaginaWeb;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class VistaAgregarPaginaWebController extends BaseController
{
    public function index()
    {
        return view('agregarPlataformaWeb');
    }
}