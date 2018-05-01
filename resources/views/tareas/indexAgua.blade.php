@extends('layouts.app')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading"> Tareas</div>
          <div class="panel-body">
          Listado de Tareas
          <p>
            
          </p>
          <p>hay {{$tareasAgua->total()}} registros</p>
            <table class="table table-striped">
              <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Progreso (%)</th>
                <th>Acciones</th>
              </tr>

              @foreach ($tareasAgua as $tarea)
                  @if($indicadoresAgua->id_indicadorAgua == $tarea->indicadorAgua_id_indicador)
              <tr>
                <td>{{$tarea->id_tareaAgua}}</td>
                <td>{{$tarea->descripcion}}</td>
                <td><progress max="100" value= "{{$tarea->estado}}" ></progress></td>
                <td> <a href="{{URL::action('tareaAguaControladorEditar@edit',$tarea->id_tareaAgua)}}">Editar Tarea</a></td>

              </tr>
                @endif
                @endforeach

            </table>
            {!! $tareas->render() !!}
        </div>
        
      </div>
    </div>
  </div>
</div>



@endsection