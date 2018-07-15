@extends('layouts.appInicio')
@section('contenido2')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading"> Nombre de indicador: <br>  {{$indicadorAire->nombre}}  </div>


					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</div>

				<div class="form-group">

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
										@foreach ($tareaAire as $tarea)
										@if($indicadorAire->id_indicadorAire == $tarea->indicadorAire_id_indicador)
                                    ['{{$tarea->descripcion}}',    {{$tarea->estado}}],
									@endif
									@endforeach

                                ]);


                                var options = {
                                    title: 'Progreso de Tareas',
                                    is3D: true,
                                };
                                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                chart.draw(data, options);


                            }


						</script>

						{!! $tareaAire->render() !!}
					</head>

					<body>
					<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
					</body>
					</html>
					<div>
						<html>
						<head>
							<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
							<script type="text/javascript">
                                google.charts.load('current', {'packages':['bar']});
                                google.charts.setOnLoadCallback(drawStuff);

                                function drawStuff() {
                                    var data = new google.visualization.arrayToDataTable([
                                        ['Tareas', 'Progreso'],
											@foreach ($tareaAire as $tarea)
											@if($indicadorAire->id_indicadorAire == $tarea->indicadorAire_id_indicador)
                                        ['{{$tarea->descripcion}}',    {{$tarea->estado}},],
										@endif
										@endforeach

                                    ]);

                                    var options = {
                                        width: 800,
                                        legend: { position: 'none' },
                                        chart: {
                                            title: 'Grafico de barras',
                                            subtitle: 'Progreso de tareas' },
                                        axes: {
                                            x: {
                                                0: { side: 'top', label: 'Tareas'} // Top x-axis.
                                            }
                                        },
                                        bar: { groupWidth: "90%" }
                                    };

                                    var chart = new google.charts.Bar(document.getElementById('top_x_div'));
                                    // Convert the Classic options to Material options.
                                    chart.draw(data, google.charts.Bar.convertOptions(options));
                                };
							</script>
						</head>
						<body>
						<div id="top_x_div" style="width: 800px; height: 600px;"></div>
						</body>
						</html>
					</div>
				</div>
				{!! Form::close() !!}

				<a class="btn btn-info" href="{{ URL('reporteAire') }}" role="button"> Descargar</a>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</div>

		</div>
	</div>

	</div>
	</div>
	</div>
	</div>

@endsection