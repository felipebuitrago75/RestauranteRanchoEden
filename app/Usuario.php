<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table= 'usuario';

    public $timestamps = false;
    protected $fillable = ['id_usuario','nombre', 'email','contrasena','ciudad'];

}