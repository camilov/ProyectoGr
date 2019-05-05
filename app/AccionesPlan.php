<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccionesPlan extends Model
{
    protected $table='AccionesPlan';
    protected $primaryKey='idAccionesPlan';
    public $timestamps=false;

    protected $fillable = [
        'idPlan','idControlL'
    ];
}
