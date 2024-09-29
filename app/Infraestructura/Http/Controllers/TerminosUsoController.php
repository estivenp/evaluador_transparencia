<?php

namespace App\Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class TerminosUsoController extends BaseController
{
    public function index()
    {
        return view('terminosUso');
    }
}