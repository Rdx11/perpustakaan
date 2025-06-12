<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookReturn extends Model
{
    protected $primaryKey = 'return_number';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'return_number', 'loan_number', 'member_number', 'member_type',
        'return_date', 'fine', 'staff_code'
    ];

    protected $casts = [
        'return_date' => 'datetime',
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class, 'loan_number', 'loan_number');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_code', 'staff_code');
    }

    public function getMember()
    {
        if ($this->member_type === 'Student') {
            return StudentMember::where('student_member_number', $this->member_number)->first();
        } else {
            return NonStudentMember::where('nonstudent_member_number', $this->member_number)->first();
        }
    }
}
