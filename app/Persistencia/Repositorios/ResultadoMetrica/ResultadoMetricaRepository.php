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

}