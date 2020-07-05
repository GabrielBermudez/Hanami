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

use App\Http\Controllers\catalogoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("login",function(){
    return view("login");
});



Route::get("registrarse",function(){
    return view("registro");
});
Route::post("registrarse","registroController@RegistrarUsuario");



Route::get("contacto",function(){
    return view("contacto");
});

Route::get("catalogo","productosController@showCatalogo");

Route::get("producto/{id}","productosController@showProducto");

Route::get("home","productosController@showFavorito");