<?php

use Illuminate\Support\Facades\Route;
// use resources\views\Home;

use App\Http\Controllers\BookController;
//home
Route::get('/', [BookController::class, 'home'])->name('home');
// danh sach book index
Route::resource('books', BookController::class);
