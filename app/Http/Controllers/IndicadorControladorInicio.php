<?php
/**
 * Created by PhpStorm.
 * User: CESAR VARGAS
 * Date: 10/11/2017
 * Time: 12:07 PM
 */

namespace App\Http\Controllers;
use App\Indicador;
use App\tarea;
use Illuminate\Http\Request;

class IndicadorControladorInicio extends Controller
{

    public function __construct(){

    }
    /**
     * Muestra el panel de la aplicación.
     *@param   Request $request  solicitud de la vista
     *@return View indicadores retorna la vista indicadores
     */
    public function index(Request $request){

        $indicadores =Indicador::paginate(5);
        $tareas=tarea::paginate();

        return view('indicadores.inicio',compact('indicadores','tareas'));

    }
}