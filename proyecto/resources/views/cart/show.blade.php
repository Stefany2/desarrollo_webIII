{{-- resources/views/cart/show.blade.php --}}
@extends('layouts.app') <!-- Extiende desde el layout principal -->

@section('content')
<div class="container">
    <h1>Carrito de Compras</h1>

    @if ($cartItems->isEmpty()) <!-- Maneja el carrito vacío -->
        <p>Tu carrito está vacío. <a href="{{ route('products.index') }}">Ver productos</a></p>
    @else
        <div class="list-group"> <!-- Usar list-group para estilizar la lista -->
            @foreach ($cartItems as $item)
                <div class="list-group-item d-flex justify-content-between align-items-center"> <!-- Card para cada producto -->
                    <span>
                        {{ $item->product->name }} - Cantidad: {{ $item->quantity }}
                        - Precio por unidad: ${{ $item->product->price }}
                        - Total: ${{ $item->product->price * $item->quantity }}
                    </span>

                    <div>
                        <!-- Botón para añadir más cantidad -->
                        <form action="{{ route('cart.add', ['product' => $item->product->id]) }}" method="post" style="display:inline;">
                            @csrf
                            <input type="hidden" name="quantity" value="1"> <!-- Añadir una unidad -->
                            <button type="submit" class="btn btn-success btn-sm">Añadir</button>
                        </form>

                        <!-- Botón para eliminar el elemento del carrito -->
                        <form action="{{ route('cart.remove', $item->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Mostrar el precio total del carrito -->
        <div class="mt-3"> <!-- Añadir margen superior para separar el total -->
            <h3>Precio total del carrito: ${{ $totalPrice }}</h3>
        </div>

        <!-- Botón para añadir otros productos -->
        <a href="{{ route('products.index') }}" class="btn btn-primary">Añadir otros productos</a> <!-- Enlace para añadir más productos -->
    @endif
</div>
@endsection
