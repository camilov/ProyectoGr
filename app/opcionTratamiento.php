<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opcionTratamiento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='opcion_tratamiento';
    protected $primaryKey='idOpcionTratamiento';
    public $timestamps=false;

    protected $fillable = [
        'idOpcionTratamiento','descripcion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function Tratamiento(){

        return $this->hasMany('App\Tratamiento');

    }
}
