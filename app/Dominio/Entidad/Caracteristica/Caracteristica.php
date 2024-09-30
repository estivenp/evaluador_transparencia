<?php

namespace App\Dominio\Entidad\Caracteristica;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Dominio\Entidad\Metrica\Metrica;
use App\Dominio\Entidad\ValorCaracteristica\ValorCaracteristica;

class Caracteristica extends Model
{
    protected $table = 'caracteristica';
    protected $fillable = ['id_caracteristica_principal','nombre', 'descripcion'];

    public function subCaracteristicas(): HasMany
    {
        return $this->hasMany(Caracteristica::class, 'id_caracteristica_principal');
    }

    public function caracteristicaPrincipal()
    {
        return $this->belongsTo(Caracteristica::class, 'id_caracteristica_principal');
    }

    public function metricas(): HasMany
    {
        return $this->hasMany(Metrica::class, 'id_caracteristica');
    }

    public function valorCaracteristica(): HasMany
    {
        return $this->hasMany(ValorCaracteristica::class, 'id_caracteristica');
    }

}