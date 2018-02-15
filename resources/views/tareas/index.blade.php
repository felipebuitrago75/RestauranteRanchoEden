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
          <p>hay {{$tareas->total()}} registros</p>
            <table class="table table-striped">
              <tr>
                <th>Id</th>
                <th>Descripcion</th>
                <th>Progreso (%)</th>
                 <th>Acciones</th>

               
              </tr>
              @foreach ($tareas as $tarea)
             @if($indicadores->id_indicador == $tarea->indicador_id_indicador)

              <tr>
                <td>{{$tarea->id_tarea}}</td>                 
                <td>{{$tarea->descripcion}}</td>  
                 <td><progress max="100" value= "{{$tarea->estado}}" ></progress></td>  
                 <td><a href="{{URL::action('tareaControlador@',$tarea->id_tarea)}}"><img src="img/logoEditarTarea.png" title="Editar"></a></td>


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