<?php

namespace App\Persistencia\Repositorios\Evaluacion;

use App\Dominio\Entidad\Evaluacion\Evaluacion;
use App\Dominio\Interfaces\Evaluacion\EvaluacionRepositoryInterface;

class EvaluacionRepository implements EvaluacionRepositoryInterface
{
    public function all()
    {
        return Evaluacion::all();
    }

    public function find($id)
    {
        return Evaluacion::findOrFail($id);
    }

    public function create(array $data)
    {
        return Evaluacion::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->delete();
    }

    public function validarToken($token){
        return Evaluacion::where('token', $token)
                ->where('token_expira_en', '>', now())
                ->first();
    }

    public function getAllWithPlataforma()
    {
        return Evaluacion::with('plataformaWeb')->get();
    }
}