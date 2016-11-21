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


Route::auth();

Route::get('/home', 'HomeController@index');


Route::resource('usuario', 'UsuarioControlador');
Route::resource('indicadores','IndicadorControlador');

Route::resource('tareas','tareaControlador');
Route::resource('reporte','ReporteControlador');

Route::get('reporte/{id}/edit', [
		'uses'	=> 'PDFController@generateReport',
		'as'	=> 'reporte.edit'
	]);
	
