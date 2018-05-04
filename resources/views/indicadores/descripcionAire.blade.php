<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Descripcion del Indicador </title>
    <style>

        .col-md-12 {
            width: 100%;
        }

        .box {
            position: relative;
            border-radius: 3px;
            background: green;
            border-top: 3px solid #F1EAE6;
            margin-bottom: 20px;
            width: 100%;
            box-shadow: 0 1px 1px rgba(0,0,0,0.1);
            background-color: #F1EAE6;
        }

        .box-header {
            color: #444;
            display: block;
            padding: 10px;
            position: relative;
        }

        .box-header.with-border {
            border-bottom: 1px solid #F1EAE6;
        }


        .box-header .box-title {
            display: inline-block;
            font-size: 18px;
            margin: 0;
            line-height: 1;
        }

        .box-body {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            padding: 10px;

        }


        .box-footer {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            border-top: 1px solid #f4f4f4;
            padding: 10px;
            background-color: #fff;
        }


        .table-bordered {
            border: 1px solid #9F7C69;
        }


        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        table {
            background-color: transparent;
        }

        .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
            border: 1px solid #f4f4f4;
        }


        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            background-color: #777;
            border-radius: 10px;
        }

        .bg-red {
            background-color: #dd4b39 !important;
        }


    </style>

</head>
<body>

<div class="col-md-12">

    <img src="img/encabezado.png">
    <div style="position: absolute; top: 1px; left: 230px"></div>
    <h3 class="box-title"><font style="text-transform: uppercase;"><?=  $indicadores->nombre; ?></font></h3>
    <div class="box">

        <div class="box-header with-border"></div><!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>Descripción</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $indicador)
                    @if($indicadores->id_indicadorAire == $indicador->id_indicadorAire)
                        <tr>

                            <td><?= $indicador->descripcion; ?></td>

                        </tr>
                    @endif
                @endforeach



                </tbody>

            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->


    <div class="box">

        <div class="box-header with-border"></div><!-- /.box-header -->
        <div class="box-body">

            <table class="table table-bordered">
                <thead>
                <tr>

                    <th>Tareas</th>
                </tr>
                </thead>
                <tbody>

                @foreach($tarea as $tareas)
                    @if($indicadores->id_indicadorAire == $tareas->indicadorAire_id_indicador)
                        <tr>

                            <td><?= $tareas->descripcion; ?></td>

                        </tr>
                    @endif
                @endforeach



                </tbody>

            </table>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>

<div style="position: absolute; top: 950px">
    <div class="box-footer">
        <div style="text-align: center"><strong>Copyright &copy; 2018</strong> Restaurante Rancho Edén S.A.S Todos los derechos reservados.</div>
    </div>
</div>
</body>


</html>

