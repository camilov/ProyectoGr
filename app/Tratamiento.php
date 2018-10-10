<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    

    protected $table='tratamiento';
    protected $primaryKey='idTratamiento';
    public $timestamps=false;


    protected $fillable = [
        'idOpcionTratamiento','idRiesgo'
    ];

    
    protected $hidden = [
    ];

    public function Riesgo(){

        return $this->belongsTo('App\Riesgo','idRiesgo');
    }


    public function opcionTratamiento()
    {
        return $this->belongsTo('App\opcionTratamiento','idOpcionTratamiento');
    }
}
