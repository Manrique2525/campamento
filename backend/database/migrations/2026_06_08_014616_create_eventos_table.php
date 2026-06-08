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
        Schema::create('eventos', function (Blueprint $table) {
    
            $table->id();
    
            $table->string('nombre');
    
            $table->enum('tipo', [
                'asistencia',
                'comida',
                'actividad',
                'puntaje'
            ]);
    
            $table->dateTime('fecha_inicio');
    
            $table->dateTime('fecha_fin');
    
            $table->integer('puntos_default')
                ->default(0);
    
            $table->boolean('activo')
                ->default(true);
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
