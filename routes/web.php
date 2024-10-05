<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/productos/{nombre}',[ProductoController::class, 'index']);
//Route::get('/productos/agregar',[ProductoController::class, 'create']);

Route::resource('productos',ProductoController::class);