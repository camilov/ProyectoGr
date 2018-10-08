<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    

    protected $table='tratamiento';
    protected $primaryKey='idTratamiento';

    protected $fillable = [
        'idOpcionTratamiento','idRiesgo'
    ];

    
    protected $hidden = [
    ];

    public function Riesgo(){

        return $this->belongsTo('App\Riesgo','idRiesgo');
    }


    ublic function opcionTratamiento()
    {
        return $this->belongsTo('App\opcionTratamiento','idOpcionTratamiento');
    }
}
