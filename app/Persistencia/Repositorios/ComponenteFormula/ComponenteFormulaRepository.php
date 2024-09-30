<?php

namespace App\Persistencia\Repositorios\ComponenteFormula;

use App\Dominio\Entidad\ComponenteFormula\ComponenteFormula;
use App\Dominio\Interfaces\ComponenteFormula\ComponenteFormulaRepositoryInterface;

class ComponenteFormulaRepository implements ComponenteFormulaRepositoryInterface
{
    public function all()
    {
        return ComponenteFormula::all();
    }

    public function find($id)
    {
        return ComponenteFormula::findOrFail($id);
    }

    public function create(array $data)
    {
        return ComponenteFormula::create($data);
    }

    public function update($id, array $data)
    {
        $evaluacion = ComponenteFormula::findOrFail($id);
        $evaluacion->update($data);
        return $evaluacion;
    }

    public function delete($id)
    {
        $evaluacion = ComponenteFormula::findOrFail($id);
        $evaluacion->delete();
    }
    public function obtenerFormulaMetrica($idMetrica){
        return ComponenteFormula::where('id_metrica', $idMetrica)
        ->orderBy('orden')
        ->selectRaw('GROUP_CONCAT(valor ORDER BY orden SEPARATOR "") as formula')
        ->value('formula');
    }

}