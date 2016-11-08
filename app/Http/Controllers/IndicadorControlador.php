<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Indicador;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\IndicadorFormRequest;
use DB ;
use Carbon\Carbon;


class IndicadorControlador extends Controller
{
    //
    public function __construct(){
       
    }

    public function index(Request $request){
        
        $indicadores =Indicador::paginate(5);


        return view('indicadores.index',compact('indicadores'));
        
    }

 
    public function create(){

        return view("indicadores.create");
        
    }
    public function store(Request $request){

        $indicador = new Indicador($request->all());
        $indicador->fecha=Carbon::now();
        $indicador->nombre=$request->get('nombre');
        $indicador->descripcion=$request->get('descripcion');
        $indicador->usuario_idUsuario= Auth::user()->id;
        $indicador->save();
        
        $indicadores =Indicador::paginate();
        return view('indicadores.index',compact('indicadores'));

        
    }
    public function show($id){
        return view("indicadores.show",["indicador"=>Indicador::findOrFail($id)]);
    }
    public function edit($id){
        return view("indicadores.edit",["indicador"=>Indicador::findOrFail($id)]);
        
    }
    public function update(IndicadorFormRequest $request,$id){
        $indicador =Indicador::findOrFail($id);
        $indicador->fecha=$request->get('fecha');
        $indicador->nombre=$request->get('nombre');
        $indicador->responsable=$request->get('responsable');
        $indicador->update();
        return Redirect::to('indicadores');


    }
    public function destroy($id){
        return Redirect::to('indicadores');
    }
}