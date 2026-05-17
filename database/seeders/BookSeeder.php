<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [

            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'publisher' => 'Bentang',
                'isbn' => '9789791227206',
                'year' => 2005,
                'genre' => 'Novel',
                'language' => 'Indonesia',
                'stock' => 10
            ],

            [
                'title' => 'Harry Potter',
                'author' => 'J.K. Rowling',
                'publisher' => 'Bloomsbury',
                'isbn' => '9780747532743',
                'year' => 1997,
                'genre' => 'Fantasy',
                'language' => 'English',
                'stock' => 15
            ],

        ];

        foreach ($books as $book) {

            Book::create($book);

        }
    }
}