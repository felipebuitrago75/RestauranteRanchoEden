<?php
/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/PDFController.stub
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Excel;
use App\IndicadorAgua;
use App\tarea;


/**
 * Class PDFController
 * @package App\Http\Controllers
 */
class PDFControllerAgua extends Controller
{

	  /**
     * Muestra un reporte de los indicadores y lo descarga.
     *@param   $id  id del indicador
     *@return View indicadores retorna la vista indicadores  
     */
	public function index(){

		$export= IndicadorAgua::select('id_indicadorAgua','fecha', 'nombre','usuario_idUsuario','descripcion')->get();
		
		Excel::create('Reporte Indicadores ', function($excel) use($export) {

		    $excel->sheet('Indicadores', function($sheet) use ($export) {

		        $sheet->fromArray($export);

		       });
		   

		})->export('xls');

	   }

}