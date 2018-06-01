<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    protected $fillable = [
        'producto_id', 'venta_id', 'precio', 'cantidad', 'importe',
    ];
}
