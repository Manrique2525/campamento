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
        Schema::create('campistas', function (Blueprint $table) {
    
            $table->id();
    
            $table->string('folio')->unique();
    
            $table->string('nombre');
    
            $table->string('apellido_paterno');
    
            $table->string('apellido_materno')
                ->nullable();
    
            $table->date('fecha_nacimiento')
                ->nullable();
    
            $table->enum('sexo', [
                'M',
                'F'
            ]);
    
            $table->string('telefono')
                ->nullable();
    
            $table->string('contacto_emergencia')
                ->nullable();
    
            $table->string('telefono_emergencia')
                ->nullable();
    
            $table->foreignId('casa_id')
                ->constrained()
                ->cascadeOnUpdate();
    
            $table->uuid('qr_uuid')
                ->unique();
    
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
        Schema::dropIfExists('campistas');
    }
};
