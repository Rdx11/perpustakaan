<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentMember extends Model
{
    protected $primaryKey = 'student_member_number';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'student_member_number', 'nimnis', 'name', 'school_origin', 'birth_date',
        'address', 'postal_code', 'phone1', 'phone2', 'registration_date',
        'parent_name', 'parent_address', 'parent_phone', 'user_id'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'registration_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
