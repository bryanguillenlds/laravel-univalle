@extends('template.master')

@section('content')
    <h2>Eliminar Categoria</h2>

    <p>Esta seguro de eliminar la categoria {{ $categoria->nombre }}?</p>

    <form action="{{ route('categoria.delete', $categoria->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Eliminar</button>
    </form>
@endsection
