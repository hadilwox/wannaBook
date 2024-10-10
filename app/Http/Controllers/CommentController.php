<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function add(Request $request, Book $book)
    {
        $request->validate([
            'username' => 'required|max:155|min:2',
            'message' => 'required|max:2000|min:2'
        ]);


        Comment::create([
            'username' => $request->username,
            'message' => $request->message,
            'book_id' => $book->id
        ]);

        return back()->with('success', 'کامنت اضافه شد');

    }
}
