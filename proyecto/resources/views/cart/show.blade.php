@extends('layouts.app') <!-- Asegúrate de extender tu layout principal -->

@section('content') <!-- Sección donde va el contenido principal -->
<h1>Carrito de Compras</h1>

@if ($cartItems->isEmpty()) <!-- Verificar si el carrito está vacío -->
<p>Tu carrito está vacío. <a href="{{ route('products.index') }}">Ver productos</a></p> <!-- Enlace para ver productos -->
@else
<ul>
    @foreach($cartItems as $item) <!-- Iterar sobre los elementos del carrito -->
    <li>
        {{ $item->product->name }} - Cantidad: {{ $item->quantity }} <!-- Mostrar nombre y cantidad -->
        <!-- Botón para eliminar un elemento del carrito -->
        <form action="{{ route('cart.remove', $item->id) }}" method="post" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </li>
    @endforeach
</ul>
@endif
@endsection <!-- Fin de la sección de contenido -->
