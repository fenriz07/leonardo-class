<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'date',
        'lugar',
        'cp',
        'nombre',
        'estado',
        'tipo_fruta',
        'cantidad',
        'buena',
        'pendiente',
        'cantidad_rechazada',
        'total_recibida',
        'encargado'
    ];

    public function getEstadoAttribute($estado)
    {
        if ($estado == 1) {
            return 'Entregadas';
        }

        return 'Recibidas';
    }


    public function getTipoFrutaAttribute($estado)
    {
        if ($estado == 1) {
            return 'Arandano';
        }

        return 'Zarzamora';
    }
}
