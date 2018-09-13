<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='activo';
    protected $primaryKey='idActivo';
    public $timestamps=false;

    protected $fillable = [
        'nombre','codigo','responsable','tipoActivo','idUsuario','imagen'
    ];



    public function User()
    {
        return $this->belongsTo('App\User','idUsuario');
    }
}
