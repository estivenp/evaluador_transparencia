<?php

namespace App\Dominio\Entidad\OpcionRespuesta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Dominio\Entidad\Respuesta\Respuesta;

class OpcionRespuesta extends Model
{
    protected $table = 'opcion_respuesta';
    protected $fillable = ['id_respuesta', 'texto', 'valor'];

    public function respuesta(): BelongsTo
    {
        return $this->belongsTo(Respuesta::class, 'id_respuesta');
    }
}