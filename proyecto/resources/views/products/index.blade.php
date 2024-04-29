@extends('layouts.app')

@section('content')
<h1>Lista de Productos</h1>
<ul>
    @foreach($products as $product)
    <li>
        <a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a>
        - {{ $product->price }} USD
    </li>
    @endforeach
</ul>
@endsection
