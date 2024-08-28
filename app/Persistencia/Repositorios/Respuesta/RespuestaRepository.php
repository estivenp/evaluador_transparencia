<?php

namespace App\Persistencia\Repositorios\Respuesta;

use App\Dominio\Entidad\Respuesta\Respuesta;
use App\Dominio\Interfaces\Respuesta\RespuestaRepositoryInterface;

class RespuestaRepository implements RespuestaRepositoryInterface
{
    public function all()
    {
        return Respuesta::all();
    }

    public function find($id)
    {
        return Respuesta::findOrFail($id);
    }

    public function create(array $data)
    {
        return Respuesta::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = Respuesta::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = Respuesta::findOrFail($id);
        $evaluacion->delete();
    }

}