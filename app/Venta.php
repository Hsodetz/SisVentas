<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'tipo_documento_id', 
        'cliente_id', 
        'usuario_id', 
        'fecha', 
        'subtotal', 
        'igv', 
        'descuento', 
        'total',
        'numero_documento', 
    ];
}
