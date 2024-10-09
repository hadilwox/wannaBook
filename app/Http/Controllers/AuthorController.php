<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public static function createNewAuthor($request)
    {



        $lastId = Author::insertGetId([
            'name' => $request->author
        ]);

        return $lastId;
    }
}
