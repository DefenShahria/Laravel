<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use function Laravel\Prompts\text;

Route::get('/', [PostController::class, 'home'])->name('home');
Route::get('/product', [PostController::class, 'product'])->name('product');
Route::post('/store', [PostController::class, 'store'])->name('store');
Route::get('/edit/{id}', [PostController::class, 'editData'])->name('edit');
Route::get('/delete/{id}', [PostController::class, 'deleteData'])->name('delete');
