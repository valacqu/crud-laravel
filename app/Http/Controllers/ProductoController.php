<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function create()
    {
        return view('crear_producto');
    }

    public function store(Request $request)
    {
        Producto::create($request->all());
        return redirect()->route('productos.index');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('editar_producto', compact('producto'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());

        return redirect()->route('productos.index');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index');
    }
}
