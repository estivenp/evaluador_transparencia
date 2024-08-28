<?php

namespace App\Dominio\Interfaces\ComponenteFormula;

interface ComponenteFormulaRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}