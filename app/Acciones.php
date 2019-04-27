<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acciones extends Model
{
     protected $table='acciones';
    protected $primaryKey='idAcciones';
    public $timestamps=false;

    protected $fillable = [
        'idControlL','accion','idAccion','idRiesgo','duracion'
    ];
}
