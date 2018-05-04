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
use App\IndicadorAgua;
use App\tareaAgua;
use App\IndicadorAire;
use App\tareaAire;
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
        $indicadoresAgua =IndicadorAgua::paginate(5);
        $tareasAgua=tareaAgua::paginate();
        $indicadoresAire = IndicadorAire::paginate(5);
        $tareasAire = tareaAire::paginate();

       $res= 0;
        foreach ($tareas as $tarea)
            foreach ($indicadores as $indicador)
                if (!$indicador->id_indicador == $tarea->indicadores_id_indicadores)
                $res+= ($tarea->estado)/($tarea->count());
                return view('indicadores.inicio', compact('indicadores', 'res', 'tareas','indicadoresAgua','tareasAgua','indicadoresAire','tareasAire'));
    
    }
    
}