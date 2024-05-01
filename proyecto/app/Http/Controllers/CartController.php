<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    // Método para agregar productos al carrito
    public function add(Request $request, Product $product) {
        // Validar que el producto exista
        if ($product == null) {
            return redirect()->back()->with('error', 'Producto no encontrado'); // Mensaje de error
        }

        // Validar la cantidad para asegurar que sea positiva
        $quantity = $request->input('quantity', 1);
        if ($quantity < 1) {
            return redirect()->back()->with('error', 'Cantidad inválida');
        }

        // Verificar si el producto ya está en el carrito
        $existingCart = Cart::where('product_id', $product->id)->first();

        if ($existingCart) {
            $existingCart->quantity += $quantity; // Incrementar la cantidad existente
            $existingCart->save();
        } else {
            // Crear un nuevo elemento en el carrito si no existe
            $cart = new Cart();
            $cart->product_id = $product->id;
            $cart->quantity = $quantity;
            $cart->save();
        }

        return redirect()->route('cart.show'); // Redirigir para mostrar el carrito
    }

    // Método para eliminar un producto del carrito
    public function remove(Cart $cart) {
        if ($cart == null) {
            return redirect()->back()->with('error', 'Elemento del carrito no encontrado'); // Validación
        }

        $cart->delete(); // Eliminar el elemento del carrito
        return redirect()->route('cart.show'); // Redirigir después de eliminar
    }

    // Método para mostrar el contenido del carrito
    public function show() {
        $cartItems = Cart::with('product')->get(); // Obtener todos los elementos del carrito con la relación de productos

        // Calcular el precio total con validaciones para evitar errores
        $totalPrice = $cartItems->sum(
            fn($item) => isset($item->product) ? $item->quantity * $item->product->price : 0
        );

        return view('cart.show', compact('cartItems', 'totalPrice')); // Pasar el precio total a la vista
    }
}



