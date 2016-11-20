<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class tarea
 * @package App\tarea
 */
class tarea extends Model
{
   

 // variable que almacena la tabla tarea proveniente de la base de datos.
    protected $table= 'tarea';
    //lave primaria de  la tabla tarea.
    protected $primaryKey='id_tarea';

    public $timestamps = false;

      /**
     * atributos referentes al tarea asignados en el modelo..
     *
     * @var array
     */
    protected $fillable = ['id_tarea','descripcion', 'estado', 'indicador_id_indicador'];


}