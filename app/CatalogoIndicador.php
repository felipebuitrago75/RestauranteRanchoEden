<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CatalogoIndicador
 * @package App\CatalogoIndicador
 */
class CatalogoIndicador extends Model
{
    
	 // variable que almacena la tabla reporte proveniente de la base de datos.
    protected $table= 'reporte';

    public $timestamps = false;

    /**
     * atributos referentes al reporte asignados en el modelo..
     *
     * @var array
     */
    protected $fillable = ['idcatalogo_indicadores', 'indicador_id_indicador'];


}
