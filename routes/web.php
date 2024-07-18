<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('todo.index');

// category Route

Route::get('/categroies', [CategoryController::class, 'index'])->name('categroy.index');
Route::get('/categroies/create', [CategoryController::class, 'create'])->name('categroy.create');
Route::Post('/categroies', [CategoryController::class, 'store'])->name('categroy.store');
Route::get('/categroies/{category}/edit', [CategoryController::class, 'edit'])->name('categroy.edit');
Route::put('/categroies/{category}', [CategoryController::class, 'update'])->name('categroy.update');
Route::delete('/categroies/{category}', [CategoryController::class, 'destroy'])->name('categroy.destroy');
