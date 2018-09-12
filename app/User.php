<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='usuario';
    protected $primaryKey='idUsuario';
    public $timestamps=false;

    protected $fillable = [
        'nombre','apellido','edad','name', 'telefono','idRol','email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];

    public function Rol()
    {
        return $this->belongsTo('App\Rol','idRol');
    }

}
