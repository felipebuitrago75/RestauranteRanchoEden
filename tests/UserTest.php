<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testBackEndAgregar(){

    $usuario = new App\Usuario();
    $usuario-> idUsuario ='2';
    $usuario-> nombre ='Maria Hernandez';
    $usuario-> email ='maria65@hotmail.com';
   	$usuario-> contraseña ='1234567';
    $usuario-> ciudad = 'Calarca';
    $usuario->save();

  	$this->seeInDatabase('usuario', ['idUsuario' => '2']);

	}
  

}
