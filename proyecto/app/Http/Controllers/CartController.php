<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart; // Importar el modelo Cart
use App\Models\Product; // Importar el modelo Product

class CartController extends Controller
{
    public function add(Request $request, Product $product) {
        // Verificar si el producto ya está en el carrito
        $existingCart = Cart::where('product_id', $product->id)->first();

        if ($existingCart) {
            // Si ya existe, incrementa la cantidad
            $existingCart->quantity += $request->input('quantity', 1);
            $existingCart->save();
        } else {
            // Si no, crea un nuevo registro en el carrito
            $cart = new Cart();
            $cart->product_id = $product->id;
            $cart->quantity = $request->input('quantity', 1);
            $cart->save();
        }

        return redirect()->route('cart.show');
    }
    
    public function remove(Cart $cart) {
        // Eliminar el elemento del carrito
        $cart->delete();
        return redirect()->route('cart.show');
    }
    
    public function show() {
        // Obtener todos los elementos del carrito con la relación de productos
        $cartItems = Cart::with('product')->get();
        return view('cart.show', compact('cartItems'));
    }
}

