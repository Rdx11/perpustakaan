<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\ViewModels\Books\BookFormViewModel;
use App\Http\Requests\Books\{StoreBookRequest, UpdateBookRequest};
use App\Actions\Books\{StoreBookAction, UpdateBookAction, DeleteBookAction};
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $books = Book::latest()->paginate(10);
        return view('pages.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $vm = new BookFormViewModel();
        return view('pages.books.form', compact('vm'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request, StoreBookAction $action): RedirectResponse
    {
        $action->handle($request->validated());
        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book): View
    {
        $vm = new BookFormViewModel($book);
        return view('books.form', compact('vm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book, UpdateBookAction $action): RedirectResponse
    {
        $action->handle($book, $request->validated());
        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book, DeleteBookAction $action): RedirectResponse
    {
        $action->handle($book);

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus.');
    }
}
