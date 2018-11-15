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
    public $timestamps=false;

    protected $fillable = [
        'tipoRiesgo','proceso','nombre','descripcion','causa','efecto','fuente','propietario','idActivo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function Activo()
    {
        return $this->belongsTo('App\Activo','idActivo');
    }

    public function Analisis(){

        return $this->hasMany('App\AnalisisRs');
    }


    public function Tratamiento(){

        return $this->hasMany('App\Tratamiento');

    }

    public function Plan(){

        return $this->hasMany('App\Plan');

    }

}
