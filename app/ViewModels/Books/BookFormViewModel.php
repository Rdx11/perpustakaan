<?php

namespace App\ViewModels\Books;

use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookFormViewModel
{
    public ?Book $book;

    public function __construct(?Book $book = null)
    {
        $this->book = $book;
    }

    public function default(): array
    {
        return [
            'book_code'         => $this->book?->book_code ?? '',
            'udc_number'        => $this->book?->udc_number ?? '',
            'reg_number'        => $this->book?->reg_number ?? '',
            'title'             => $this->book?->title ?? '',
            'publisher'         => $this->book?->publisher ?? '',
            'author'            => $this->book?->author ?? '',
            'publication_year'  => $this->book?->publication_year ?? '',
            'publication_city'  => $this->book?->publication_city ?? '',
            'edition'           => $this->book?->edition ?? '',
            'language'          => $this->book?->language ?? '',
            'description'       => $this->book?->description ?? '',
            'isbn'              => $this->book?->isbn ?? '',
            'copies'            => $this->book?->copies ?? 1,
            'main_subject'      => $this->book?->main_subject ?? '',
            'additional_subject'=> $this->book?->additional_subject ?? '',
            'synopsis'          => $this->book?->synopsis ?? '',
            'book_cover'        => $this->coverUrl(),
        ];
    }

    public function coverUrl(): ?string
    {
        if (!$this->book?->book_cover) {
            return null;
        }

        return Storage::url($this->book->book_cover);
    }

    public function isEdit(): bool
    {
        return $this->book !== null;
    }

    public function title(): string
    {
        return $this->isEdit() ? 'Edit Buku' : 'Tambah Buku';
    }

    public function formAction(): string
    {
        return $this->isEdit()
            ? route('books.update', $this->book)
            : route('books.store');
    }

    public function formMethod(): string
    {
        return $this->isEdit() ? 'PUT' : 'POST';
    }
}
