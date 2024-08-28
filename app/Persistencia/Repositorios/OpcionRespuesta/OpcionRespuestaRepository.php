<?php

namespace App\Persistencia\Repositorios\OpcionRespuesta;

use App\Dominio\Entidad\OpcionRespuesta\OpcionRespuesta;
use App\Dominio\Interfaces\OpcionRespuesta\OpcionRespuestaRepositoryInterface;

class OpcionRespuestaRepository implements OpcionRespuestaRepositoryInterface
{
    public function all()
    {
        return OpcionRespuesta::all();
    }

    public function find($id)
    {
        return OpcionRespuesta::findOrFail($id);
    }

    public function create(array $data)
    {
        return OpcionRespuesta::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = OpcionRespuesta::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = OpcionRespuesta::findOrFail($id);
        $evaluacion->delete();
    }

}