<?php

namespace App\Dominio\Interfaces\ValorCaracteristica;

interface CalcularValorCaracteristicaInterface
{
    public function calcular($caracteristica, $evaluacion,$tipo);
}