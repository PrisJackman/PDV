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

//Route::get('/', 'homeController@index');

Route::get('/', 'empleadosController@login');

Route::get('/registrarEmpleados', 'empleadosController@registrar');

//rutas para productos
Route::get('/registrarProductos', 'productosController@registrar');
Route::post('/guardarProductos',"productosController@guardar");
Route::get('/consultarProductos', "productosController@consultar");
Route::get('/eliminarProductos/{id}',"productosController@eliminar");
Route::get('/editarProductos/{id}',"productosController@editar");
Route::post('/actualizarProductos/{id}',"productosController@actualizar");

