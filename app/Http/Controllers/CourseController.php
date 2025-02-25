<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $courses = Course::visible()->get();

        return view('course.index', compact('courses'));
    }

    public function courseDetails(Course $course)
    {

        // If a batch is provided, ensure it belongs to the given course
        if (! $course) {
            return redirect()->route('course.index')->with('error', 'Invalid batch selection.');
        }

        return view('course.show', compact('course'));
    }
}
