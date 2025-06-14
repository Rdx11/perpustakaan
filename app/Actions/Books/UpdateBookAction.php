<?php

namespace App\Actions\Books;

use App\Models\Book;
use App\Traits\HandlesBookCover;

class UpdateBookAction
{
    use HandlesBookCover;

    public function handle(Book $book, array $data): Book
    {
        if (isset($data['book_cover'])) {
            $this->deleteCover($book->book_cover);
            $data['book_cover'] = $this->uploadCover($data['book_cover']);
        }

        $book->update($data);
        return $book;
    }
}
