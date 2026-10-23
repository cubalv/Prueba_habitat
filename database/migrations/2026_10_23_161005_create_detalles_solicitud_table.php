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
        Schema::create('detalles_solicitud', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $id_encabezado_solicitud = $table->unsignedBigInteger('id_encabezado_solicitud');
            $table->foreign('id_encabezado_solicitud')->references('id')->on('encabezado_solicitud')->onDelete('cascade');
            $estapa_solicitud = $table->string('estapa_solicitud');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_solicitud');
    }
};
