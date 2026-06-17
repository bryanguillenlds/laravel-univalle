@extends('template.master')

@section('content')
    <h2>Editar Categoria</h2>

    <form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $categoria->nombre }}" required>
        </div>

        <div>
            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion">{{ $categoria->descripcion }}</textarea>
        </div>

        <button type="submit">Actualizar</button>
    </form>
@endsection
