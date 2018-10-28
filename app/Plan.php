<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='plan';
    protected $primaryKey='idPlan';
    protected $timestamps=false;

    protected $fillable = [
        'idPlan','idOpcionTratamiento','accionCorrectiva','responsable'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    
}
