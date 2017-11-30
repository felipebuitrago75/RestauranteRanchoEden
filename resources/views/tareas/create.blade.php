@extends('layouts.app')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">  <br> Tarea:  {{$tarea-> descripcion}}</div>
					<div class="panel-body">



						{!! Form::model($tarea,['route' => ['tareas.update',$tarea ],'method' =>'PUT']) !!}
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   <div class="form-group">
						   {!! Form::label('descripcion','Nombre de la tarea')!!}
						   {!! Form::text('descripcion',null,['class'=> 'form-control'])!!}

						  </div>
						  <div class="form-group">
						   {!! Form::label('estado','Estado de la tarea')!!}
						   {!! Form::text('estado',null,['class'=> 'form-control','style' => 'resize:none'])!!}

						  </div>
						<button type="submit" class="btn btn-default">Actualizar</button>
						{!! Form::close() !!}
				</div>
				
			</div>
		</div>
	</div>
</div>



@endsection