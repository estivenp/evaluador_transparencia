<?php

namespace App\Persistencia\Repositorios\Variable;

use App\Dominio\Entidad\Variable\Variable;
use App\Dominio\Interfaces\Variable\VariableRepositoryInterface;

class VariableRepository implements VariableRepositoryInterface
{
    public function all()
    {
        return Variable::all();
    }

    public function find($id)
    {
        return Variable::findOrFail($id);
    }

    public function create(array $data)
    {
        return Variable::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = Variable::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = Variable::findOrFail($id);
        $evaluacion->delete();
    }

}