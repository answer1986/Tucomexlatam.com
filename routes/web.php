<?php

use App\Http\Controllers\ContactanosController;
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
    return view('inicio');
});

Route::get('/quines_somos', function () {
    return view('quienes-somos');
});

Route::get('/servicios', function () {
    return view('servicios');
});


Route::get('/importacion', function () {
    return view('importacion');
});

Route::get('/exportacion', function () {
    return view('exportacion');
});

Route::get('/asesorias', function () {
    return view('asesorias');
});

Route::get('/preguntas', function () {
    return view('preguntas');
});

Route::get('/servicios', function () {
    return view('servicios');
});

Route::get('/contacto',[ContactanosController::class, 'contacto'])->name('contacto'); 
Route::post('/contacto',[ContactanosController::class, 'store'])->name('contacto.store');
 
