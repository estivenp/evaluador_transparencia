<?php

namespace App\Persistencia\Repositorios\Caracteristica;

use App\Dominio\Entidad\Caracteristica\Caracteristica;
use App\Dominio\Interfaces\Caracteristica\CaracteristicaRepositoryInterface;

class CaracteristicaRepository implements CaracteristicaRepositoryInterface
{
    public function all()
    {
        return Caracteristica::all();
    }

    public function find($id)
    {
        return Caracteristica::findOrFail($id);
    }

    public function create(array $data)
    {
        return Caracteristica::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = Caracteristica::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = Caracteristica::findOrFail($id);
        $evaluacion->delete();
    }
    public function obtenerCaracteristicaPorNombre($nombre)
    {
        return Caracteristica::where('nombre', 'like', '%' . $nombre . '%')->first();
    }
}