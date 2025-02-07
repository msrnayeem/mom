<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'name',
        'course_id',
        'teacher_id',
        'batch_duration',
        'fee',
        'description',
        'capacity',
        'enrolled',
        'admission_end_date',
        'start_date',
        'end_date',
        'is_open',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
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
