<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained(); // Clave foránea hacia la tabla `products`
            $table->integer('quantity'); // Cantidad de productos en el carrito
            $table->timestamps(); // Campos de tiempo
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carts'); // Borrar la tabla si se revierte la migración
    }
}

