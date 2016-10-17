<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogoIndicador extends Model
{
    //

    protected $table= 'reporte';

    public $timestamps = false;
    protected $fillable = ['idcatalogo_indicadores', 'indicador_id_indicador'];


}
