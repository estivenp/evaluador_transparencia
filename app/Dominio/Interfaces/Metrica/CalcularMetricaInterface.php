<?php

namespace App\Dominio\Interfaces\Metrica;

interface CalcularMetricaInterface
{
    public function calcular($metrica, $valores);
}