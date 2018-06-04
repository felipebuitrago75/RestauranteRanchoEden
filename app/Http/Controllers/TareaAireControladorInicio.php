<?php
/**
 * Created by PhpStorm.
 * User: CESAR VARGAS
 * Date: 21/11/2017
 * Time: 12:02 PM
 */

namespace App\Http\Controllers;


use App\IndicadorAire;
use App\tareaAire;
use Illuminate\Http\Request;
use App\tarea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Indicador;
use App\IndicadorAgua;
use App\tareaAgua;
use DB;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class tareaControlador
 * @package App\Http\Controllers
 */
class TareaAireControladorInicio extends Controller
{
    public function __construct()
    {

    }

    public function index(Request $request)
    {

    }
    /**
     * Función para editar las tareas en la tabla.
     * @param $id Id de la tarea
     * @return  view tareas.edit retorna la vista para editar las tareas.
     */
    public function edit($id){
        $indicadores = IndicadorAire::find($id);
        $tareas = tareaAire::paginate();
        return view("tareas.inicioAire",compact('indicadores','tareas'));
    }
}