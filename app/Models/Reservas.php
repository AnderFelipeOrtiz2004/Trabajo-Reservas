<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    protected $table = 'reservas';
    protected $fillable = [
        'espacio_id',
        'solicitante',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'motivo',
    ];

    public function espacio()
    {
        return $this->belongsTo(Espacios::class, 'espacio_id');
    }
}
