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
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id(); // Campo ID, autoincremental y llave primaria
            $table->string('nombre'); // Campo para el nombre del vehículo
            $table->string('categoria'); // Campo para la categoría del vehículo
            $table->text('descripcion_vehiculo'); // Campo para la descripción del vehículo
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos'); 
    }
};

