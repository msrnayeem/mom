<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = ['title', 'description', 'file_path', 'course_id', 'due_date'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

   
    public function files()
    {
        return $this->hasMany(AssignmentFile::class);
    }

    public function studentSubmissions()
    {
        return $this->hasMany(AssignmentFile::class)->whereHas('user', function ($query) {
            $query->where('role', 'student');
        });
    }

}
