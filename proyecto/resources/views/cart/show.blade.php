{{-- resources/views/cart/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Carrito de Compras</h1>

    @if ($cartItems->isEmpty())
        <p>Tu carrito está vacío. <a href="{{ route('products.index') }}">Ver productos</a></p>
    @else
        <ul>
            @foreach($cartItems as $item)
                <li>
                    {{ $item->product->name }} - Cantidad: {{ $item->quantity }}
                    - Precio por unidad: ${{ $item->product->price }}
                    - Total para este producto: ${{ $item->product->price * $item->quantity }}

                    <!-- Botón para eliminar el elemento del carrito -->
                    <form action="{{ route('cart.remove', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>

        <!-- Mostrar el precio total del carrito -->
        <p>Precio total a pagar: ${{ $totalPrice }}</p> <!-- Mostrar el precio total al final -->

        <!-- Botón para añadir otros productos -->
        <a href="{{ route('products.index') }}" class="btn btn-primary">Añadir otros productos</a> <!-- Enlace para añadir otros productos -->
    @endif
</div>
@endsection
