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
Route::get('controlador','Bienvenido@index');

//Route::resource('restful/sss', 'ControladorRestFull');

Route::resource('restful', 'ControladorRestFull');

Route::get('prueba', function(){
	return "hola desde routes";
});
Route::get('nombre/{nombre}', function($nombre){
	return 'mi nombre es: '.$nombre;
});
Route::get('edad/{edad?}', function($edad = 1){
	return 'mi edad es: '.$edad;
});
Route::get('/', function () {
    return view('welcome');
});
