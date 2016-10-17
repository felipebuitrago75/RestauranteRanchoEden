<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicador extends Model
{
    //

    protected $table= 'indicador';

    public $timestamps = false;
    protected $fillable = ['id_indicador','fecha', 'nombre','responsable','tarea_id_tarea','usuario_idUsuario'];

}
