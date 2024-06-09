<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->id();
           $table->string('nombre');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo_electronico');
            $table->date('fecha_nacimiento');
            $table->string('estado_civil');
            $table->string('numero_seguro_social')->nullable();
            $table->string('institucion_educativa');
            $table->date('fecha_inicio_estudios');
            $table->date('fecha_fin_estudios')->nullable();
            $table->string('titulo_obtenido');
            $table->string('experiencia_laboral')->nullable();
            $table->string('nombre_empresa_anterior')->nullable();
            $table->string('direccion_empresa_anterior')->nullable();
            $table->date('fecha_inicio_trabajo_anterior')->nullable();
            $table->date('fecha_fin_trabajo_anterior')->nullable();
            $table->string('cargo_anterior')->nullable();
            $table->text('responsabilidades_anterior')->nullable();
            $table->string('referencia_nombre')->nullable();
            $table->string('referencia_telefono')->nullable();
            $table->string('referencia_correo_electronico')->nullable();
            $table->string('habilidades');
            $table->text('informacion_adicional')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitantes');
    }
};
