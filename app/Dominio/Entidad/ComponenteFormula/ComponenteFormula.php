<?php

namespace App\Dominio\Entidad\ComponenteFormula;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Dominio\Entidad\Metrica\Metrica;
use App\Dominio\Entidad\Variable\Variable;
use App\Dominio\Entidad\Pregunta\Pregunta;

class ComponenteFormula extends Model
{
    protected $table = 'componente_formula';
    protected $fillable = ['id_metrica', 'tipo', 'valor', 'orden'];

    public function metrica(): BelongsTo
    {
        return $this->belongsTo(Metrica::class, 'id_metrica');
    }

    public function variable(): HasOne
    {
        return $this->hasOne(Variable::class, 'id_componente_formula');
    }

    public function pregunta(): HasOne
    {
        return $this->hasOne(Pregunta::class, 'id_componente_formula');
    }
}