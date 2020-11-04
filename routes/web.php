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

Route::get('w', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('inicio');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('servicios', function () {
    return view('servicios');
});


Route::get('contacto', function () {
    if (true) {
        # code...
    } else {
        # code...
    }
    
    return view('contacto');
});


Route::get('reservas', function () {
    return view('reservas');
});


Route::get('sesion', function () {
    return view('sesion');
});


/*
|--------------------------------------------------------------------------
| Resources Controllers para tablas de CRUD's
|--------------------------------------------------------------------------
*/

Route::resource('users','Users_Controller');