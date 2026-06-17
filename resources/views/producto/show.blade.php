@extends('template.master')

@section('content')
    <h2>Detalle del Producto</h2>

    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Descripcion:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Precio:</strong> Bs {{ $producto->precio }}</p>
    <p><strong>Stock:</strong> {{ $producto->stock }}</p>
    <p><strong>Categoria:</strong> {{ $producto->categoria ? $producto->categoria->nombre : 'Sin categoria' }}</p>

    <a href="{{ route('producto.index') }}">Volver</a>
@endsection
