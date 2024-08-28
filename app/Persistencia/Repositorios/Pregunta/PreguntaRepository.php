<?php

namespace App\Persistencia\Repositorios\Pregunta;

use App\Dominio\Entidad\Pregunta\Pregunta;
use App\Dominio\Interfaces\Pregunta\PreguntaRepositoryInterface;

class PreguntaRepository implements PreguntaRepositoryInterface
{
    public function all()
    {
        return Pregunta::all();
    }

    public function find($id)
    {
        return Pregunta::findOrFail($id);
    }

    public function create(array $data)
    {
        return Pregunta::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = Pregunta::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = Pregunta::findOrFail($id);
        $evaluacion->delete();
    }

}