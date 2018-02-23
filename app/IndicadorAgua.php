<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicador
 * @package App\Indicador
 */
class IndicadorAgua extends Model
{
    //variable que almacena la indicador usuario proveniente de la base de datos.
    protected $table='indicadorAgua';

    //llave primaria de la tabla indicaor
    protected $primaryKey='id_indicadorAgua';

    public $timestamps=false;

    /**
     * atributos referentes al indicador asignados en el modelo..
     *
     * @var array
     */
    protected $fillable = ['id_indicadorAgua','fecha', 'nombre','usuario_idUsuario','descripcion'];
}
