<?php

namespace Database\Factories\Dominio\Entidad\PlataformaWeb;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Dominio\Entidad\PlataformaWeb\PlataformaWeb;

class PlataformaWebFactory extends Factory
{
    protected $model = PlataformaWeb::class;

    public function definition():array{
        return [
            'nombre'=>$this->faker->name(),
            'url'=>$this->faker->url()
        ];
    }
}