<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='actividad';
    protected $primaryKey='idActividad';
   // protected $timestamps=false;

    protected $fillable = [
        'idActividad','descripcion','idRol'
    ];

    public function Rol()
    {
        return $this->belongsTo('App\Rol','idRol');
    }
    
}
