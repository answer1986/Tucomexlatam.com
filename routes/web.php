<?php

use Illuminate\Support\Facades\Route;

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
    return view('Inicio');
});

Route::get('/quines_somos', function () {
    return view('Quienes-somos');
});

Route::get('/servicios', function () {
    return view('Servicios');
});


Route::get('/importacion', function () {
    return view('Importacion');
});

Route::get('/exportacion', function () {
    return view('Exportacion');
});

Route::get('/asesorias', function () {
    return view('asesorias');
});

Route::get('/preguntas', function () {
    return view('Preguntas');
});

Route::get('/contacto', function () {
    return view('Contacto');
});