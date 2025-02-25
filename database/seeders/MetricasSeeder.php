<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetricasSeeder extends Seeder
{

    public function run():void{
        $jsonMetricas = database_path('seeders/data/metricas.json');
        $metricas = json_decode(file_get_contents($jsonMetricas),true);

        foreach($metricas as $metrica){
            DB::table('metrica')->insert($metrica);
        }
    }
}