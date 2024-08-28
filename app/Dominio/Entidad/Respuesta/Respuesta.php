<?php

namespace App\Dominio\Entidad\Respuesta;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Dominio\Entidad\Pregunta\Pregunta;
use App\Dominio\Entidad\OpcionRespuesta\OpcionRespuesta;

class Respuesta extends Model
{
    protected $table = 'respuesta';
    protected $fillable = ['id', 'descripcion'];

    public function pregunta(): BelongsTo
    {
        return $this->belongsTo(Pregunta::class, 'id_pregunta');
    }

    public function opcionesRespuesta(): HasMany
    {
        return $this->hasMany(OpcionRespuesta::class, 'id_respuesta');
    }
}