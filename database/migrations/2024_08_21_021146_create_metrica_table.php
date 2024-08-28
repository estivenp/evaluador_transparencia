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
        Schema::create('metrica', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_caracteristica')->constrained('caracteristica');
            $table->string('nombre');
            $table->string('abreviatura');
            $table->text('descripcion')->nullable();
            $table->string('unidad');
            $table->string('escala');
            $table->text('observaciones')->nullable();
            $table->text('ejemplo_utilizacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metrica');
    }
};
