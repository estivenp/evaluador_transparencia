<?php

namespace App\Dominio\Entidad\ValorCaracteristica;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Dominio\Entidad\Evaluacion\Evaluacion;
use App\Dominio\Entidad\Caracteristica\Caracteristica;

class ValorCaracteristica extends Model
{
    protected $table = 'valor_caracteristica';
    protected $fillable = ['id_evaluacion','id_caracteristica', 'valor', 'formula'];

    public function evaluacion(): BelongsTo
    {
        return $this->belongsTo(Evaluacion::class, 'id_evaluacion');
    }

    public function caracteristica(): BelongsTo
    {
        return $this->belongsTo(Caracteristica::class, 'id_caracteristica');
    }
}
