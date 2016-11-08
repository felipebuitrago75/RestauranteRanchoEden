<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use Laracasts\Flash\Flash;

class UsuarioControlador extends Controller
{
    public function store(Request $request){


    	$user = new Usuario($request->all());
        $user ->id= $_POST['idUsuario']:
        $user->nombre= $_POST['nombre'];
    	$user->email= $_POST['email'];
    	$user->contraseña=$_POST['contraseña'];
    	$user->ciudad=$_POST['ciudad'];
    	$user->save();
        return view('login')->with('usuario',$user);
    	
    }
    /**
     * Valida los datos del usuario.
     */
    public function postLogin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'email' => Input::get('email'),
            'password'=> Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata, Input::get('remember-me', 0)))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/indicadores');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
    }
}