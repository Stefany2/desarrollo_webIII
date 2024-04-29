<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('name'); // Nombre del producto
            $table->text('description')->nullable(); // Descripción (puede ser nula)
            $table->decimal('price', 8, 2); // Precio con dos decimales
            $table->integer('stock'); // Cantidad disponible
            $table->string('image')->nullable(); // URL de la imagen
            $table->timestamps(); // Timestamps para creado y actualizado
        });
    }

    public function down() {
        Schema::dropIfExists('products'); // Eliminar la tabla si se revierte la migración
    }
}
