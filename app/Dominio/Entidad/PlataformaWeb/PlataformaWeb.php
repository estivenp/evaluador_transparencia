<?php

namespace App\Dominio\Entidad\PlataformaWeb;

use Illuminate\Database\Eloquent\Model;
use App\Dominio\Entidad\Evaluacion;
use Illuminate\Database\Eloquent\Relations\HasMany;


class PlataformaWeb extends Model
{
    protected $fillable = ['nombre', 'url'];
    protected $table = 'plataforma_web';

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'id_plataforma');
    }
}