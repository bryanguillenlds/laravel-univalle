@extends('template.master')

@section('content')
    <h2>Lista de Categorias</h2>

    @if (session('error'))
        <p>{{ session('error') }}</p>
    @endif

    <a href="{{ route('categoria.create') }}">Crear categoria</a>

    <ul>
        @foreach ($categorias as $categoria)
            <li>
                {{ $categoria->nombre }} - {{ $categoria->descripcion }}
                &nbsp;
                <a href="{{ route('categoria.edit', $categoria->id) }}">Editar</a>
                &nbsp;
                <a href="{{ route('categoria.deleteconfirm', $categoria->id) }}">Eliminar</a>
            </li>
        @endforeach
    </ul>
@endsection
