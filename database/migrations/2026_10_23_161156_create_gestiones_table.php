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
        Schema::create('gestiones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $id_encabezado_solicitud = $table->unsignedBigInteger('id_encabezado_solicitud');
            $table->foreign('id_encabezado_solicitud')->references('id')->on('encabezado_solicitud')->onDelete('cascade');
            $id_tipo_gestion = $table->unsignedBigInteger('id_tipo_gestion');
            $table->foreign('id_tipo_gestion')->references('id')->on('tipos_gestiones')->onDelete('cascade');
            $fecha_gestion = $table->date('fecha_gestion');
            $observaciones = $table->text('observaciones');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestiones');
    }
};
