@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>{{ $product->price }} USD</p>

<form action="{{ route('cart.add') }}" method="POST">
    @csrf
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button type="submit" class="btn btn-primary">
        Agregar al carrito
    </button>
</form>

@endsection
