<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('prueba', function () {//funcion basica GET 
 return "Hola desde web.php";    
    
});
Route::get('nombre/{nombre}', function ($nombre) { //Funcion get con parametro: http://127.0.0.1:8000/nombre/Andres
 return "Mi nombre es: ".$nombre;    
    
});
//Funcion get con parametro por default en caso de venir vacio http://127.0.0.1:8000/edad/234 o http://127.0.0.1:8000/edad
Route::get('edad/{edad?}', function ($edad=25) {
 return "Mi edad es: ".$edad;    
    
});
//Multiples rutas en un solo controlador https://laravel.com/docs/5.7/controllers#dependency-injection-and-controllers
Route::resource('movie','MovieController');

Route::get('controlador','pruebaController@index');//funcion basica de controlador
Route::get('name/{nombre}','pruebaController@nombre'); 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/','FrontController@index'); //esto manda a la pagina principal siempre
Route::get('contacto','FrontController@contacto');
Route::get('reviews','FrontController@reviews');
Route::get('admin','FrontController@admin'); //RUTA DEL MODULO DE ADMINISTRACION

Route::resource('usuario','UsuarioController');