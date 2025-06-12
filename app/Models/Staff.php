<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $primaryKey = 'staff_code';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['staff_code', 'name', 'position', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function returns()
    {
        return $this->hasMany(BookReturn::class);
    }
}
