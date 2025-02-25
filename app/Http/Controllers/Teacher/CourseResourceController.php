<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\courseResource;
use App\Models\Course;

class CourseResourceController extends Controller
{
    public function view(Course $course)
    {
        return view('teacher.pages.course_resource', compact('course'));
    }

    public function create(Course $course)
    {
        return view('teacher.pages.create_resource', compact('course'));
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ]);

        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file'); // Get the file
            $originalFileName = $file->getClientOriginalName(); // Get the original file name
            $filePath = $file->storeAs('course_resources', $originalFileName, 'public'); // Store with the original name
        }

        CourseResource::create([
            'user_id' => auth()->user()->id, // Get logged-in user ID
            'course_id' => $request->course_id,
            'title' => $request->title,
            'content' => $request->description,
            'file_path' => $filePath,
        ]);

       
        return redirect()->route('teacher.course.resource', $request->course_id)
        ->with('success', 'Course resource added successfully.');
    
    }

    // public function courseResource(Enrollment $enrollment){
        
    //     $course_id = $enrollment->course_id;

    //     return view('teacher.pages.course_resource', compact('course_id'));

    // }

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
