<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RecetaController;

use App\Http\Middleware\Barman;

Route::get('/', function () {
    return view('welcome');
});
//---Rutas de los productos
Route::resource('productos',ProductoController::class);
Route::post('productos/buscar',[ProductoController::class,'buscar'])->middleware(Barman::class);

//---Rutas de las recetas
Route::resource('recetas',RecetaController::class);
Route::get('ingredientes/{receta_id}',[RecetaController::class, 'ingredientes'])->middleware('auth');
Route::post('agregar/ingrediente',[RecetaController::class, 'agregarIngrediente']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
