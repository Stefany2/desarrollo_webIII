<?php

namespace App\Http\Controllers;
use App\Models\Product; // Importar el modelo Product
use Illuminate\Http\Request;
use App\Models\Cart; // Asegúrate de importar el modelo Cart


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $cart = session()->get('cart', []);
        $quantity = $request->input('quantity', 1);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $product = Product::find($productId);
            $cart[$productId] = [
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }
}