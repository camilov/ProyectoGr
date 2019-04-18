<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalisisRs extends Model
{
    


    protected $table='analisis_rs';
    protected $primaryKey='idAnalisisRs';
    public $timestamps = false;

    protected $fillable = [
        'idRiesgo','idImpacto','idProbabilidad','idActivo'
    ];

    
    public function Riesgo()
    {
        return $this->belongsTo('App\Riesgo','idRiesgo');
    }


    public function Impacto()
    {
        return $this->belongsTo('App\Impacto','idImpacto');
    }

    public function Probabilidad()
    {
        return $this->belongsTo('App\Probabilidad','idProbabilidad');
    }

    public function Activo()
    {
        return $this->belongsTo('App\Activo','idActivo');
    }



}
