<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

// Ruta de inicio de sesión
Route::post('/login', 'Auth\LoginController@login')->middleware('role.redirect');

// Rutas para cada tipo de usuario
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/cajero/dashboard', 'CajeroController@index')->name('cajero.dashboard');
Route::get('/vendedor/dashboard', 'VendedorController@index')->name('vendedor.dashboard');