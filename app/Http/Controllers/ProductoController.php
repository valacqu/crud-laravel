<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
  public function index(Request $request)
{
    $buscar = $request->buscar;

    $productos = Producto::where('user_id', auth()->id())
        ->when($buscar, function ($query, $buscar) {
            return $query->where('nombre', 'like', "%$buscar%");
        })
        ->get();

    return view('lista_productos', compact('productos'));
}

    public function create()
    {
        return view('crear_producto');
    }

public function store(Request $request)
{
   

    Producto::create([
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'user_id' => auth()->id()
    ]);

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
