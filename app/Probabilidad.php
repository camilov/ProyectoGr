<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Probabilidad extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='probabilidad';
    protected $primaryKey='idProbabilidad';

    protected $fillable = [
        'idProbabilidad','descripcion'
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
