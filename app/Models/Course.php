<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //guarded
    public $guared = [];

    // Cast JSON field to an array
    protected $casts = [
        'name' => 'array',
        'description' => 'array',
    ];

    /**
     * Get the category that owns the course.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }



    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    /**
     * Check if the batch is fully enrolled.
     */
    public function isFull()
    {
        return $this->enrolled >= $this->capacity;
    }

    /**
     * check all the enrollments for this batch
     */

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    /**
     * Check if the batch is open for admission.
     */
    public function isOpen()
    {
        return $this->is_open;
    }
}
