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

Route::get('registronuevo', function () {
    return view('registronuevo');
});


Route::get('cen-cud', function () {
    return view('cen-cud');
});
Route::get('revistas', function () {
    return view('revistas');
});

Route::get('resoluciones', function () {
    return view('resoluciones');
});
Route::get('convocatorias', function () {
    return view('convocatorias');
});
Route::get('boletines', function () {
    return view('boletines');
    });

Route::get('deportes', function () {
    return view('deportes');
});


Route::get('estatutos', function () {
    return view('estatutos');
});

Route::resource('nuevoadm','NuevoadmController');

Route::resource('info','InfoController');
 
Route::resource('portada','PortadaController');

Route::resource('adminblog', 'AdminBlogController');

Route::resource('boris','PhotoController');

Route::resource('login', 'LoginController');

Route::resource('administrador', 'AdminController');

Route::resource('noticia', 'NoticiaController');

Route::resource('resolucion', 'ResolucionController');

Route::resource('publicacion', 'PublicacionController');