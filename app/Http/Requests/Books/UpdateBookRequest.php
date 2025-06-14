<?php

namespace App\Http\Requests\Books;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $bookId = $this->route('book')->book_code;

        return [
            'book_code' => 'sometimes|string|unique:books,book_code,' . $bookId . ',book_code',
            'udc_number' => 'nullable|string|max:100',
            'reg_number' => 'nullable|string|max:100',
            'title' => 'required|string|max:255',
            'publisher' => 'nullable|string|max:255',
            'author' => 'nullable|string|max:255',
            'publication_year' => 'nullable|digits:4|integer|min:1000|max:' . (date('Y') + 1),
            'publication_city' => 'nullable|string|max:100',
            'edition' => 'nullable|string|max:100',
            'language' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'isbn' => 'nullable|string|max:50',
            'copies' => 'required|integer|min:1',
            'main_subject' => 'nullable|string|max:255',
            'additional_subject' => 'nullable|string|max:255',
            'synopsis' => 'nullable|string',
            'book_cover' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul buku tidak boleh kosong.',
            'copies.required' => 'Jumlah salinan wajib diisi.',
            'book_cover.image' => 'File sampul harus berupa gambar.',
        ];
    }
}
