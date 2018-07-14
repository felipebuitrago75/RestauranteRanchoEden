@extends('layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
 <div id="c">
        <div class="container">

        </div>
    </div>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}"><h7><strong>Restaurante Rancho Edén</strong></h7></a>
        </div><!-- /.login-logo -->
  @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="login-box-body">
    <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>
    <form action="{{ url('/auth/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> {{ trans('adminlte_lang::message.remember') }}
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-lg btn-success">Iniciar</button>
            </div><!-- /.col -->
        </div>
    </form>


    


</div><!-- /.login-box-body -->

</div><!-- /.login-box -->

<div id="c">
        <div class="container">
            <p>
                <br/>
               <strong>Copyright &copy; 2018</strong> Restaurante Rancho Edén S.A.S Todos los derechos reservados.
            </p>

        </div>
    </div>

    @include('layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection