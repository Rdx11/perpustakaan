<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    protected $fillable = [
        'loan_number', 'book_code', 'publication_year', 'quantity'
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_number', 'loan_number');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_code', 'book_code');
    }
}
