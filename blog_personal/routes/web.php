<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Ruta de Inicio
Route::get('/Inicio', function () {
    return view('Inicio');
})->name('Inicio');

// Ruta de Sobre Nosotros
Route::get('/Ocupacion', function () {
    return view('Ocupacion');
})->name('Ocupacion');

// Ruta de Acerca
Route::get('/Acerca_de_mi', function () {
    return view('Acerca_de_mi');
})->name('Acerca_de_mi');

// Ruta de Contacto
Route::get('/Experiencia', function () {
    return view('Experiencia');
})->name('Experiencia');

// Ruta de Servicios
Route::get('/Gustos', function () {
    return view('Gustos');
})->name('Gustos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
