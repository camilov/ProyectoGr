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
    public $timestamps=false;

    protected $fillable = [
        'idRiesgo','idOpcionTratamiento','responsable','duracion','criterio','idControlL'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function Riesgo()
    {
        return $this->belongsTo('App\Riesgo','idRiesgo');
    }

    public function Tratamiento()
    {
        return $this->belongsTo('App\Tratamiento','idOpcionTratamiento');
    }
    
}
