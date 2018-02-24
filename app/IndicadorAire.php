<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicador
 * @package App\Indicador
 */
class IndicadorAire extends Model
{
    //variable que almacena la indicador usuario proveniente de la base de datos.
    protected $table='indicadoraire';

    //llave primaria de la tabla indicaor
    protected $primaryKey='id_indicadorAire';

    public $timestamps=false;

    /**
     * atributos referentes al indicador asignados en el modelo..
     *
     * @var array
     */
    protected $fillable = ['id_indicadorAire','fecha', 'nombre','usuario_idUsuario','descripcion'];
}
