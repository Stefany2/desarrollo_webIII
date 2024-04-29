@extends('layouts.app') <!-- Extender tu layout principal -->

@section('content') <!-- Sección de contenido -->
<h1>Lista de Productos</h1>

<div class="container">
    <div class="row">
        @foreach($products as $product) <!-- Iterar sobre cada producto -->
        <div class="col-md-4"> <!-- Tarjeta para cada producto -->
            <div class="product-card">
                <!-- Código para mostrar la imagen del producto -->
                @if (isset($product->image)) <!-- Verificar si el producto tiene una imagen -->
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="product-image" /> <!-- Mostrar la imagen -->
                @else
                    <img src="https://via.placeholder.com/300x200" alt="Imagen no disponible" class="product-image" /> <!-- Imagen por defecto -->
                @endif
                <!-- Mostrar el nombre y el precio del producto -->
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->price }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
