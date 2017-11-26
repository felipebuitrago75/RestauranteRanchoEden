@extends('layouts.appInicio')
@section('contenido2')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"> Tareas</div>
                    <div class="panel-body">
                        Listado de Tareas
                        <p>

                        </p>
                        <p>hay {{$tareas->total()}} registros</p>
                        <table class="table table-striped">
                            <tr>
                                <th>Id</th>
                                <th>Descripcion</th>
                                <th>Progreso (%)</th>

                            </tr>
                            @foreach ($indicadores as $indicador)
                                @foreach ($tareas as $tarea)
                                    @if(($indicador->id_indicador)=== $tarea->indicador_id_indicador)

                                        <tr>
                                            <td>{{$tarea->id_tarea}}</td>
                                            <td>{{$tarea->descripcion}}</td>
                                             <td><progress max="100" value= "{{$tarea->estado}}" ></progress></td>


                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                        </table>
                        {!! $tareas->render() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection