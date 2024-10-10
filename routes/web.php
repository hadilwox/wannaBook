<?php

use App\Http\Controllers\Ajax\SearchController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/book/{book}', [BookController::class, 'index'])->name('books.id');

Route::post('/book/create', [BookController::class, 'create'])->name('book.create');

Route::post('/ajax/search', [SearchController::class, 'search'])->name('ajax.search');

Route::post('/book/{book}/comment/add', [CommentController::class, 'add'])->name('comment.add');