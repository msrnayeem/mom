<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseResource extends Model
{
    protected $fillable = ['user_id','course_id', 'content', 'title','file_path'];

    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
