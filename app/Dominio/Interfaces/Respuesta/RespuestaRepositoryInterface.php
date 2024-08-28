<?php

namespace App\Dominio\Interfaces\Respuesta;

interface RespuestaRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}