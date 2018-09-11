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
    protected $timestamps=false;

    protected $fillable = [
        'idRol','descripcion','idActividades'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function user()
    {
        return $this->hasMany('App\user');
    }
}
