<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
    {
    $productos = Producto::all();
    return view('lista_productos', compact('productos'));
    }
    /**
     * Show the form for creating a new resource.
     */
   public function create()
    {
    return view('productos');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
    Producto::create($request->all());

    return redirect()->route('productos.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
    {
    $producto = Producto::findOrFail($id);
    return view('editar_producto', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, $id)
    {
    $producto = Producto::findOrFail($id);
    $producto->update($request->all());

    return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
    {
    Producto::destroy($id);
    return redirect('/productos');
    }
}
