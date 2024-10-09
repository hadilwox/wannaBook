<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/book/{book}', [BookController::class, 'index'])->name('books.id');

Route::post('/book/create', [BookController::class, 'create'])->name('book.create');
