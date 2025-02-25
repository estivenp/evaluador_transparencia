<?php

namespace Database\Factories\Dominio\Entidad\Evaluacion;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Dominio\Entidad\Evaluacion\Evaluacion;

class EvaluacionFactory extends Factory
{
    protected $model = Evaluacion::class;

    public function definition():array{
        return [
            'id_plataforma'=>$this->faker->unique()->randomDigit(), 
            'fecha_evaluacion'=>$this->faker->dateTime(), 
            'resultado_final'=>$this->faker->optional->randomFloat(2),
            'token'=>$this->faker->word(), 
            'token_expira_en'=>$this->faker->dateTime()
        ];
    }
}