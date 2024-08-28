<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resultado_metrica', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_metrica')->constrained('metrica');
            $table->foreignId('id_evaluacion')->constrained('evaluacion');
            $table->float('resultado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultado_metrica');
    }
};
