<?php


/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/UsuarioControlador.stub
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Usuario;
use Laracasts\Flash\Flash;

/**
 * Class UsuarioControlador
 * @package App\Http\Controllers
 */
class UsuarioControlador extends Controller
{
   
   /**
    * Funcion que guarda los datos de un usuario en la base de datos.
    * @param Request $request solicutd del usuario.
    * @return  view login retorna la vista login con el usuario creado.
    */
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
   
}