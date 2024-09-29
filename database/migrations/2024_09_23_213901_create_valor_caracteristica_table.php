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
        Schema::create('valor_caracteristica', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_evaluacion')->constrained('evaluacion');
            $table->foreignId('id_caracteristica')->constrained('caracteristica');
            $table->float('valor');
            $table->string('formula');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valor_caracteristica');
    }
};
