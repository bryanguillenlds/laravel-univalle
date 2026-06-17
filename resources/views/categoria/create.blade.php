@extends('template.master')

@section('content')
    <h2>Crear Categoria</h2>

    <form action="{{ route('categoria.store') }}" method="POST">
        @csrf
        @method('POST')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div>
            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion"></textarea>
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
