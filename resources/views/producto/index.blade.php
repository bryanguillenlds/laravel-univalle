@extends('template.master')

@section('content')
    <h2>Lista de Productos</h2>

    <a href="{{ route('producto.create') }}">Crear producto</a>

    <form action="{{ route('producto.index') }}" method="GET">
        <div>
            <label for="buscar">Buscar por nombre:</label>
            <input type="text" id="buscar" name="buscar" value="{{ $buscar }}">
            <button type="submit">Buscar</button>
        </div>
    </form>

    <ul>
        @foreach ($productos as $producto)
            <li>
                {{ $producto->nombre }}
                - Bs {{ $producto->precio }}
                - Stock: {{ $producto->stock }}
                - Categoria: {{ $producto->categoria ? $producto->categoria->nombre : 'Sin categoria' }}
                &nbsp;
                <a href="{{ route('producto.show', $producto->id) }}">Ver</a>
                &nbsp;
                <a href="{{ route('producto.edit', $producto->id) }}">Editar</a>
                &nbsp;
                <a href="{{ route('producto.deleteconfirm', $producto->id) }}">Eliminar</a>
            </li>
        @endforeach
    </ul>
@endsection
