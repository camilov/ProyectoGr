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
        return $this->belongsTo('App\User','id');
    }


    public function Riesgo(){

        return $this->hasMany('App\Riesgo');
    }

    public function scopeSearch($query,$nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function AnalisisRs(){

        return $this->hasMany('App\AnalisisRs');
    }


    public function Objeto()
    {
        return $this->belongsTo('App\Objeto','idObjeto');
    }

}


