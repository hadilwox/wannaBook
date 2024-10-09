<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/book/{id}', [BookController::class, 'index'])->name('books.id');

Route::post('/book', [BookController::class, 'create'])->name('book.create');
