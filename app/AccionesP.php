<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccionesP extends Model
{
    protected $table='acciones_p';
    protected $primaryKey='idAcciones_p';
    public $timestamps=false;

    protected $fillable = [
        'idControlL','acciones','idAccion'
    ];
}
