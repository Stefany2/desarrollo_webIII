<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, Product $product) {
        $existingCart = Cart::where('product_id', $product->id)->first();
    
        if ($existingCart) {
            $existingCart->quantity += $request->input('quantity', 1);
            $existingCart->save();
        } else {
            $cart = new Cart();
            $cart->product_id = $product->id;
            $cart->quantity = $request->input('quantity', 1);
            $cart->save();
        }
    
        return redirect()->route('cart.show'); // Redirigir para mostrar el carrito
    }
    
    public function remove(Cart $cart) {
        $cart->delete(); // Eliminar el elemento del carrito
        return redirect()->route('cart.show'); // Redirigir después de eliminar
    }
    
    public function show() {
        $cartItems = Cart::with('product')->get(); // Obtener todos los elementos del carrito con la relación de productos
    
        $totalPrice = $cartItems->sum(fn($item) => $item->product->price * $item->quantity); // Calcular el precio total del carrito
    
        return view('cart.show', compact('cartItems', 'totalPrice')); // Pasar el precio total a la vista
    }
    
}


