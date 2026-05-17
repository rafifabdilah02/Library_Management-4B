<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {

    return view('welcome');

});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/store', [BookController::class, 'store']);
Route::get('/books/update', [BookController::class, 'updateBook']);
Route::get('/books/delete', [BookController::class, 'deleteBook']);