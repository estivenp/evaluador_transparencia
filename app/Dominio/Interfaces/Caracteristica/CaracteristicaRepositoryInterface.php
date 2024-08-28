<?php

namespace App\Dominio\Interfaces\Caracteristica;

interface CaracteristicaRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}