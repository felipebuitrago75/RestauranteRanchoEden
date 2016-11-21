<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 * @package App\Usuario
 */
class Usuario extends Model
{
    public function setPasswordAttribute($password){
    $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
}
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