<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Reporte
 * @package App\Reporte
 */
class Reporte extends Model
{
     // variable que almacena la tabla reporte proveniente de la base de datos.
    protected $table= 'reporte';

    public $timestamps = false;

    /**
     * atributos referentes al usuario asignados en el modelo..
     *
     * @var array
     */
    protected $fillable = ['id_reporte','fecha', 'indicador_id_indicador'];



}
