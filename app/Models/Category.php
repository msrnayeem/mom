<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'is_visible', 'position'];

    // Cast JSON field to an array
    protected $casts = [
        'name' => 'array',
    ];

    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }

    /**
     * Get the courses for the category.
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    /**
     * Get the next position to use.
     *
     * @return int
     */
    public static function getNextPosition()
    {
        return self::max('position') + 1;
    }

    /**
     * Automatically set the position before creating a new category.
     */
    protected static function booted()
    {
        static::creating(function ($category) {
            // Set the position if not already set
            if (! $category->position) {
                $category->position = self::getNextPosition();
            }
        });
    }
}
