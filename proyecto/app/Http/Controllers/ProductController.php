<?php

namespace App\Http\Controllers;
use App\Models\Product; // Importar el modelo Product
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all(); // Obtenemos todos los productos
        return view('products.index', compact('products'));
    }

    public function show(Product $product) {
        return view('products.show', compact('product'));
    }
    
}
