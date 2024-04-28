<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Ruta de Inicio
Route::get('/inicio', function () {
    return view('inicio');
})->name('inicio');

// Ruta de contactanos
Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

// Ruta de productos
Route::get('/productos', function () {
    return view('productos');
})->name('productos');