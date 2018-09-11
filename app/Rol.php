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
    

}
