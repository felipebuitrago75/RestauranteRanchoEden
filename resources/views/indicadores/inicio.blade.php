@extends('layouts.appInicio')
@section('contenido2')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Indicadores de Residuo</div>
                    <div class="panel-body">
                        Listado de indicadores


                        <p>Existen {{$indicadores->total()}} registros</p>
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Progreso</th>
                                <th>Tareas</th>
					            <th>Acciones</th>

                            </tr>

                            @foreach ($indicadores as $indicador)

                                <tr>
                                    <td>{{($indicador->id_indicador)}}</td>
                                    <td>{{$indicador->nombre}}</td>
                                    <td><a href="{{URL::action('PDFdocumentoController@edit',$indicador->id_indicador)}}"><img src="img/documento.jpg" title="Descripción"></a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{$res}}" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                {{$res}}
                                            </div>
                                        </div>

                                    </td>
                                    <td>
                                        <a class="btn btn-lg btn-success" href="{{URL::action('TareaControladorInicio@edit',$indicador->id_indicador)}}" role="button">Tareas</a>

                                <td>

                                <a href="{{URL::action('ReporteControladorInicio@edit',$indicador->id_indicador)}}"><img src="img/reporteIndicador.png" title="Reporte"></a>


                                </td>


                                </tr>
                            @endforeach
                        </table>
                        {!! $indicadores->render() !!}
                    </div>

                    <a class="btn btn-lg btn-success" href="{{ URL('excel') }}" role="button"> Descargar</a>


                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </div>
            </div>
        </div>
    </div>

<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Indicadores de Agua</div>
                    <div class="panel-body">
                        Listado de indicadores


                        <p>Existen {{$indicadoresAgua->total()}} registros</p>
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Tareas</th>
                                <th>Acciones</th>

                            </tr>

                            @foreach ($indicadoresAgua as $indicador)

                                <tr>
                                    <td>{{($indicador->id_indicadorAgua)}}</td>
                                    <td>{{$indicador->nombre}}</td>
                                    <td><a href="{{URL::action('PDFdocumentoAguaController@edit',$indicador->id_indicadorAgua)}}"><img src="img/documento.jpg" title="Descripción"></a></td>
                                    <td>{{$indicador->fecha}}</td>
                                    <td>
                                        <a class="btn btn-lg btn-success" href="{{URL::action('TareaAguaControladorInicio@edit',$indicador->id_indicadorAgua)}}" role="button">Tareas</a>
                                    <td>

                                        <a href="{{URL::action('ReporteAguaControlador@edit',$indicador->id_indicadorAgua)}}"><img src="img/reporteIndicador.png" title="Reporte"></a>


                                    </td>


                                </tr>
                            @endforeach
                        </table>
                        {!! $indicadoresAgua->render() !!}
                    </div>
                    <a class="btn btn-lg btn-success" href="{{ URL('excelAgua') }}" role="button"> Descargar</a>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Indicadores de Energía</div>
                    <div class="panel-body">
                        Listado de indicadores


                        <p>Existen {{$indicadoresAire->total()}} registros</p>
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Tareas</th>
                                <th>Acciones</th>

                            </tr>

                            @foreach ($indicadoresAire as $indicador)

                                <tr>
                                    <td>{{($indicador->id_indicadorAire)}}</td>
                                    <td>{{$indicador->nombre}}</td>
                                    <td><a href="{{URL::action('PDFdocumentoAireController@edit',$indicador->id_indicadorAire)}}"><img src="img/documento.jpg" title="Descripción"></a></td>
                                    <td>{{$indicador->fecha}}</td>
                                    <td>
                                        <a class="btn btn-lg btn-success" href="{{URL::action('TareaAireControladorInicio@edit',$indicador->id_indicadorAire)}}" role="button">Tareas</a>
                                    <td>

                                        <a href="{{URL::action('ReporteAireControlador@edit',$indicador->id_indicadorAire)}}"><img src="img/reporteIndicador.png" title="Reporte"></a>


                                    </td>


                                </tr>
                            @endforeach
                        </table>
                        {!! $indicadoresAire->render() !!}
                    </div>
                    <a class="btn btn-lg btn-success" href="{{ URL('excelAire') }}" role="button"> Descargar</a>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </div>
            </div>
        </div>
    </div>



@endsection