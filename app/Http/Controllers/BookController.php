<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $data['books'] = Book::all();
        return view('book', $data);
    }

    public function store(BookRequest $request)
    {
        $book = new Book($request->all());
        //$book->author = $request->get('author');
        //$book->name = $request->get('name');
        //$book->des = $request->get('des');
        $book->save();
        return redirect()->route('get-book');
    }
}
