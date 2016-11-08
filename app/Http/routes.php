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


Route::group( ['middleware' => ['web'] ], function () {     

    /* these routes use 'auth' middleware, so only an authenticated user will access*/
    Route::group( ['middleware' => 'auth' ], function () {
        Route::get('/admin', 'HomeController@index');
    });

    Route::auth();
});

Route::group()
Route::resource('usuario', 'UsuarioControlador');
Route::resource('indicadores','IndicadorControlador');

Route::resource('tareas','tareaControlador');