<?php

namespace App\Actions\Books;

use App\Models\Book;
use App\Traits\HandlesBookCover;
use Illuminate\Support\Facades\{DB, Log};

class UpdateBookAction
{
    use HandlesBookCover;

    public function handle(Book $book, array $data): Book
    {
        try {
            DB::beginTransaction();

            if (isset($data['book_cover'])) {
                $this->deleteCover($book->book_cover);
                $data['book_cover'] = $this->uploadCover($data['book_cover']);
            }

            $book->update([
                'book_code'          => $data['book_code'],
                'udc_number'         => $data['udc_number'],
                'reg_number'         => $data['reg_number'],
                'title'              => $data['title'],
                'publisher'          => $data['publisher'],
                'author'             => $data['author'],
                'publication_year'   => $data['publication_year'],
                'publication_city'   => $data['publication_city'],
                'edition'            => $data['edition'],
                'language'           => $data['language'],
                'description'        => $data['description'],
                'isbn'               => $data['isbn'],
                'copies'             => $data['copies'],
                'main_subject'       => $data['main_subject'],
                'additional_subject' => $data['additional_subject'],
                'synopsis'           => $data['synopsis'],
                'book_cover'         => $data['book_cover'] ?? asset('img/default-book-cover.png'),
            ]);

            DB::commit();
            return $book;

        } catch (\Exception $error) {
            DB::rollBack();
            Log::error($error);
            throw $error;
        }
    }
}
