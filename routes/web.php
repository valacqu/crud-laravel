<?php
use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/formulario', [ProductoController::class, 'create'])->name('productos.create');

Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');

Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');