<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Indicador;
use App\tarea;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\IndicadorFormRequest;
use DB ;
use Auth;
use Carbon\Carbon;


class IndicadorControlador extends Controller
{
    //
    public function __construct(){
       
    }

    public function index(Request $request){
    	
    	$indicadores =Indicador::paginate(5);
        $tareas=tarea::paginate();

    	return view('indicadores.index',compact('indicadores','tareas'));
    	
    }

 
    public function create(){

    	return view("indicadores.create");
    	
    }
    public function store(Request $request){

    	$indicador = new Indicador($request->all());
    	$indicador->fecha=Carbon::now();
    	$indicador->nombre=$request->get('nombre');
    	$indicador->descripcion=$request->get('descripcion');
        $indicador->usuario_idUsuario=Auth::user()->id;
    	$indicador->save();
        
        return Redirect::to('indicadores');

    	
    }
    public function show($id){
    	return view("indicadores.show",["indicador"=>Indicador::findOrFail($id)]);
    }
    public function edit($id){
    	return view("indicadores.edit",["indicador"=>Indicador::findOrFail($id)]);
    	
    }
  public function update(Request $request,$id){
        $indicador =Indicador::findOrFail($id);
        $indicador->fecha=Carbon::now();
         $indicador->nombre=$request->get('nombre');
         $indicador->descripcion=$request->get('descripcion');
        $indicador->usuario_idUsuario=Auth::user()->id;
        $indicador->update();
        return Redirect::to('indicadores');


    }
    public function destroy($id){
    	return Redirect::to('indicadores');
    }
}