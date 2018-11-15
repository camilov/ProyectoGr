<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Controles extends Model
{
    protected $table='controles';
    protected $primaryKey='idControles';
    public $timestamps=false;

    protected $fillable = [
        'idControl','idRiesgo','idOpcionTratamiento'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function Control()
    {
        return $this->belongsTo('App\Control','idControl');
    }

}
