<?php

namespace App\Actions\Books;

use App\Models\Book;
use App\Traits\HandlesBookCover;

class DeleteBookAction
{
    use HandlesBookCover;

    public function handle(Book $book): void
    {
        $this->deleteCover($book->book_cover);
        $book->delete();
    }
}
