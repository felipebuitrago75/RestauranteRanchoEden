@extends('layouts.app')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading"> Indicadores</div>
          <div class="panel-body">
          Listado de indicadores
          <p>
            <a class="btn btn-info" href="{{route('indicadores.create')}}" role="button">Crear indicador</a>
          </p>

          <p>hay {{$indicadores->total()}} registros</p>
            <table class="table table-striped">
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Tareas</th>
                <th>Acciones</th>
              </tr>

              @foreach ($indicadores as $indicador)

              <tr>
                <td>{{($indicador->id_indicador)}}</td> 
                <td>{{$indicador->nombre}}</td> 
                <td>{{$indicador->descripcion}}</td>  
                <td>{{$indicador->fecha}}</td> 
                <td>
              <a class="btn btn-info" href="{{URL::action('tareaControlador@index',$indicador->id_indicador)}}" role="button">Tareas</a>

                <td>
                <a href="{{URL::action('tareaControlador@edit',$indicador->id_indicador)}}"><img src="img/agregarTarea.png" title="Agregar tarea"></a>
                  <a href="{{URL::action('IndicadorControlador@edit',$indicador->id_indicador)}}"><img src="img/logoEditarIndicador.png" title="Editar indicador"></a>
                  <a href="{{URL::action('ReporteControlador@edit',$indicador->id_indicador)}}"><img src="img/reporteIndicador.png" title="Reporte"></a>
             
                </td>




              </tr>
              @endforeach
            </table>
          {!! $indicadores->render() !!}
        </div>
        <a class="btn btn-info" href="{{ URL('excel') }}" role="button"> Descargar</a>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
      </div>
    </div>
  </div>
</div>



@endsection