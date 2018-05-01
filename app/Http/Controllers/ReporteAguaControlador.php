<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/ReporteControlador.stub
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicador;
use App\IndicadorAgua;
use App\Reporte;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB ;
use Auth;
use App\tarea;
use App\tareaAgua;
use Excel;
use Carbon\Carbon;

class ReporteAguaControlador extends Controller
{
     /**
     * Crea una nueva instancia de controlador.
     *
     * @return void
     */
    public function __construct(){
       
    }
     /**
     * FunciÃ³n para editar las tareas en la tabla.
     * @param $id Id de la tarea
     * @return  view tareas.edit retorna la vista para editar las tareas.
     */
    public function edit($id){

        $indicadorAgua =IndicadorAgua::findOrFail($id);
        $tareaAgua=tareaAgua::paginate();
        return view('reporte.editAgua',compact('indicadorAgua','tareaAgua'));
        
    }
    public function index(){

        $tareas=tareaAgua::select('descripcion','estado')->get();
        Excel::create('Reporte ', function($excel) use($tareas) {

            $excel->sheet('Indicadores', function($sheet) use ($tareas) {

                $sheet->fromArray($tareas);

            });


        })->export('xls');
        
    }
}
