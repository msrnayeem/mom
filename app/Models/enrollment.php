<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'user_id',
        'batch_id',
        'payment_status',
        'enrollment_status',
        'remarks',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }



    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
