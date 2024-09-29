<?php

namespace App\Dominio\Interfaces\ValorCaracteristica;

interface ValorCaracteristicaRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function obtenerValorCaracteristicaPorEvaluacionYCaracteristica($idCaracteristica,$idEvaluacion);
}