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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('motivo_consulta'); // Motivo de consulta
            $table->text('diagnostico')->nullable(); // Diagnóstico - Dx
            $table->string('tension_arterial')->nullable(); // Tensión arterial
            $table->string('frecuencia_cardiaca')->nullable(); // Frecuencia cardiaca
            $table->string('temperatura')->nullable(); // Temperatura
            $table->decimal('peso',10,3)->nullable(); // Peso
            $table->decimal('talla',10,2)->nullable(); // Talla
            $table->decimal('indice_masa_corporal',10,2)->nullable(); // Índice de masa corporal
            $table->integer('porcentaje_frecuencia_cardiaca_sugerida')->nullable(); // Porcentaje de frecuencia cardiaca sugerida
            $table->integer('frecuencia_cardiaca_maxima')->nullable(); // Frecuencia cardiaca máxima
            $table->integer('glucosa')->nullable(); // Glucosa
            $table->string('tratamiento')->nullable(); // Tratamiento Rp
            $table->bigInteger('paciente_id')->unsigned();
            $table->bigInteger('padecimiento_id')->unsigned()->nullable();
            $table->bigInteger('usuario_id')->unsigned()->nullable(); // ID del usuario que crea el expediente  
            $table->string('estado')->default('Pendiente'); // Estado del expediente (Pendiente, Atendido, Cancelado)
            $table->text('observaciones')->nullable(); // Observaciones adicionales
            $table->timestamps();

            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->foreign('padecimiento_id')->references('id')->on('padecimientos');
            $table->foreign('usuario_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
