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
        
        $course = $enrollment->course;
  
    
        return view('student.pages.course_resource', compact('course'));

    }

    public function getFiles($course_id)
    {
        $messages = \App\Models\Message::with('sender')
            ->where('course_id', $course_id)
            ->orderBy('created_at', 'asc')
            ->get();

        // Optionally, you can format the messages for DataTables
        return response()->json($messages);
    }

}
