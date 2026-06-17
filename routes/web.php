<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return redirect()->route('producto.index');
});

// CRUD de categorias
Route::get('/categoria/index', [CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('/categoria/store', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('/categoria/edit/{id}', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/update/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
Route::get('/categoria/deleteconfirm/{id}', [CategoriaController::class, 'deleteconfirm'])->name('categoria.deleteconfirm');
Route::delete('/categoria/delete/{id}', [CategoriaController::class, 'delete'])->name('categoria.delete');

// CRUD de productos
Route::get('/producto/index', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto/store', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/producto/show/{id}', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/producto/edit/{id}', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/producto/update/{id}', [ProductoController::class, 'update'])->name('producto.update');
Route::get('/producto/deleteconfirm/{id}', [ProductoController::class, 'deleteconfirm'])->name('producto.deleteconfirm');
Route::delete('/producto/delete/{id}', [ProductoController::class, 'delete'])->name('producto.delete');
