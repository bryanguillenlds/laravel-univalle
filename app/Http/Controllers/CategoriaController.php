<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        $datos = [
            'categorias' => $categorias,
        ];

        return view('categoria.index', $datos);
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();

        return redirect()->route('categoria.index');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        if (! $categoria) {
            return redirect()->route('categoria.index');
        }

        $datos = [
            'categoria' => $categoria,
        ];

        return view('categoria.edit', $datos);
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        if (! $categoria) {
            return redirect()->route('categoria.index');
        }

        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();

        return redirect()->route('categoria.index');
    }

    public function deleteconfirm($id)
    {
        $categoria = Categoria::find($id);
        if (! $categoria) {
            return redirect()->route('categoria.index');
        }

        $datos = [
            'categoria' => $categoria,
        ];

        return view('categoria.delete', $datos);
    }

    public function delete($id)
    {
        $categoria = Categoria::find($id);
        if (! $categoria) {
            return redirect()->route('categoria.index');
        }

        if ($categoria->productos()->count() > 0) {
            return redirect()->route('categoria.index')->with('error', 'No se puede eliminar una categoria que tiene productos.');
        }

        $categoria->delete();

        return redirect()->route('categoria.index');
    }
}
