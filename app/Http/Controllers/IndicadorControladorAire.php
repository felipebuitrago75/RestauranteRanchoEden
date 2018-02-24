<?php
/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/IndicadorControlador.stub
 */

namespace App\Http\Controllers;

use App\IndicadorAire;
use App\tareaAgua;
use App\tareaAire;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Indicador;
use App\IndicadorAgua;
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
class IndicadorControladorAire extends Controller
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
    	
    	$indicadoresAire =IndicadorAire::paginate(5);
        $tareasAire=tareaAire::paginate();

    	return view('indicadores.index',compact('indicadoresAire','tareasAire'));
    	
    }

    /**
     *redirige a la vista crear indicadores 
     * @return  view  retorna la vista indicadores.create
     */
    public function create(){

    	return view("indicadores.createAire");
    	
    }
    /**
     *Fucnión que recibe la solicitud del usuario y guarda los datos en la base de datos
     * @param Request $request solicitud del usuario
     * @return  Redirect indicadores redirecciona a la vista indicadores. 
     */
    public function store(Request $request){

    	$indicadorAire = new IndicadorAire($request->all());
    	$indicadorAire->fecha=Carbon::now();
    	$indicadorAire->nombre=$request->get('nombre');
        $indicadorAire->usuario_idUsuario=Auth::user()->id;
    	$indicadorAire->descripcion=$request->get('descripcion');
    	$indicadorAire->save();
        
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
    	return view("indicadores.editAire",["indicador"=>IndicadorAire::findOrFail($id)]);
    	
    }
    /**
     * Funncion para actualizar los datos de un indicador.
     * @param Request $request, $id Solicitud del usuario, Id del indicador a actualizar 
     * @return  Redirect indicadores retorna la vista indicadores.
     */

  public function update(Request $request,$id){
        $indicadorAire =IndicadorAire::findOrFail($id);
        $indicadorAire->fecha=Carbon::now();
         $indicadorAire->nombre=$request->get('nombre');
         $indicadorAire->descripcion=$request->get('descripcion');
        $indicadorAire->usuario_idUsuario=Auth::user()->id;
        $indicadorAire->update();
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