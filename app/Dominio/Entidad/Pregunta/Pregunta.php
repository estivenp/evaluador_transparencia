<?php

namespace App\Dominio\Entidad\Pregunta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    public function respuestas(): HasMany
    {
        return $this->hasMany(Respuesta::class, 'id_pregunta');
    }
}