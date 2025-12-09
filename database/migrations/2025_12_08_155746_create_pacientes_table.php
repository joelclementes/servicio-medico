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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido_paterno'); // Apellido paterno
            $table->string('apellido_materno')->nullable(); // Apellido materno
            $table->date('fecha_nacimiento'); // Fecha de nacimiento
            $table->string('sexo'); // Sexo
            $table->string('grupo_sanguineo')->nullable(); // Permitirá NULL
            $table->string('alergias')->default('Ninguna'); // Alergias
            $table->string('antecedentes_familiares')->default('Ninguno'); // Antecedentes familiares
            $table->string('antecedentes_personales')->default('Ninguno'); // Antecedentes personales
            $table->string('telefono')->nullable(); // Teléfono
            $table->string('nombre_contacto_emergencia')->nullable(); // Nombre del contacto de emergencia
            $table->string('telefono_contacto_emergencia')->nullable(); // Teléfono del contacto de emergencia
            $table->string('correo')->nullable()->unique(); // Correo electrónico
            $table->boolean('es_diabetico')->default(false); // Es diabético
            $table->boolean('es_hipertenso')->default(false); // Es hipertenso
            $table->boolean('es_dislipidemico')->default(false); // Es dislipidemico
            $table->string('numero_seguro_social')->nullable(); // Número de seguro social
            $table->bigInteger('departamento_id')->unsigned();
            $table->timestamps();

            $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
