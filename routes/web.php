
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

// Redirigir raíz al login (opcional)
Route::get('/', function () {
    return redirect('/login');
});

// Rutas protegidas (requieren login)
Route::middleware('auth')->group(function () {
    Route::resource('productos', ProductoController::class);
});