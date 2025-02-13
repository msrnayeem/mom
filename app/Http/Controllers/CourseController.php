<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Models\Batch;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with('activeBatches')->get();

        return view('course.index', compact('courses'));
    }

    public function courseDetails(Course $course, Batch $batch = null)
    {
        //dd($course, $batch);
        // If a batch is provided, ensure it belongs to the given course
        if ($batch && $batch->course_id !== $course->id) {
            return redirect()->route('courses.index')->with('error', 'Invalid batch selection.');
        }

        return view('course.show', compact('course', 'batch'));
    }



    public function batchDetails(Batch $batch)
    {

        // Ensure the batch is active
        if ($batch->admission_end_date < now()) {
            return redirect()->route('courses.index')->with('error', 'This batch is no longer accepting students.');
        }

        // Fetch course related to the batch
       // $course = $batch->course;  // Assuming 'course' is defined as a relationship in the Batch model

        return view('course.batch_show', compact('batch'));
    }
}
