<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index'])->name('todo.index');

// category Route

Route::get('/categroies/create', [CategoryController::class, 'create'])->name('categroy.create');
Route::Post('/categroies', [CategoryController::class, 'store'])->name('categroy.store');
