<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Rol extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='rol';
    protected $primaryKey='idRol';
    public $timestamps = false;
   // protected $guarded = array();

    protected $fillable = [
        'descripcion'
    ];
    
    public function User(){

        return $this->hasMany('App\User');
    }

    public function Actividad(){

        return $this->hasMany('App\Actividad');
    }

    public function Responsabilidad(){

        return $this->hasMany('App\Responsabilidad');
    }
}
