<?php

namespace App\Dominio\Interfaces\Evaluacion;

interface EvaluacionRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function validarToken($token);
    public function getAllWithPlataforma();
}