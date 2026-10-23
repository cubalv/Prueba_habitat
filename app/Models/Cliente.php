<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'clientes';
    protected $fillable = [
        'nombre_cliente',
        'apellido_cliente',
        'fecha_nacimiento',
        'nit',
        'etnia',
        'tipo_documento',
        'documento_identificacion',
        'genero',
        'estado_cliente'
    ];
}
