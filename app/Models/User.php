<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'email_verified_at',
        'social_id',
        'provider',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getStudentDetailsAttribute()
    {
        return $this->role === 'student' ? $this->hasOne(Student::class, 'user_id', 'id')->first() : null;
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function courses()
    {
        return $this->hasManyThrough(Course::class, Enrollment::class, 'user_id', 'id', 'id', 'course_id');
    }

    public function teacherCourses()
    {
        return $this->hasMany(Course::class, 'teacher_id'); // 'teacher_id' is the foreign key in the Course table
    }

    public function courseCount()
    {
        return $this->courses()->count();
    }

    public function assignments()
    {
        return $this->hasManyThrough(Assignment::class, Enrollment::class, 'user_id', 'course_id', 'id', 'course_id');
    }

    public function pendingAssignmentsCount()
    {
        return $this->assignments()->where('due_date', '>', now())->count();
    }

    public function teacherAssignments()
    {
        return $this->hasManyThrough(Assignment::class, Course::class, 'teacher_id', 'course_id');
    }
}
