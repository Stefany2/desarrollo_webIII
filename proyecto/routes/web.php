<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/', function () {
    return view('welcome');
});

Route::get('/Bienvenido', function () {
    return view('Bienvenido');
})->name('Bienvenido'); // Ruta pública para la página de bienvenida

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos'); // Ruta pública para la página de contacto

// Rutas protegidas por autenticación
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard'); // Ruta del dashboard, requiere autenticación y verificación

    // Rutas para el carrito de compras y productos
    Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Lista de productos
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show'); // Detalles de un producto
    
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add'); // Agregar al carrito
    Route::delete('/cart/remove/{cart}', [CartController::class, 'remove'])->name('cart.remove'); // Eliminar del carrito
    Route::get('/cart', [CartController::class, 'show'])->name('cart.show'); // Ver el carrito

    // Rutas para el perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Editar perfil
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Actualizar perfil
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Eliminar perfil
    
    // Ruta de cierre de sesión
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Cerrar sesión

    // Ruta de Inicio
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio'); // Ruta protegida por autenticación

    // Ruta de productos
Route::get('/productos', function () {
    return view('productos');
})->name('productos');
});

require __DIR__.'/auth.php'; // Asegura las rutas de autenticación
