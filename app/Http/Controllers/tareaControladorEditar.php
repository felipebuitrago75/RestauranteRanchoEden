<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\tarea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
use App\Http\Requests\IndicadorFormRequest;
use Auth;
use Illuminate\Support\Facades\Redirect;

class tareaControladorEditar extends Controller{

    public function __construct(){

    }
    /**
     * Muestra la vista principal de las tareas
     * @param Request $request solicitud del usuario.
     * @return  view tareas.index,indicadores retorna la vista indicadores junto con sus respectivas tareas.
     */
    public function index(Request $request){
        return Redirect::to('indicadores');

    }
    /**
     * Función para editar las tareas en la tabla.
     * @param $id Id de la tarea
     * @return  view tareas.edit retorna la vista para editar las tareas.
     */

    public function edit($id){
        return view("tareas.edit",["tareas"=>tarea::find($id)]);

    }

}