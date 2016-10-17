<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    //


    protected $table= 'tarea';

    public $timestamps = false;
    protected $fillable = ['id_tarea','descripcion', 'estado'];


}