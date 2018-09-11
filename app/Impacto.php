<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impacto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table='impacto';
    protected $primaryKey='idImpacto';
    protected $timestamps=false;

    protected $fillable = [
        'idImpacto','descripcion','numero'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
