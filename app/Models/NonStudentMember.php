<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NonStudentMember extends Model
{
    protected $primaryKey = 'nonstudent_member_number';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    protected $fillable = [
        'nonstudent_member_number', 'nik', 'name', 'occupation', 'birth_date',
        'address', 'postal_code', 'phone1', 'phone2', 'registration_date', 'user_id'
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
