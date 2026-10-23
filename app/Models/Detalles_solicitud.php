<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalles_solicitud extends Model
{
    protected $table = 'detalles_solicitud';
    protected $fillable = [
        'id_encabezado_solicitud',
        'estapa_solicitud',
    ];
}
