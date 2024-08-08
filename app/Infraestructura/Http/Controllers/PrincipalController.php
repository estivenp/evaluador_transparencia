<?php

namespace App\Infraestructura\Http\Controllers;

use App\Aplicacion\Services\PrincipalService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PrincipalController extends BaseController
{
    private $principalService;

    public function __construct(PrincipalService $principalService)
    {
        $this->principalService = $principalService;
    }

    public function index()
    {
        $message = $this->principalService->getWelcomeMessage();
        return view('Principal', ['message' => $message]);
    }
}