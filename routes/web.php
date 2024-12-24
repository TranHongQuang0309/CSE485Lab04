<?php

use Illuminate\Support\Facades\Route;
// use resources\views\Home;

use App\Http\Controllers\BookController;

use App\Http\Controllers\ReaderController;
use App\Http\Controllers\BorrowController;
//home
Route::get('/', [BookController::class, 'home'])->name('home');
// danh sach book index
Route::resource('books', BookController::class);
// danh sach reader index
Route::resource('readers', ReaderController::class);
// danh sach borrow index
Route::resource('borrows', BorrowController::class);

