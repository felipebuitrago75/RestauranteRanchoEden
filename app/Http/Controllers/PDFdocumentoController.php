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


    public function crearPDF($datos,$vistaurl, $indicador)
    {

        $data = $datos;
        $indicadores= $indicador;
        $view =  \View::make($vistaurl, compact('data','indicadores'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        return $pdf->stream('reporte');

    }


    public function crear_reporte($id){

        $vistaurl="indicadores.descripcion";
        $indicadores=Indicador::all();
        $indicador=Indicador::find($id);

        return $this->crearPDF($indicadores, $vistaurl, $indicador);




    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        return $this->crearPDF($indicadores, $vistaurl, $indicador);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
