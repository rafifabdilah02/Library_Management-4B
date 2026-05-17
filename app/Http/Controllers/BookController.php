<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
{
    $search = 'Harry';

    $books = Book::where('genre', 'Fantasy')
        ->where('title', 'like', '%'.$search.'%')
        ->get();

    return $books;
}
public function store()
{
    Book::create([

        'title' => 'Bumi',
        'author' => 'Tere Liye',
        'publisher' => 'Gramedia',
        'isbn' => '9786020332953',
        'year' => 2014,
        'genre' => 'Fantasy',
        'language' => 'Indonesia',
        'stock' => 12

    ]);

    return 'Data berhasil ditambahkan';
}
public function updateBook()
{
    $book = Book::find(1);

    $book->update([

        'stock' => 20

    ]);

    return 'Data berhasil diupdate';
}
public function deleteBook()
{
    $book = Book::find(1);

    $book->delete();

    return 'Data berhasil dihapus';
}
}