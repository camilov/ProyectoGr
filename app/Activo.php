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
    public $timestamps=false;

    protected $fillable = [
        'nombre','codigo','responsable','tipoActivo','imagen','idUsuario'
    ];



    public function User()
    {
        return $this->belongsTo('App\User','idUsuario');
    }


    public function Riesgo(){

        return $this->hasMany('App\Riesgo');
    }
}


