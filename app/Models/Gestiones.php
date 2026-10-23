<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestiones extends Model
{
    //
    protected $table = 'gestiones';
    protected $fillable = [
        'id_encabezado_solicitud',
        'id_tipo_gestion',
        'fecha_gestion',
        'observaciones',
    ];
}
