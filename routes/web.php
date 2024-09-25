<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('producto', function () {
//     return view('producto.index');
// });

// Route::get('producto/create', [ProductoController::class, 'create']);

Route::resource('producto', ProductoController::class);