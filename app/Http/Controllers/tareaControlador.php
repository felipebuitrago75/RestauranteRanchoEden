<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/tareaControlador.stub
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tarea;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Indicador;
use DB;
use Carbon\Carbon;
use App\Http\Requests\IndicadorFormRequest;
use Auth;
use Illuminate\Support\Facades\Redirect;

/**
 * Class tareaControlador
 * @package App\Http\Controllers
 */
class tareaControlador extends Controller
{
    public function __construct(){
       
    }

    /**
     * Muestra la vista principal de las tareas
     * @param Request $request solicitud del usuario.
     * @return  view tareas.index,indicadores retorna la vista indicadores junto con sus respectivas tareas.
     */
    public function index(Request $request){
        
        $indicadores =Indicador::paginate(5);
        $tareas=tarea::paginate();

        return view('tareas.index',compact('indicadores','tareas'));
    }

  /**
     *redirige a la vista crear tareas 
     * @return  view  retorna la vista indicadores
     */
    public function create(){

         return Redirect::to('indicadores');
      
        
    }
  
   /**
     *Fucnión que recibe la solicitud del usuario y guarda los datos de tarea en la base de datos
     * @param Request $request solicitud del usuario
     * @return  Redirect indicadores redirecciona a la vista indicadores. 
     */
    public function store(Request $request){

        $tareas = new tarea($request->all());
        $tareas->descripcion=$request->get('descripcion');
        $tareas->estado=$request->get('estado');
        $tareas->indicador_id_indicador=$request->get('id_indicador');
        $tareas->save();
        
       return Redirect::to('indicadores');

        
    }
     /**
     * Función para mostrar las tareas en la tabla.
     * @param $id Id de la tarea
     * @return  view tareas.show retorna la lista de tareas.
     */
    public function show($id){
        return view("tareas.show",["tarea"=>tarea::findOrFail($id)]);
    }
    /**
     * Función para editar las tareas en la tabla.
     * @param $id Id de la tarea
     * @return  view tareas.edit retorna la vista para editar las tareas.
     */
    public function edit($id){
        return view("tareas.create",["tarea"=>tarea::findOrFail($id), "indicador"=>Indicador::find($id)]);
        
    }
     /**
     * Funncion para actualizar los datos de una tarea.
     * @param IndicadorFormRequest $request, $id Solicitud del usuario, Id de la tarea a actualizar 
     * @return  Redirect indicadores retorna la vista tareas
     */

    public function update(Request $request,$id){
       $tarea =tarea::findOrFail($id);
        $tarea->descripcion=$request->get('descripcion');
        $tarea->estado=$request->get('estado');
        $tarea->update();
        return Redirect::to('tareas');


    }
    /**
     * Funcion para eliminar una tarea.
     *@param $id Id de la tarea a eliminar
     * @return  Redirect tareas retorna la vista tareas despues de eliminar una tarea.
     */
    public function destroy($id){
        return Redirect::to('tareas');
    }


}
