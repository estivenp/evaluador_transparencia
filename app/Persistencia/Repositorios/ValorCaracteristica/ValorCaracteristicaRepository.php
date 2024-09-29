<?php

namespace App\Persistencia\Repositorios\ValorCaracteristica;

use App\Dominio\Entidad\ValorCaracteristica\ValorCaracteristica;
use App\Dominio\Interfaces\ValorCaracteristica\ValorCaracteristicaRepositoryInterface;

class ValorCaracteristicaRepository implements ValorCaracteristicaRepositoryInterface
{
    public function all()
    {
        return ValorCaracteristica::all();
    }

    public function find($id)
    {
        return ValorCaracteristica::findOrFail($id);
    }

    public function create(array $data)
    {
        return ValorCaracteristica::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = ValorCaracteristica::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = ValorCaracteristica::findOrFail($id);
        $evaluacion->delete();
    }

    public function obtenerValorCaracteristicaPorEvaluacionYCaracteristica($idCaracteristica,$idEvaluacion)
    {
        return ValorCaracteristica::where('id_evaluacion','=', $idEvaluacion)
            ->where('id_caracteristica', '=',$idCaracteristica)
            ->first();
    }
}