{{-- resources/views/products/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Precio: ${{ $product->price }}</p>
                        <form action="{{ route('cart.add', ['product' => $product->id]) }}" method="POST"> <!-- Proporcionar el parámetro "product" -->
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button type="submit" class="btn btn-primary">Agregar al carrito</button>
</form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
