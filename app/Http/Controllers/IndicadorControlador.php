<?php
/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/IndicadorControlador.stub
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Indicador;
use App\IndicadorAgua;
use App\tareaAgua;
use App\tarea;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\IndicadorFormRequest;
use DB ;
use Auth;
use Carbon\Carbon;

/**
 * Class IndicadorControlador
 * @package App\Http\Controllers
 */
class IndicadorControlador extends Controller
{
    /**
     * Crea una nueva instancia de controlador.
     *
     * @return void
     */
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

        return view('indicadores.index',compact('indicadores','tareas','indicadoresAgua','tareasAgua'));
    }

    /**
     *redirige a la vista crear indicadores 
     * @return  view  retorna la vista indicadores.create
     */
    public function create(){

    	return view("indicadores.create");
    	
    }
    /**
     *Fucnión que recibe la solicitud del usuario y guarda los datos en la base de datos
     * @param Request $request solicitud del usuario
     * @return  Redirect indicadores redirecciona a la vista indicadores. 
     */
    public function store(Request $request){

    	$indicador = new Indicador($request->all());
    	$indicador->fecha=Carbon::now();
    	$indicador->nombre=$request->get('nombre');
    	$indicador->descripcion=$request->get('descripcion');
        $indicador->usuario_idUsuario=Auth::user()->id;
    	$indicador->save();
        
        return Redirect::to('indicadores');

    	
    }
    /**
     * Función para mostrar los indicadores en la tabla.
     * @param $id Id del indicador
     * @return  view indicadores.show retorna la lista de indicadores.
     */
    public function show($id){
    	return view("indicadores.show",["indicador"=>Indicador::findOrFail($id)]);
    }
    /**
     * Función para editar los indicadores en la tabla.
     * @param $id Id del indicador
     * @return  view indicadores.edit retorna la vista para editar los indicadores.
     */
    public function edit($id){
    	return view("indicadores.edit",["indicador"=>Indicador::findOrFail($id)]);
    	
    }
    /**
     * Funncion para actualizar los datos de un indicador.
     * @param Request $request, $id Solicitud del usuario, Id del indicador a actualizar 
     * @return  Redirect indicadores retorna la vista indicadores.
     */

  public function update(Request $request,$id){
        $indicador =Indicador::findOrFail($id);
        $indicador->fecha=Carbon::now();
         $indicador->nombre=$request->get('nombre');
         $indicador->descripcion=$request->get('descripcion');
        $indicador->usuario_idUsuario=Auth::user()->id;
        $indicador->update();
        return Redirect::to('indicadores');


    }
    /**
     * Funcion para eliminar un indicador.
     *@param $id Id del indicador a eliminar
     * @return  Redirect indicadores retorna la vista indicadores despues de eliminar un indicador.
     */
    public function destroy($id){
    	return Redirect::to('indicadores');
    }
}