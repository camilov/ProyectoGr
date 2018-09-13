<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsabilidad extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='responsabilidad';
    protected $primaryKey='idResponsabilidad';
    //protected $timestamps=false;

    protected $fillable = [
        'idResponsabilidad','descripcion','idRol'
    ];
    

    public function Rol()
    {
        return $this->belongsTo('App\Rol','idRol');
    }
}
