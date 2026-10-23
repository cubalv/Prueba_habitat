<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Encabezado_solicitud extends Model
{
    protected $table = 'encabezado_solicitud';
    protected $fillable = [
        'id_cliente',
        'monto_solicitud',
        'estado_solicitud',
        'tasa_interes',
        'tasa_moratoria',
        'plazo_meses',
        'producto'
    ];
    
    public function cliente()
    {
        return $this->belongsTo(
            Cliente::class,
            'id_cliente',
            'id'
        );
    }
}
