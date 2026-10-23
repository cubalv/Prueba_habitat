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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $nombre_cliente = $table->string('nombre_cliente');
            $apellido_cliente = $table->string('apellido_cliente');
            $fecha_nacimiento = $table->date('fecha_nacimiento');
            $nit = $table->string('nit');
            $etnia = $table->string('etnia');
            $tipo_documento = $table->string('tipo_documento');
            $documento_identificacion = $table->string('documento_identificacion')->unique();
            $genero = $table->integer('genero');
            $estado_cliente = $table->integer('estado_cliente');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
