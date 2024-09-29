<?php

namespace App\Dominio\Entidad\Pregunta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Dominio\Entidad\ComponenteFormula\ComponenteFormula;
use App\Dominio\Entidad\Respuesta\Respuesta;

class Pregunta extends Model
{
    protected $table = 'pregunta';
    protected $fillable = ['id_componente_formula', 'texto', 'orden'];

    public function componenteFormula(): BelongsTo
    {
        return $this->belongsTo(ComponenteFormula::class, 'id_componente_formula');
    }

    public function respuesta(): BelongsTo
    {
        return $this->belongsTo(Respuesta::class, 'id_respuesta');
    }
}