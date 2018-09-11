<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riesgo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='riesgo';
    protected $primaryKey='idRiesgo';
    protected $timestamps=false;

    protected $fillable = [
        'idRiesgo','tipoRiesgo','proceso','nombre','descripcion','causa','efecto','fuente','propietario','idActivo's
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
