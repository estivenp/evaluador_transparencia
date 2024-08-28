<?php

namespace App\Dominio\Interfaces\Pregunta;

interface PreguntaRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}