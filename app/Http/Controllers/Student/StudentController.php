<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//enrolled_courses
use App\Models\Course;
use App\Models\Enrollment;

class StudentController extends Controller
{
    public function index(){
        return view('student.pages.index');
    }

    public function enrolledCourses(){

        $enrollments = auth()->user()->enrollments;

        return view('student.pages.enrolled_courses', compact('enrollments'));
    }

    public function courseResource(Enrollment $enrollment){
        
        $course = Course::find($enrollment->course_id);

    }
}
