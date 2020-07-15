<?php

namespace App\Http\Controllers;

use App\Book;
// use App\Http\Controllers\Controller;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(Book $book)
    {
        //dd($book->get());
        return $book->all();
    }

    public function detail(Book $book,$id)
    {
        //dd($book->find($id));
        return $book->find($id);
    }
}
