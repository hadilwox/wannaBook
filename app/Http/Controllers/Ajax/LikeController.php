<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function like(Request $request)
    {


        $count = $request->input('count');
        $bookId = $request->input('bookId');

        $book = Book::find($bookId);
        $book->like = $count;
        $book->save();
        // پردازش داده‌ها
        return response()->json(['count' => $count, 'bookId' => $bookId]);
    }
}
