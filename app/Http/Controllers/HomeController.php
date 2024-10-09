<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        $booksNew = Book::orderByDesc('created_at')->get();
        $books = Book::orderByDesc('like')->get();

        return view('home.home', ['authors' => $authors, 'booksNew' => $booksNew , 'books' => $books]);
    }
}
