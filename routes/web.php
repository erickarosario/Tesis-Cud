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

Route::get('/', function () {
    return view('welcome');
});
Route::get('blogger', function () {
    return view('blogger');
});
Route::resource('info','InfoController');
 
Route::resource('portada','PortadaController');

Route::resource('adminblog', 'AdminBlogController');

Route::resource('boris','PhotoController');

Route::resource('login', 'LoginController');

Route::resource('administrador', 'AdminController');

Route::resource('noticia', 'NoticiaController');

Route::resource('resolucion', 'ResolucionController');

Route::resource('publicacion', 'PublicacionController');