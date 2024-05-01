{{-- resources/views/cart/show.blade.php --}}
@extends('layouts.app') <!-- Extender desde el layout principal -->

@section('content') <!-- Sección donde va el contenido principal -->
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

        <p>Precio total del carrito: $
            {{ array_sum(
                array_map(
                    fn($item) => $item['quantity'] * $item['product']->price,
                    $cartItems->toArray()
                )
            ) }}
        </p>
    @endif
</div>
@endsection
