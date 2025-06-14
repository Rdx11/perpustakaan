<?php

namespace App\Http\Requests\Books;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'book_code' => 'required|string|unique:books,book_code',
            'udc_number' => 'required|string|max:100',
            'reg_number' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'publisher' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required|digits:4|integer|min:1000|max:' . (date('Y') + 1),
            'publication_city' => 'required|string|max:100',
            'edition' => 'nullable|string|max:100',
            'language' => 'required|string|max:100',
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
            'book_code.required' => 'Kode buku wajib diisi.',
            'book_code.string'   => 'Kode buku harus berupa teks.',
            'book_code.unique'   => 'Kode buku sudah terdaftar.',

            'udc_number.required' => 'Nomor UDC wajib diisi.',
            'udc_number.string'   => 'Nomor UDC harus berupa teks.',
            'udc_number.max'      => 'Nomor UDC tidak boleh lebih dari 100 karakter.',

            'reg_number.required' => 'Nomor registrasi wajib diisi.',
            'reg_number.string'   => 'Nomor registrasi harus berupa teks.',
            'reg_number.max'      => 'Nomor registrasi tidak boleh lebih dari 100 karakter.',

            'title.required' => 'Judul buku wajib diisi.',
            'title.string'   => 'Judul harus berupa teks.',
            'title.max'      => 'Judul tidak boleh lebih dari 255 karakter.',

            'publisher.required' => 'Nama penerbit wajib diisi.',
            'publisher.string'   => 'Nama penerbit harus berupa teks.',
            'publisher.max'      => 'Nama penerbit tidak boleh lebih dari 255 karakter.',

            'author.required' => 'Nama penulis wajib diisi.',
            'author.string'   => 'Nama penulis harus berupa teks.',
            'author.max'      => 'Nama penulis tidak boleh lebih dari 255 karakter.',

            'publication_year.required' => 'Tahun terbit wajib diisi.',
            'publication_year.digits'   => 'Tahun terbit harus terdiri dari 4 digit.',
            'publication_year.integer'  => 'Tahun terbit harus berupa angka.',
            'publication_year.min'      => 'Tahun terbit tidak valid.',
            'publication_year.max'      => 'Tahun terbit tidak boleh melebihi tahun saat ini.',

            'publication_city.required' => 'Kota terbit wajib diisi.',
            'publication_city.string'   => 'Kota terbit harus berupa teks.',
            'publication_city.max'      => 'Kota terbit tidak boleh lebih dari 100 karakter.',

            'edition.string' => 'Edisi harus berupa teks.',
            'edition.max'    => 'Edisi tidak boleh lebih dari 100 karakter.',

            'language.required' => 'Bahasa wajib diisi.',
            'language.string'   => 'Bahasa harus berupa teks.',
            'language.max'      => 'Bahasa tidak boleh lebih dari 100 karakter.',

            'description.string' => 'Deskripsi harus berupa teks.',

            'isbn.string' => 'ISBN harus berupa teks.',
            'isbn.max'    => 'ISBN tidak boleh lebih dari 50 karakter.',

            'copies.required' => 'Jumlah Eksampler wajib diisi.',
            'copies.integer'  => 'Jumlah Eksampler harus berupa angka.',
            'copies.min'      => 'Jumlah Eksampler minimal adalah 1.',

            'main_subject.string' => 'Subjek utama harus berupa teks.',
            'main_subject.max'    => 'Subjek utama tidak boleh lebih dari 255 karakter.',

            'additional_subject.string' => 'Subjek tambahan harus berupa teks.',
            'additional_subject.max'    => 'Subjek tambahan tidak boleh lebih dari 255 karakter.',

            'synopsis.string' => 'Sinopsis harus berupa teks.',

            'book_cover.image' => 'Cover buku harus berupa file gambar.',
            'book_cover.mimes' => 'Cover buku harus berformat JPG, JPEG, atau PNG.',
            'book_cover.max'   => 'Ukuran file cover buku maksimal 2MB.',
        ];
    }
}
