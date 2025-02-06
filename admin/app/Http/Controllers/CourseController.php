<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();

        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|array',
            'name.en' => 'required|string|unique:courses,name->en',
            'name.bn' => 'required|string|unique:courses,name->bn',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
        ]);

        try {
            Course::create([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'is_visible' => $request->has('is_visible') ? $request->is_visible : true,
            ]);

            return redirect()->route('courses.index')->with('success', 'Course created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('success', $e->getMessage());
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $categories = Category::all();

        return view('course.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|array',
            'name.en' => 'required|string',
            'name.bn' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
        ]);

        try {
            $course->update([
                'name' => $request->name,
                'category_id' => $request->category_id,
                'description' => $request->description,
                'is_visible' => $request->has('is_visible') ? $request->is_visible : true,
            ]);

            return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('success', 'Error: ' . $e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        try {
            $course->delete();
            return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('courses.index')->with('success', 'Error: ' . $e->getMessage());
        }
    }
}
