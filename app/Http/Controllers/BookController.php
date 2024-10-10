<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index(Book $book)
    {

        $singleBook = Book::findOrFail($book->id);
        return view('pages.singleBook', data: ['book' => $singleBook]);
    }
    public function create(StoreRequest $request)
    {

        $request->validated();



        $authors = Author::where('name', '=', $request->author)->first();

        // dd($request->image);

        if (!$request->image) {
            $fileBook = asset('uploads/images/Hobbit.jpg');
        } else {
            $fileBook = asset('uploads/images/') . time() . "-" . $request->image->getClientOriginalName();
            $request->image->storeAs('uploads/images', $fileBook);
        }



        if (!$authors) {
            // Not Exist Author
            $authorId = AuthorController::createNewAuthor($request);

            Book::create([
                'name' => strtolower($request->title),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque In egestas erat imperdiet sed euismod nisi porta lorem mollis',
                'author_id' => $authorId,
                'publication' => $request->year,
                'image' => $fileBook,
                'like' => 0
            ]);

            return redirect()->route('home')->with('success', 'کتاب با موفقیت افزوده شد');
        } else {
            // Exist Author
            Book::create([
                'name' => strtolower($request->title),
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi Arcu cursus vitae congue mauris rhoncus aenean vel elit scelerisque In egestas erat imperdiet sed euismod nisi porta lorem mollis',
                'author_id' => $authors->id,
                'publication' => $request->year,
                'image' => $fileBook,
                'like' => 0

            ]);

            return redirect()->route('home')->with('success', 'کتاب با موفقیت افزوده شد');
        }

    }

}
