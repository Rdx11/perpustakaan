<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $primaryKey = 'loan_number';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'loan_number', 'loan_date', 'return_date', 'member_number',
        'member_type', 'staff_code'
    ];

    protected $casts = [
        'loan_date' => 'datetime',
        'return_date' => 'datetime',
    ];

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'staff_code', 'staff_code');
    }

    public function details()
    {
        return $this->hasMany(LoanDetail::class, 'loan_number', 'loan_number');
    }

    public function bookReturn()
    {
        return $this->hasOne(BookReturn::class, 'loan_number', 'loan_number');
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
