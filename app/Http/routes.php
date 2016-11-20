<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'auth'], function () {
    Route::auth();
    Route::get('/admin', 'HomeController@index');
 
});

 Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::resource('usuario', 'UsuarioControlador');
Route::resource('indicadores','IndicadorControlador');

Route::resource('tareas','tareaControlador');
<<<<<<< HEAD
Route::auth();

Route::get('/home', 'HomeController@index');
=======
Route::resource('reporte','ReporteControlador');
>>>>>>> b6dce23da988d5353a31867fc2133e4ef9c6b0e1
