<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class Usuario
 * @package App\Usuario
 */
class Usuario extends Authenticatable
{

    // variable que almacena la tabla usuario proveniente de la base de datos.
    protected $table= 'usuario';

    //
    public $timestamps = false;

    /**
     * atributos referentes al usuario asignados en el modelo..
     *
     * @var array
     */
    protected $fillable = ['id','nombre', 'email','contraseña', 'ciudad'];


    /**
     * atributos que se ocultan para el arreglo.
     *
     * @var array
     */
    protected $hidden = [
        'contraseña', 'remember_token',
    ];

}