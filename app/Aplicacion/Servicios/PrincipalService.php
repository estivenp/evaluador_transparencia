<?php

namespace App\Aplicacion\Servicios;

class PrincipalService
{
    public function getWelcomeMessage(): string
    {
        return "Bienvenido a nuestro curso de Laravel con Arquitectura Hexagonal";
    }
}