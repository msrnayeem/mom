<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();

        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $teachers = User::where('role', 'teacher')->get();

        return view('admin.course.create', compact('categories', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:courses,name',
            'category_id' => 'required|exists:categories,id',
            'teacher_id' => 'required|exists:users,id',
            'description' => 'required|string',
            'course_duration' => 'required|integer|min:1',
            'fee' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
            'admission_end_date' => 'required|date|before:end_date',
        ]);

        try {
            Course::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'teacher_id' => $request->teacher_id ?? null,
                'description' => $request->description,
                'course_duration' => $request->course_duration,
                'fee' => $request->fee,
                'capacity' => $request->capacity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'admission_end_date' => $request->admission_end_date,
                'is_visible' => true,
                'is_open' => true,
            ]);

            return redirect()->route('admin.courses.index')->with('success', 'Course created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.courses.create')
                ->withErrors(['error' => 'Error creating course: '.$e->getMessage()])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        $teachers = User::where('role', 'teacher')->get();

        return view('admin.course.edit', compact('course', 'categories', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|unique:courses,name,'.$course->id,
            'category_id' => 'required|exists:categories,id',
            'teacher_id' => 'required|exists:users,id',
            'course_duration' => 'required|integer|min:1',
            'fee' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'admission_end_date' => 'required|date|before:end_date',
            'description' => 'required|string',
        ]);

        try {
            $course->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'teacher_id' => $request->teacher_id,
                'course_duration' => $request->course_duration,
                'fee' => $request->fee,
                'capacity' => $request->capacity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'admission_end_date' => $request->admission_end_date,
                'description' => $request->description,
                'is_visible' => $request->has('is_visible') ? $request->is_visible : true,
            ]);

            return redirect()->route('admin.courses.index')->with('success', 'Course updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.courses.index')->with('error', 'Error: '.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        try {
            $course->delete();

            return redirect()->route('admin.courses.index')->with('success', 'Course deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.courses.index')->with('success', 'Error: '.$e->getMessage());
        }
    }

    public function studentsInCourse(Course $course)
    {
        $course = Course::with('enrollments.student')->find($course->id);

        // Extract students
        $students = $course->enrollments->map(function ($enrollment) {
            return $enrollment->student;
        })->filter(); // Filter out any null values

        return view('admin.course.students', compact('course', 'students'));
    }
}
