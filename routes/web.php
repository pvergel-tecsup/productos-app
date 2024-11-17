<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::patch('/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('productos.show');

Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

Route::resource('/categorias', CategoriaController::class);
