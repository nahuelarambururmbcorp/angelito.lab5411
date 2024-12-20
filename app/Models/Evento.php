<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    
    protected $table = 'eventos';

    protected $fillable = [
        'nombre',
        'transporte',
        'cena',
        'bebidas',
        'menu',
        'show',
        'imagen',
        'precio',
    ];
}

