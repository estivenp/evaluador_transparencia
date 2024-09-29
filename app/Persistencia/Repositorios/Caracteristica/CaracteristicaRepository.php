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

    public function obtenerCaracteristicaPrincipales()
    {
        return Caracteristica::whereNull('id_caracteristica_principal')->get();
    }

    public function obtenerValoresSubcaracteristicas($idCaracteristicaPrincipal,$idEvaluacion)
    {
        return Caracteristica::with(['valorCaracteristica' => function ($query) use ($idEvaluacion) {
            $query->where('id_evaluacion', $idEvaluacion);
        }])
        ->where('id_caracteristica_principal', $idCaracteristicaPrincipal)
        ->get()
        ->filter(function ($caracteristica) {
            return $caracteristica->valorCaracteristica->isNotEmpty();
        });
    }

    public function obtenerValoresCaracteristicasPrincipales($idEvaluacion)
    {
        return Caracteristica::with(['valorCaracteristica' => function ($query) use ($idEvaluacion) {
            $query->where('id_evaluacion', $idEvaluacion);
        }])
        ->whereNull('id_caracteristica_principal')
        ->whereExists(function ($query) use ($idEvaluacion) {
            $query->select(\DB::raw(1))
                  ->from('valor_caracteristica')
                  ->whereColumn('valor_caracteristica.id_caracteristica', 'caracteristica.id')
                  ->where('valor_caracteristica.id_evaluacion', $idEvaluacion);
        })
        ->get();
    }
}