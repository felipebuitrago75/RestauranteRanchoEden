<?php
/**
 * Created by PhpStorm.
 * User: CESAR VARGAS
 * Date: 21/11/2017
 * Time: 9:41 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicador;
use App\Reporte;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB ;
use Auth;
use App\tarea;
use Excel;
use Carbon\Carbon;

class ReporteControladorInicio extends Controller
{
    /**
     * Crea una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct(){

    }
    public function edit($id){

        $indicador =Indicador::findOrFail($id);
        $tareas=tarea::paginate(100);
        return view('reporte.editInicio',compact('indicador','tareas'));

    }

}