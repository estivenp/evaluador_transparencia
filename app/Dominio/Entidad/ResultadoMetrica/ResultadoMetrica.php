<?php

namespace App\Dominio\Entidad\ResultadoMetrica;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Dominio\Entidad\Metrica\Metrica;
use App\Dominio\Entidad\Evaluacion\Evaluacion;

class ResultadoMetrica extends Model
{
    protected $table = 'resultado_metrica';
    protected $fillable = ['id_metrica', 'id_evaluacion', 'resultado'];

    public function metrica(): BelongsTo
    {
        return $this->belongsTo(Metrica::class, 'id_metrica');
    }

    public function evaluacion(): BelongsTo
    {
        return $this->belongsTo(Evaluacion::class, 'id_evaluacion');
    }
}