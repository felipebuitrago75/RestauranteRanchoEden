@extends('layouts.app')
@section('contenido')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading"> Indicadores Energia</div>
          <div class="panel-body">
          Listado de indicadores
          <p>
            <a class="btn btn-lg btn-success" href="{{route('indicadores.create')}}" role="button">Crear indicador</a>
          </p>

          <p>Existen {{$indicadores->total()}} registros</p>
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
              <a class="btn btn-lg btn-success" href="{{URL::action('tareaControlador@show',$indicador->id_indicador)}}" role="button">Tareas</a>

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
        <div class="panel-heading"> Indicadores Agua</div>
        <div class="panel-body">
          Listado de indicadores
          <p>
            <a class="btn btn-lg btn-success" href="{{route('indicadoresAgua.create')}}" role="button">Crear indicador</a>
          </p>

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

            @foreach ($indicadoresAgua as $indicadorAgua)

              <tr>
                <td>{{($indicadorAgua->id_indicadorAgua)}}</td>
                <td>{{$indicadorAgua->nombre}}</td>
                <td>{{$indicadorAgua->descripcion}}</td>
                <td>{{$indicadorAgua->fecha}}</td>
                <td>
                  <a class="btn btn-lg btn-success" href="{{URL::action('tareaAguaControlador@show',$indicadorAgua->id_indicadorAgua)}}" role="button">Tareas</a>

                <td>
                  <a href="{{URL::action('tareaAguaControlador@edit',$indicadorAgua->id_indicadorAgua)}}"><img src="img/agregarTarea.png" title="Agregar tarea"></a>
                  <a href="{{URL::action('IndicadorControladorAgua@edit',$indicadorAgua->id_indicadorAgua)}}"><img src="img/logoEditarIndicador.png" title="Editar indicador"></a>
                  <a href="{{URL::action('ReporteAguaControlador@edit',$indicadorAgua->id_indicadorAgua)}}"><img src="img/reporteIndicador.png" title="Reporte"></a>


                </td>




              </tr>
            @endforeach
          </table>
          {!! $indicadores->render() !!}
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
        <div class="panel-heading"> Indicadores Aire</div>
        <div class="panel-body">
          Listado de indicadores
          <p>
            <a class="btn btn-lg btn-success" href="{{route('indicadoresAire.create')}}" role="button">Crear indicador</a>
          </p>

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

            @foreach ($indicadoresAire as $indicadorAire)

              <tr>
                <td>{{($indicadorAire->id_indicadorAire)}}</td>
                <td>{{$indicadorAire->nombre}}</td>
                <td>{{$indicadorAire->descripcion}}</td>
                <td>{{$indicadorAire->fecha}}</td>
                <td>
                  <a class="btn btn-lg btn-success" href="{{URL::action('tareaAireControlador@show',$indicadorAire->id_indicadorAire)}}" role="button">Tareas</a>

                <td>
                  <a href="{{URL::action('tareaAireControlador@edit',$indicadorAire->id_indicadorAire)}}"><img src="img/agregarTarea.png" title="Agregar tarea"></a>
                  <a href="{{URL::action('IndicadorControladorAire@edit',$indicadorAire->id_indicadorAire)}}"><img src="img/logoEditarIndicador.png" title="Editar indicador"></a>
                  <a href="{{URL::action('ReporteAireControlador@edit',$indicadorAire->id_indicadorAire)}}"><img src="img/reporteIndicador.png" title="Reporte"></a>


                </td>




              </tr>
            @endforeach
          </table>
          {!! $indicadores->render() !!}
        </div>
        <a class="btn btn-lg btn-success" href="{{ URL('excelAire') }}" role="button"> Descargar</a>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

      </div>
    </div>
  </div>
</div>

@endsection