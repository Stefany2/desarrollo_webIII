@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4 text-center">Carrito de Compras</h1> <!-- Ajusta el margen y centra el título -->

    @if ($cartItems->isEmpty())
        <div class="alert alert-info text-center"> <!-- Usa una alerta para mensajes de estado -->
            Tu carrito está vacío. <a href="{{ route('products.index') }}" class="alert-link">Ver productos</a>
        </div>
    @else
        <div class="list-group">
            @foreach ($cartItems as $item)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>
                        <strong>{{ $item->product->name }}</strong> <!-- Negrita para el nombre del producto -->
                        <br>
                        Cantidad: {{ $item->quantity }}
                        <br>
                        Precio por unidad: ${{ number_format($item->product->price, 2) }} <!-- Asegúrate de que el precio tenga dos decimales -->
                        <br>
                        Total: ${{ number_format($item->product->price * $item->quantity, 2) }} <!-- Asegúrate de que el total esté bien formateado -->
                    </span>

                    <div>
                        <form action="{{ route('cart.add', ['product' => $item->product->id]) }}" method="post" class="d-inline"> <!-- Estilo en línea para el formulario -->
                            @csrf
                            <input type="hidden" name="quantity" value="1">
                            <button type="submit" class="btn btn-success btn-sm">Añadir</button> <!-- Botón para añadir -->
                        </form>

                        <form action="{{ route('cart.remove', $item->id) }}" method="post" class="d-inline"> <!-- Estilo en línea para el formulario -->
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button> <!-- Botón para eliminar -->
                        </form>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 text-center"> <!-- Ajusta el margen y centra el contenido -->
            <h3>Precio total del carrito: ${{ number_format($totalPrice, 2) }}</h3> <!-- Asegúrate de que el total esté bien formateado -->
        </div>

        <div class="text-center mt-4"> <!-- Centra el contenido y añade margen -->
            <a href="{{ route('products.index') }}" class="btn btn-primary">Añadir otros productos</a> <!-- Botón para añadir otros productos -->
        </div>
    @endif
</div>
@endsection
