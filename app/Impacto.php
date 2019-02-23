<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impacto extends Model
{
    /**
     * The attributes that are mass assignable,'idRol'.
     *
     * @var array
     */

    protected $table='impacto';
    protected $primaryKey='idImpacto';

    protected $fillable = [
        'idImpacto','descripcion','idRol'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function Analisis(){

        return $this->hasMany('App\AnalisisRs');
    }

}
