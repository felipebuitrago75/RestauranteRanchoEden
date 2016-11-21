<?php
/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/PDFController.stub
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF;
use PDF;

/**
 * Class PDFController
 * @package App\Http\Controllers
 */
class PDFController extends Controller
{

	  /**
     * Muestra un reporte de los indicadores y lo descarga.
     *@param   $id  id del indicador
     *@return View indicadores retorna la vista indicadores  
     */
	public function generateReport($id){

			$pdf = \PDF::loadView('reporte.edit');
			return $pdf->download('Reporte.pdf');
	    }

}