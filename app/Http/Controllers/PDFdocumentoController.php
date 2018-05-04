<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Indicador;


class PDFdocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("indicadores.index");
    }


    public function crearPDF($datos,$vistaurl, $indicador, $tareas)
    {

        $data = $datos;
        $indicadores= $indicador;
        $tarea=$tareas;
        $view =  \View::make($vistaurl, compact('data','indicadores','tarea'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('reporte');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vistaurl="indicadores.descripcion";
        $indicadores=Indicador::all();
        $indicador=Indicador::find($id);
        $tareas = tarea::all();

        return $this->crearPDF($indicadores, $vistaurl, $indicador,$tareas);

    }
}
