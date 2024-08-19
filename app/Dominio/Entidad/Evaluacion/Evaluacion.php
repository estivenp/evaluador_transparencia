<?php

namespace App\Dominio\Entidad\Evaluacion;

use Illuminate\Database\Eloquent\Model;
use App\Dominio\Entidad\PlataformaWeb\PlataformaWeb;

class Evaluacion extends Model
{
    protected $fillable = ['id_plataforma', 'fecha_evaluacion', 'resultado_final'];
    protected $table = 'evaluacion';

    public function plataformaWeb()
    {
        return $this->belongsTo(PlataformaWeb::class, 'id_plataforma');
    }
}