<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'book_code';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'book_code', 'udc_number', 'reg_number', 'title', 'publisher', 'author',
        'publication_year', 'publication_city', 'edition', 'language', 'description',
        'isbn', 'copies', 'main_subject', 'additional_subject', 'synopsis', 'book_cover'
    ];

    public function loanDetails()
    {
        return $this->hasMany(LoanDetail::class, 'book_code', 'book_code');
    }
}
