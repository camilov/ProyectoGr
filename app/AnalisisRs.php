<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalisisRs extends Model
{
    


    protected $table='analisis_rs';
    protected $primaryKey='idAnalisisRs';

    protected $fillable = [
        'idRiesgo','idImpacto','idProbabilidad'
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


}
