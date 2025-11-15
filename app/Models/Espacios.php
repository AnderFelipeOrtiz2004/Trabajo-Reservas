<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espacios extends Model
{
    protected $table = 'espacios';
    protected $fillable = [
        'nombre',
        'tipo',
        'capacidad',
        'ubicacion',
    ];
}
