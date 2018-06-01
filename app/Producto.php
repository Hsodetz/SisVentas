<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'categpria_id', 'nombre', 'descripcion', 'precio', 'stock', 'estado',
    ];
}
