<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'is_visible',
        'is_open',
        'teacher_id',
        'course_duration',
        'fee',
        'capacity',
        'enrolled',
        'admission_end_date',
        'start_date',
        'end_date',
    ];

    // Cast JSON field to an array
    protected $casts = [
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
