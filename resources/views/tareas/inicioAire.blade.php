@extends('layouts.appInicio')
@section('contenido2')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">Tareas</div>
                    <div class="panel-body">
                        Listado de Tareas
                        <p>

                        </p>
                        <p></p>

                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Descripcion</th>
                                <th>Progreso (%)</th>

                            </tr>
                            <tr>
                                            @foreach($tareas as $tarea)
                                                @if($indicadores->id_indicadorAire == $tarea->indicadorAire_id_indicador)
                                            <td>{{$tarea->id_tareaAire}}</td>
                                            <td>{{$tarea->descripcion}}</td>
                                            <td><progress max="100" value= "{{$tarea->estado}}" ></progress></td>


                                        </tr>
                            @endif
                        @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection