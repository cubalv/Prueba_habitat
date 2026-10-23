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
        Schema::create('tipo_financiamiento', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $nombre_tipo_financiamiento = $table->string('nombre_tipo_financiamiento');
            $descripcion_tipo_financiamiento = $table->string('descripcion_tipo_financiamiento');
            $valor_maximo_financiamiento = $table->decimal('valor_maximo_financiamiento', 12, 2);
            $estado_tipo_financiamiento = $table->integer('estado_tipo_financiamiento');
            $plazo_meses = $table->integer('plazo_meses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_financiamiento');
    }
};
