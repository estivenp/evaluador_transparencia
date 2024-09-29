<?php

namespace App\Persistencia\Repositorios\ResultadoMetrica;

use App\Dominio\Entidad\ResultadoMetrica\ResultadoMetrica;
use App\Dominio\Interfaces\ResultadoMetrica\ResultadoMetricaRepositoryInterface;

class ResultadoMetricaRepository implements ResultadoMetricaRepositoryInterface
{
    public function all()
    {
        return ResultadoMetrica::all();
    }

    public function find($id)
    {
        return ResultadoMetrica::findOrFail($id);
    }

    public function create(array $data)
    {
        return ResultadoMetrica::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = ResultadoMetrica::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = ResultadoMetrica::findOrFail($id);
        $evaluacion->delete();
    }

    public function obtenerResultadoMetricaPorEvaluacionYMetrica($idEvaluacion,$idMetrica)
    {
        return ResultadoMetrica::where('id_evaluacion','=', $idEvaluacion)
            ->where('id_metrica', '=',$idMetrica)
            ->first();
    }

    public function obtenerResultadosMetricaPorEvaluacionYCaracteristica($idEvaluacion, $idCaracteristica)
    {
        return ResultadoMetrica::join('metrica', 'resultado_metrica.id_metrica', '=', 'metrica.id')
            ->join('caracteristica', 'metrica.id_caracteristica', '=', 'caracteristica.id')
            ->where('resultado_metrica.id_evaluacion', $idEvaluacion)
            ->where('caracteristica.id', $idCaracteristica)
            ->select('metrica.id', 'metrica.abreviatura', 'resultado_metrica.resultado', 'resultado_metrica.formula')
            ->get();
    }
}