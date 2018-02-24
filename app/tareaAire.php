<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class tarea
 * @package App\tarea
 */
class tareaAire extends Model
{
   

 // variable que almacena la tabla tarea proveniente de la base de datos.
    protected $table= 'tareaaire';
    //lave primaria de  la tabla tarea.
    protected $primaryKey='id_tareaAire';

    public $timestamps = false;

      /**
     * atributos referentes al tarea asignados en el modelo..
     *
     * @var array
     */
    protected $fillable = ['id_tareaAire','descripcion', 'estado', 'indicadorAire_id_indicador'];


}