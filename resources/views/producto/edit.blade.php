@extends('template.master')

@section('content')
    <h2>Editar Producto</h2>

    <form action="{{ route('producto.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>

        <div>
            <label for="descripcion">Descripcion:</label>
            <textarea id="descripcion" name="descripcion">{{ $producto->descripcion }}</textarea>
        </div>

        <div>
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" value="{{ $producto->precio }}" required>
        </div>

        <div>
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" value="{{ $producto->stock }}" required>
        </div>

        <div>
            <label for="categoria_id">Categoria:</label>
            <select id="categoria_id" name="categoria_id" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" @if ($producto->categoria_id == $categoria->id) selected @endif>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Actualizar</button>
    </form>
@endsection
