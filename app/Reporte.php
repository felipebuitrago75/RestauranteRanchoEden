<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    
    protected $table= 'reporte';

    public $timestamps = false;
    protected $fillable = ['id_reporte','fecha', 'indicador_id_indicador'];



}
