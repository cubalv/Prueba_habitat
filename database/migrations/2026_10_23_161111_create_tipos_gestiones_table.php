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
        Schema::create('tipos_gestiones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $tipo_gestion = $table->string('tipo_gestion');
            $descripcion_gestion = $table->string('descripcion_gestion');
            $estado_gestion = $table->integer('estado_gestion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipos_gestiones');
    }
};
