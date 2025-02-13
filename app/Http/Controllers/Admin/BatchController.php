<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Batch;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view('admin.batch.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        $teachers = User::get();

        return view('admin.batch.create', compact('courses', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'teacher_id' => 'nullable|exists:users,id',
            'batch_duration' => 'required|integer|min:1',
            'fee' => 'required|numeric|min:0',
            'capacity' => 'required|integer|min:1',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after:start_date',
            'admission_end_date' => 'required|date|before:end_date',
            'description' => 'nullable|string',
        ]);

        try {
            // Create a new batch record
            Batch::create([
                'name' => $request->name,
                'course_id' => $request->course_id,
                'teacher_id' => $request->teacher_id,
                'batch_duration' => $request->batch_duration,
                'fee' => $request->fee,
                'capacity' => $request->capacity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'admission_end_date' => $request->admission_end_date,
                'description' => $request->description,
                'is_open' => true,  // Default to true
            ]);

            return redirect()->route('admin.batches.index')->with('success', 'Batch created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.batches.create')
            ->withErrors(['success' => 'Error creating batch: ' . $e->getMessage()])
            ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        $courses = Course::all();        // Get all courses
        $teachers = User::all();      // Get all teachers

        // Return the edit view with batch, courses, and teachers data
        return view('admin.batch.edit', compact('batch', 'courses', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batch $batch)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'teacher_id' => 'nullable|exists:users,id',
            'batch_duration' => 'required|numeric|min:1',
            'fee' => 'required|numeric|min:100',
            'capacity' => 'required|numeric|min:1',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'admission_end_date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        try {

            $batch->update([
                'name' => $request->name,
                'course_id' => $request->course_id,
                'teacher_id' => $request->teacher_id,
                'duration' => $request->batch_duration,
                'fee' => $request->fee,
                'capacity' => $request->capacity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'admission_end_date' => $request->admission_end_date,
                'description' => $request->description,
            ]);

            // Redirect to batches index page with a success message
            return redirect()->route('admin.batches.index')->with('success', 'Batch updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.batches.create')
            ->withErrors(['success' => 'Error creating batch: ' . $e->getMessage()])
            ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        try {
            $batch->delete();
            return redirect()->route('admin.batches.index')->with('success', 'Batch deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.batches.index')->withErrors(['success' => 'Error deleting batch: ' . $e->getMessage()]);
        }
    }

    /**
     * Get all students in a batch
     */
    public function studentsInBatch(Batch $batch)
    {
        $batch = Batch::with('enrollments.student')->find($batch->id);

        // Extract students
        $students = $batch->enrollments->map(function ($enrollment) {
            return $enrollment->student;
        })->filter(); // Filter out any null values

        return view('admin.batch.students', compact('batch', 'students'));
    }


}
