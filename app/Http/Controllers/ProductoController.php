<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->input('buscar');

        if ($buscar) {
            $productos = Producto::where('nombre', 'like', '%'.$buscar.'%')->get();
        } else {
            $productos = Producto::all();
        }

        $datos = [
            'productos' => $productos,
            'buscar' => $buscar,
        ];

        return view('producto.index', $datos);
    }

    public function create()
    {
        $categorias = Categoria::all();
        $datos = [
            'categorias' => $categorias,
        ];

        return view('producto.create', $datos);
    }

    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->categoria_id = $request->input('categoria_id');
        $producto->save();

        return redirect()->route('producto.index');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        if (! $producto) {
            return redirect()->route('producto.index');
        }

        $datos = [
            'producto' => $producto,
        ];

        return view('producto.show', $datos);
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        if (! $producto) {
            return redirect()->route('producto.index');
        }

        $categorias = Categoria::all();
        $datos = [
            'producto' => $producto,
            'categorias' => $categorias,
        ];

        return view('producto.edit', $datos);
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        if (! $producto) {
            return redirect()->route('producto.index');
        }

        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->categoria_id = $request->input('categoria_id');
        $producto->save();

        return redirect()->route('producto.index');
    }

    public function deleteconfirm($id)
    {
        $producto = Producto::find($id);
        if (! $producto) {
            return redirect()->route('producto.index');
        }

        $datos = [
            'producto' => $producto,
        ];

        return view('producto.delete', $datos);
    }

    public function delete($id)
    {
        $producto = Producto::find($id);
        if (! $producto) {
            return redirect()->route('producto.index');
        }

        $producto->delete();

        return redirect()->route('producto.index');
    }
}
