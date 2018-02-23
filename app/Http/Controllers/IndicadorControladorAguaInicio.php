<?php
/**
 * Created by PhpStorm.
 * User: CESAR VARGAS
 * Date: 10/11/2017
 * Time: 12:07 PM
 */

namespace App\Http\Controllers;
use App\IndicadorAgua;
use App\tareaAgua;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IndicadorControladorAguaInicio extends Controller
{

    public function __construct(){

    }
    /**
     * Muestra el panel de la aplicación.
     *@param   Request $request  solicitud de la vista
     *@return View indicadores retorna la vista indicadores
     */
    public function index(Request $request){

        $indicadoresAgua =IndicadorAgua::paginate();
        $tareasAgua=tarea::paginate(6);
        $res= 0;
        foreach ($tareasAgua as $tarea)
            foreach ($indicadoresAgua as $indicador)
                if (!$indicador->id_indicadorAgua == $tarea->indicadores_id_indicadores)
                $res+= ($tarea->estado)/($tarea->count());
                return view('indicadores.inicio', compact('indicadores', 'res', 'tareas'));
    }
    public function edit($id){


    }

}