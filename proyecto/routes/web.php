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
})->name('Bienvenido');

Route::get('/contactanos', function () {
    return view('contactanos');
})->name('contactanos');

// Rutas protegidas por autenticación
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //RUTA DE PRODUCTOS
    Route::get('/productos', function () {
        return view('productos');
    })->name('productos');

     //RUTA DE ROPAS
     Route::get('/ropas', function () {
        return view('ropas');
    })->name('ropas');

      //RUTA DE OTROS
      Route::get('/otros', function () {
        return view('otros');
    })->name('otros');


    // Rutas para el carrito de compras y productos
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{cart}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('/cart', [CartController::class, 'show'])->name('cart.show');

    // Rutas para el perfil del usuario
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Ruta de cierre de sesión
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Ruta de Inicio
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio');
});

require __DIR__.'/auth.php';
