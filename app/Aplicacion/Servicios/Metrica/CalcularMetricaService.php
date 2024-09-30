<?php

namespace App\Aplicacion\Servicios\Metrica;

use App\Dominio\Interfaces\Metrica\CalcularMetricaInterface;

class CalcularMetricaService implements CalcularMetricaInterface
{
    public function calcular($metrica, $valores)
    {
        $componentes = $metrica->componentesFormula()->orderBy('orden')->get();
        $formula = $this->reconstruirFormula($componentes,$valores,$metrica);
        $resultado = $this->evaluarFormula($formula);
        $respuesta['resultado'] = $resultado;
        $respuesta['formula'] = $formula;
        return $respuesta;
    }

    protected function reconstruirFormula($componentes,$valores,$metrica)
    {
        $formula = '';
        if($metrica->abreviatura == 'CDD'){
            $formula = "(";
            foreach($valores as $valor){
                $formula .= $valor."+";
            }
            $formula = rtrim($formula, $formula[-1]);
            $formula .= ")/".count($valores);
        }
        else{
            foreach ($componentes as $componente) {
                switch ($componente->tipo) {
                    case 'variable':
                    case 'pregunta':
                        $formula .= $valores[$componente->valor] ?? 0;
                        break;
                    case 'constante':
                    case 'operador':
                    case 'parentesis':
                        $formula .= $componente->valor;
                        break;
                    case 'absoluto_apertura':
                        $formula .= "abs(";
                        break;
                    case 'absoluto_cierre':
                        $formula .= ")";
                        break;
                }
            }
        }
        
        return $formula;
    }

    protected function evaluarFormula($formula)
    {
        $result = 0;
        eval('$result = ' . $formula . ';');
        return round($result, 1);
    }
}