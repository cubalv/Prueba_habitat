<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    protected $table = 'direcciones';
    protected $fillable = [
        'id_cliente',
        'direccion',
        'municipio',
        'departamento',
        'numero_telefono'
    ];
}
