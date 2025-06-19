<?php

namespace App\ViewModels\Books;

use App\Models\Book;
use Illuminate\Support\Collection;

class BookIndexViewModel
{
    protected Collection $books;

    public function __construct()
    {
        $this->books = Book::select('book_code', 'title', 'publication_year')->get();
    }

    public function columns(): array
    {
        return ['No', 'Kode Buku', 'Judul', 'Total_peminjaman', 'Status'];
    }

    public function fields(): array
    {
        return $this->books->map(function ($book) {
            return [
                $book->book_code,
                $book->title,
                $book->publication_year,
                $book->publication_year,
            ];
        })->toArray();
    }

    public function actions(): array
    {
        return [
            ['type' => 'edit', 'route' => 'books.edit', 'key' => 'book_code'],
            ['type' => 'delete', 'route' => 'books.destroy', 'key' => 'book_code'],
        ];
    }
}
