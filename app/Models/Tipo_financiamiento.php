<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_financiamiento extends Model
{
    //
    protected $table = 'tipo_financiamiento';
    protected $fillable = [
        'nombre_tipo_financiamiento',
        'descripcion_tipo_financiamiento',
        'valor_maximo_financiamiento',
        'estado_tipo_financiamiento',
        'plazo_meses'
    
    ];
}
