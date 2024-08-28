<?php

namespace App\Dominio\Entidad\Variable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Dominio\Entidad\ComponenteFormula\ComponenteFormula;

class Variable extends Model
{
    protected $table = 'variable';
    protected $fillable = ['id_componente_formula', 'tipo', 'nombre', 'descripcion'];

    public function componenteFormula(): BelongsTo
    {
        return $this->belongsTo(ComponenteFormula::class, 'id_componente_formula');
    }
}
