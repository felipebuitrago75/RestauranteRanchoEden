<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicador;
use App\tarea;
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

		$prueba = tarea::select('descripcion','estado')->get();
		return view('edit', )['prueba'=> $prueba];
	}
}