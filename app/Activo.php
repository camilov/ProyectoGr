<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='activo';
    protected $primaryKey='idActivo';
    protected $timestamps=false;

    protected $fillable = [
        'idActivo','nombre','codigo','responsable','tipoActivo','fechaAlta'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
