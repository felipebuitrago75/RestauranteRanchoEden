@extends('layouts.app')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"> Creacion de Tareas <br> Indicador :  {{$indicador-> nombre}}</div>
					<div class="panel-body">



					<form action="{{ route('tareas.store') }}" method="post">
					 {{ csrf_field() }}
					   <div class="form-group">
						   {!! Form::label('descripcion','Nombre de la tarea')!!}
						   {!! Form::text('descripcion',null,['class'=> 'form-control'])!!}

						  </div>
						  <div class="form-group">
						   {!! Form::label('estado','Estado de la tarea')!!}
						   {!! Form::text('estado',null,['class'=> 'form-control','style' => 'resize:none'])!!}

						  </div>
						   <div class="form-group" style="display: none">
						  
						  <input type="hidden" name="indicador_id_indicador" value="{{ $indicador->id_indicador}}">

						  </div>
					
						 
						  <button type="submit" class="btn btn-default">Agregar</button>
					</form>




				
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>



@endsection