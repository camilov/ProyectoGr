<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='control';
    protected $primaryKey='idControl';
    public $timestamps=false;

    protected $fillable = [
        'idControlL','nombre','descripcion','acciones','idAccion'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function Controles()
    {
        return $this->hasMany('App\Controles');
    }

    public function scopeSearch($query,$nombre)
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}
