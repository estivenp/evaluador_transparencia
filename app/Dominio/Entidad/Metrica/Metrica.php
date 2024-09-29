<?php

namespace App\Dominio\Entidad\Metrica;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Dominio\Entidad\Caracteristica\Caracteristica;
use App\Dominio\Entidad\ComponenteFormula\ComponenteFormula;
use App\Dominio\Entidad\Pregunta\Pregunta;
use App\Dominio\Entidad\Variable\Variable;
use App\Dominio\Entidad\ResultadoMetrica\ResultadoMetrica;

class Metrica extends Model
{
    protected $table = 'metrica';
    protected $fillable = [
        'id_caracteristica', 'nombre', 'abreviatura', 'descripcion',
        'unidad', 'escala', 'observaciones', 'ejemplo_utilizacion'
    ];

    public function caracteristica(): BelongsTo
    {
        return $this->belongsTo(Caracteristica::class, 'id_caracteristica');
    }

    public function componentesFormula(): HasMany
    {
        return $this->hasMany(ComponenteFormula::class, 'id_metrica');
    }

    public function resultados(): HasMany
    {
        return $this->hasMany(ResultadoMetrica::class, 'id_metrica');
    }
}