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
}
