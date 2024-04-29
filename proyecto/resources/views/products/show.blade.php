@extends('layouts.app')

@section('content')
<h1>{{ $product->name }}</h1>
<p>{{ $product->description }}</p>
<p>{{ $product->price }} USD</p>

<form action="{{ route('cart.add', $product->id) }}" method="post">
    @csrf
    <input type="number" name="quantity" min="1" value="1">
    <button type="submit">Agregar al carrito</button>
</form>
@endsection
