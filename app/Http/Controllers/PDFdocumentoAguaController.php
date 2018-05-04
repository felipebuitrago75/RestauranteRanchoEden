<?php

namespace App\Http\Controllers;

use App\tareaAgua;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\IndicadorAgua;


class PDFdocumentoAguaController extends Controller
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
        $vistaurl="indicadores.descripcionAgua";
        $indicadores=IndicadorAgua::all();
        $indicador=IndicadorAgua::find($id);
        $tareas = tareaAgua::all();

        return $this->crearPDF($indicadores, $vistaurl, $indicador,$tareas);

    }
}
