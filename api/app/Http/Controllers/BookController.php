<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use App\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Return all books.
     * 
     * @return Collection
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Returns a single book.
     * 
     * @return Book
     */
    public function byId(Book $book)
    {
        return $book;
    }

    /**
     * Persists a single book.
     * 
     * @return Response
     */    
    public function store(BookRequest $request)
    {
        $book =  Book::create($request->validated());
        return response()->json($book, 201);
    }

    /**
     * Updates a single book.
     * 
     * @return Response
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return response()->json($book, 200);
    }

    /**
     * Deletes a single book.
     * 
     * @return Response
     */   
    public function delete(Book $book)
    {
        $book->delete();
        return response()->json(null, 204);
    }

}