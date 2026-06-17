@extends('template.master')

@section('content')
    <h2>Eliminar Producto</h2>

    <p>Esta seguro de eliminar el producto {{ $producto->nombre }}?</p>

    <form action="{{ route('producto.delete', $producto->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Eliminar</button>
    </form>
@endsection
