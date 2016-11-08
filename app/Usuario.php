<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'usuario';

    public $timestamps = false;
    protected $fillable = ['id','nombre', 'email','contraseña', 'ciudad'];


/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'contraseña', 'remember_token',
    ];

}