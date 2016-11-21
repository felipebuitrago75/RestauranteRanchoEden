<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicador;
use App\Http\Requests;

/**
* 
*/
class ChartController extends Controller
{
	
	function __construct(argument)
	{
		# code...
	}
	public function index(){

		$p = Indicador::select('tarea.descripcion','indicador.id_indicador')->join('tarea', 'tarea.id_tarea', '=', 'indicador.id_tarea')->get();
		return view('reporte.edit',['p' => $p]);
	}
}