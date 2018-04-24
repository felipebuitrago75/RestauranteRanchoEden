@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">  <br> </div>
                    <div class="panel-body">

                        {!! Form::model($tareas,['route' => ['tareaAgua.update',$tareas ],'method' =>'PUT']) !!}
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            {!! Form::label('descripcion','Nombre de la tareas')!!}
                            {!! Form::text('descripcion',null,['class'=> 'form-control'])!!}

                        </div>
                        <div class="form-group">
                            {!! Form::label('estado','Estado de la tarea')!!}
                            {!! Form::textarea('estado',null,['class'=> 'form-control','style' => 'resize:none'])!!}

                        </div>


                        <button type="submit" class="btn btn-success">Actualizar</button>
                        {!! Form::close() !!}



                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection