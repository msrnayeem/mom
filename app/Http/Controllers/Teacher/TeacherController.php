<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//enrolled_courses
use App\Models\Course;
use App\Models\Enrollment;

class TeacherController extends Controller
{
    public function index(){
        return view('teacher.pages.index');
    }

    public function enrolledCourses(){

        $courses = Course::where('teacher_id', auth()->user()->id)->get();

        return view('teacher.pages.enrolled_courses', compact('courses'));
    }

    

    public function studentsInCourse(Course $course)
    {
        $course = Course::with('enrollments.student')->find($course->id);

        // Extract students
        $students = $course->enrollments->map(function ($enrollment) {
            return $enrollment->student;
        })->filter(); // Filter out any null values

        return view('teacher.pages.student_in_course', compact('course', 'students'));
    }

}
