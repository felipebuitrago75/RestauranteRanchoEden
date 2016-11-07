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
    public function validor(){

        return view('/home');
    }

}