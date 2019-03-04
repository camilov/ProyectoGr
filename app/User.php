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

    public $table='users';
    public $primaryKey='id';
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
        'remember_token','password',
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Rol()
    {
        return $this->belongsTo('App\Rol','idRol');
    }

    public function Activo()
    {
        return $this->hasMany('App\Activo');
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}
