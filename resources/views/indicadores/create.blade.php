@extends('layouts.app')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"> Creacion indicador</div>
					<div class="panel-body">
					
					{!! Form::open(['route'=> 'indicadores.store', 'method'=> 'POST']) !!}

							<div class="form-group">
						   {!! Form::label('id','Identificador del indicador')!!}
						   {!! Form::number('id',null,['class'=> 'form-control'])!!}

						  </div>
						  <div class="form-group">
						   {!! Form::label('nombre','Nombre del indicador')!!}
						   {!! Form::text('nombre',null,['class'=> 'form-control'])!!}

						  </div>
						  <div class="form-group">
						   {!! Form::label('responsable','Responsable')!!}
						   {!! Form::text('responsable',null,['class'=> 'form-control'])!!}
						    
						  </div>
						  <div class="form-group">
				
						    
						  </div>
						 
						  <button type="submit" class="btn btn-default">Registrar</button>
						
					{!! Form::close() !!}

				
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>



@endsection