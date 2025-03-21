<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vuelo extends Model
{

    protected $fillable = [
        'numero_vuelo',
        'aerolinea',
        'hora_salida',
        'hora_llegada',
        'duracion',
        'precio',
        'tiene_escalas',
        'origen',
        'destino',
        'asientos_disponibles',
    ];
}
