@extends('layouts.app')
@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"> Nombre de indicador: <br>  {{$indicador-> nombre}}</div>

				{!! Form::model($reporte,['route' => ['reporte.getPDF',$reporte ],'method' =>'PUT']) !!}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
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

						  <div>
						  	<html>
						  	  <head>
						  	    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
						  	    <script type="text/javascript">
						  	      google.charts.load("current", {packages:["corechart"]});
						  	      google.charts.setOnLoadCallback(drawChart);
						  	      function drawChart() {
						  	        var data = google.visualization.arrayToDataTable([
						  	          ['Tareas', 'Progreso'],
						  	          ['Tarea 1',     11],
						  	          ['Tarea 2',      2],
						  	          ['Tarea 3',  2],
						  	          ['Tarea 4', 2],
						  	          ['Tarea 5',    7]
						  	        ]);

						  	        var options = {
						  	          title: 'Progreso de Tareas',
						  	          is3D: true,
						  	        };

						  	        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
						  	        chart.draw(data, options);
						  	      }
						  	    </script>
						  	  </head>
						  	  <body>
						  	    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
						  	  </body>
						  	</html>
						  </div>>
					
						 
					<button type="submit" class="btn btn-default"> DESCARGAR </button>
					{!! Form::close() !!}
				
					
					
				</div>
				
			</div>
		</div>
	</div>
</div>



@endsection