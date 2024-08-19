<?php

namespace App\Infraestructura\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PrincipalController extends BaseController
{
    public function index()
    {
        return view('Principal');
    }
}