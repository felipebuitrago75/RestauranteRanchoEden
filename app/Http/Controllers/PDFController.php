<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\PDF;
use PDF;

class PDFController extends Controller
{

	public function generateReport(){

	    	
			$pdf = \PDF::loadView('reporte.edit');
			return $pdf->download('Reporte.pdf');
	    }
}