@extends('template.master')

@section('content')
    <h2>Crear Producto</h2>

    <form action="{{ route('producto.store') }}" method="POST">
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

        <div>
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" required>
        </div>

        <div>
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" required>
        </div>

        <div>
            <label for="categoria_id">Categoria:</label>
            <select id="categoria_id" name="categoria_id" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Guardar</button>
    </form>
@endsection
