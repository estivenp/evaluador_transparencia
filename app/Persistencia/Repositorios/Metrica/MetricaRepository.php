<?php

namespace App\Persistencia\Repositorios\Metrica;

use App\Dominio\Entidad\Metrica\Metrica;
use App\Dominio\Interfaces\Metrica\MetricaRepositoryInterface;

class MetricaRepository implements MetricaRepositoryInterface
{
    public function all()
    {
        return Metrica::all();
    }

    public function find($id)
    {
        return Metrica::findOrFail($id);
    }

    public function create(array $data)
    {
        return Metrica::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = Metrica::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = Metrica::findOrFail($id);
        $evaluacion->delete();
    }

}