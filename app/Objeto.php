<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='objeto';
    protected $primaryKey='idObjeto';
    public $timestamps=false;

    protected $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function Activo(){

        return $this->hasMany('App\Activo');
    }
}
