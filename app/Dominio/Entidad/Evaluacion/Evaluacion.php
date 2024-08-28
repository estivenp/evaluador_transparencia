<?php

namespace App\Dominio\Entidad\Evaluacion;

use Illuminate\Database\Eloquent\Model;
use App\Dominio\Entidad\PlataformaWeb\PlataformaWeb;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Dominio\Entidad\ResultadoMetrica\ResultadoMetrica;

class Evaluacion extends Model
{
    protected $table = 'evaluacion';
    protected $fillable = ['id_plataforma', 'fecha_evaluacion', 'resultado_final',
        'token', 'token_expira_en'];
    protected $dates = ['deleted_at', 'token_expira_en'];

    public function plataformaWeb()
    {
        return $this->belongsTo(PlataformaWeb::class, 'id_plataforma');
    }

    public function resultadosMetrica(): HasMany
    {
        return $this->hasMany(ResultadoMetrica::class, 'id_evaluacion');
    }
}