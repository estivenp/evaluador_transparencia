<?php

namespace App\Dominio\Interfaces\OpcionRespuesta;

interface OpcionRespuestaRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}