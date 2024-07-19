<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


// Todo Route----------------------------------------------------------------
Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todos/{todo}/completed', [TodoController::class, 'completed'])->name('todo.completed');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::Post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todos/{todo}', [TodoController::class, 'update'])->name('todo.update');
Route::delete('/todos/{todo}', [TodoController::class, 'destroy'])->name('todo.destroy');



// category Route----------------------------------------------------

Route::get('/categroies', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categroies/create', [CategoryController::class, 'create'])->name('category.create');
Route::Post('/categroies', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categroies/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/categroies/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/categroies/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
