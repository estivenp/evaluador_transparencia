<?php

namespace App\Dominio\Entidad\ComponenteFormula;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function variable(): BelongsTo
    {
        return $this->belongsTo(Variable::class, 'id');
    }

    public function pregunta(): BelongsTo
    {
        return $this->belongsTo(Pregunta::class, 'id');
    }
}