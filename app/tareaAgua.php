<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class tarea
 * @package App\tarea
 */
class tareaAgua extends Model
{
   

 // variable que almacena la tabla tarea proveniente de la base de datos.
    protected $table= 'tareaagua';
    //lave primaria de  la tabla tarea.
    protected $primaryKey='id_tareaAgua';

    public $timestamps = false;

      /**
     * atributos referentes al tarea asignados en el modelo..
     *
     * @var array
     */
    protected $fillable = ['id_tareaAgua','descripcion', 'estado', 'indicadorAgua_id_indicador'];


}