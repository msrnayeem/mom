<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name','description', 'category_id', 'is_visible', 'position'];

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

    /**
     * Get the batches for the course.
     */
    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    /**
     * Get active batches for the course, not admission end date over
     */
    public function activeBatches()
    {
        return $this->batches()->where('admission_end_date', '>', now());
    }
}
