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
    protected $fillable = ['descripcion'];

    public function preguntas(): HasMany
    {
        return $this->hasMany(Pregunta::class, 'id_respuesta');
    }

    public function opcionesRespuesta(): HasMany
    {
        return $this->hasMany(OpcionRespuesta::class, 'id_respuesta');
    }
}