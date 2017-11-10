@extends('layouts.appInicio')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Indicadores</div>
                    <div class="panel-body">
                        Listado de indicadores


                        <p>hay {{$indicadores->total()}} registros</p>
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Tareas</th>

                            </tr>

                            @foreach ($indicadores as $indicador)

                                <tr>
                                    <td>{{($indicador->id_indicador)}}</td>
                                    <td>{{$indicador->nombre}}</td>
                                    <td>{{$indicador->descripcion}}</td>
                                    <td>{{$indicador->fecha}}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{URL::action('tareaControlador@index',$indicador->id_indicador)}}" role="button">Tareas</a>



                                </tr>
                            @endforeach
                        </table>
                        {!! $indicadores->render() !!}
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                </div>
            </div>
        </div>
    </div>



@endsection