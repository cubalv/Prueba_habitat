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
        Schema::create('encabezado_solicitud', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $id_cliente = $table->unsignedBigInteger('id_cliente');
            $monto_solicitud = $table->decimal('monto_solicitud', 12, 2);
            $estado_solicitud = $table->integer('estado_solicitud');
            $tasa_interes = $table->decimal('tasa_interes', 5, 2);
            $tasa_moratoria = $table->decimal('tasa_moratoria', 5, 2);
            $plazo_meses = $table->integer('plazo_meses');
            $producto = $table->string('producto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('encabezado_solicitud');
    }
};
