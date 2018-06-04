<?php
/**
 * Created by PhpStorm.
 * User: CESAR VARGAS
 * Date: 21/11/2017
 * Time: 12:02 PM
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\tarea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Indicador;
use DB;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Redirect;

/**
 * Class tareaControlador
 * @package App\Http\Controllers
 */
class TareaControladorInicio extends Controller
{
    public function __construct(){

    }
    /**
     * Muestra la vista principal de las tareas
     * @param Request $request solicitud del usuario.
     * @return  view tareas.index,indicadores retorna la vista indicadores junto con sus respectivas tareas.
     */
    public function index(Request $request){

       
    }
    /**
     * Función para editar las tareas en la tabla.
     * @param $id Id de la tarea
     * @return  view tareas.edit retorna la vista para editar las tareas.
     */
    public function edit($id){
        $indicadores = Indicador::find($id);
        $tareas = tarea::paginate(100);
        return view("tareas.inicio",compact('indicadores','tareas'));
    }

}