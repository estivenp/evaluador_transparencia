<?php

namespace App\Aplicacion\Servicios\Metrica;

use App\Dominio\Interfaces\Metrica\CalcularMetricaInterface;

class CalcularMetricaService implements CalcularMetricaInterface
{
    /**
     * Funcion para calcular el valor de una metrica
     *
     * @param $metrica: informacion de la metrica a calcular
     * @param $valores: valores digitados para el calculo de la metrica;
     *
     * @return $respuesta: contiene la respuesta de la funcion
     * [resultado]: Resultado del calculo de la metrica
     * [formula]: formula utilizada para el calculo de la metrica
     */
    public function calcular($metrica, $valores)
    {
        $componentes = $metrica->componentesFormula()->orderBy('orden')->get();
        $formula = $this->reconstruirFormula($componentes,$valores,$metrica);
        $resultado = $this->evaluarFormula($formula);
        $respuesta['resultado'] = $resultado;
        $respuesta['formula'] = $formula;
        return $respuesta;
    }

    /**
     * Funcion que construye la formula a utilizar
     *
     * @param $componentes: lista de los componentes de la formula
     * @param $valores: valores digitados para el calculo de la metrica;
     * @param $metrica: informacion de la metrica
     *
     * @return $formula: formula utilizada para el calculo de la metrica
     */
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

    /**
     * Funcion para evaluar la metrica y obtener el resultado
     *
     * @param $formula: formula utilizada para el calculo de la metrica
     *
     * @return double resultado de la metrica
     */
    protected function evaluarFormula($formula)
    {
        $result = 0;
        eval('$result = ' . $formula . ';');
        return round($result, 1);
    }
}