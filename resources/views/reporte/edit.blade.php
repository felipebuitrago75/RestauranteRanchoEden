@extends('layouts.app')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"> Nombre de indicador: <br>  {{$indicador-> nombre}}</div>
					<div class="panel-body">
						
					{!! Form::model($indicador,['route' => ['indicadores.update',$indicador ],'method' =>'PUT']) !!}
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					   <div class="form-group">
						   {!! Form::label('tarea','Tareas del indicador')!!}

						    <p>hay {{$tareas->total()}} registros</p>
						      <table class="table table-striped">
						        <tr>
						          <th>Id</th>
						          <th>Descripción</th>
						          <th>Estado</th>
						         
						        </tr>
						        @foreach ($indicadores as $indicador)
						        @foreach ($tareas as $tarea)
						       @if(($indicador->id_indicador)=== $tarea->indicador_id_indicador)

						        <tr>
						          <td>{{$tarea->id_tarea}}</td>                 
						          <td>{{$tarea->descripcion}}</td>  
						          <td>{{$tarea->estado}}</td>  


						        </tr>
						        @endif
						        @endforeach
						        @endforeach
						      </table>
						    {!! $tareas->render() !!}
						   
						   </div>
						  <div class="form-group">
						   <p style="text-align: center;">TABLA DE ANALISIS DE INDICADOR</p>
						   	
						           <table align="center" border="1" cellpadding="1" cellspacing="1" id="TablaIndicador" style="width:500px;">
						   	<tbody>
						   		<tr>
						   			
									<td colspan="2" style="text-align: center; border-color: rgb(51, 153, 51);"><strong>A&Ntilde;O 2015</strong></td>
									<td colspan="2" style="text-align: center; border-color: rgb(51, 153, 51);"><strong>A&Ntilde;O 2016</strong></td>
									<td style="text-align: center; border-color: rgb(51, 153, 51);"><strong>AHORRO </strong></td>
						   		</tr>
						   		<tr>
						   			
						   			<td style="border-color: rgb(51, 153, 51);"><strong>ENERO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>FEBRERO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>ENERO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>FEBRERO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>

						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);">95000</td>
						   			<td style="border-color: rgb(51, 153, 51);">99000</td>
						   			<td style="border-color: rgb(51, 153, 51);">74000</td>
						   			<td style="border-color: rgb(51, 153, 51);">80000</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>FEBRERO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>MARZO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>FEBRERO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>MARZO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>

						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);">95000</td>
						   			<td style="border-color: rgb(51, 153, 51);">99000</td>
						   			<td style="border-color: rgb(51, 153, 51);">74000</td>
						   			<td style="border-color: rgb(51, 153, 51);">80000</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>MARZO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>ABRIL</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>MARZO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>ABRIL</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>

						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);">95000</td>
						   			<td style="border-color: rgb(51, 153, 51);">99000</td>
						   			<td style="border-color: rgb(51, 153, 51);">74000</td>
						   			<td style="border-color: rgb(51, 153, 51);">80000</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>ABRIL</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>MAYO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>ABRIL</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>MAYO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);">95000</td>
						   			<td style="border-color: rgb(51, 153, 51);">99000</td>
						   			<td style="border-color: rgb(51, 153, 51);">74000</td>
						   			<td style="border-color: rgb(51, 153, 51);">80000</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>MAYO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>JUNIO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>MAYO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);"><strong>JUNIO</strong></td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);">95000</td>
						   			<td style="border-color: rgb(51, 153, 51);">99000</td>
						   			<td style="border-color: rgb(51, 153, 51);">74000</td>
						   			<td style="border-color: rgb(51, 153, 51);">80000</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   		</tr>
						   		<tr>
						   			<td style="border-color: rgb(51, 153, 51);">TOTAL</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>
						   			<td style="border-color: rgb(51, 153, 51);">&nbsp;</td>

						   		</tr>
						   	</tbody>
						   </table>

						  </div>
					
						 
						  <button type="submit" class="btn btn-default">DESCARGAR</button>
					{!! Form::close() !!}




				
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>



@endsection