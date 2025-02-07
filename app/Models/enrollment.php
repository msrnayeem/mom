<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    protected $fillable = [
        'user_id',
        'batch_id',
        'payment_status',
        'enrollment_status',
        'remarks',
    ];

    public function studens()
    {
        return $this->belongsTo(User::class);
    }

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }
}
