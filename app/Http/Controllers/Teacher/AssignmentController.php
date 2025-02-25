<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\AssignmentFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch assignments for the authenticated user as teacher role
        $assignments = auth()->user()->teacherAssignments;

        return view('teacher.pages.assignments', compact('assignments'));
    }

    //view assignments

    public function view(Assignment $assignment)
    {
        // Get all files related to the assignment
        $studentFiles = $assignment->files()->with('user')->get();

        return view('teacher.pages.assignments_view', compact('assignment', 'studentFiles'));
    }

    public function edit(Assignment $assignment)
    {
        $courses = auth()->user()->teacherCourses;

        return view('teacher.pages.assignments_edit', compact('assignment', 'courses'));
    }

    public function update(Request $request, Assignment $assignment)
    {
        // Validate incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:10240',  // Optional file validation
            'course_id' => 'required|exists:courses,id',  // Assuming a Course model with an 'id' column
            'due_date' => 'required|date|after:today',  // Ensure the due date is in the future
        ]);

        // Initialize filePath with the current file_path (in case no new file is uploaded)
        $filePath = $assignment->file_path;

        // If a new file is uploaded, handle the file upload and store it with its original name
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            // Delete previous file if it exists
            if ($assignment->file_path && Storage::disk('public')->exists($assignment->file_path)) {
                Storage::disk('public')->delete($assignment->file_path);
            }

            // Get the original file name
            $originalFileName = $request->file('file')->getClientOriginalName();

            // Store the file with its original name
            $filePath = $request->file('file')->storeAs('assignments_files', $originalFileName, 'public');
        }

        // Update the assignment
        $assignment->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? '',
            'file_path' => $filePath,
            'course_id' => $validated['course_id'],
            'due_date' => $validated['due_date'],
        ]);

        // Redirect to a different page or return a success response
        return redirect()->route('teacher.assignment.index')->with('success', 'Assignment updated successfully!');
    }

    public function new()
    {
        $courses = auth()->user()->teacherCourses;

        return view('teacher.pages.assignments_create', compact('courses'));
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'nullable|file|mimes:pdf,doc,docx|max:10240',  // Optional file validation
            'course_id' => 'required|exists:courses,id',  // Assuming a Course model with an 'id' column
            'due_date' => 'required|date|after:today',  // Ensure the due date is in the future
        ]);

        // If a file is uploaded, handle the file upload and store its original name
        $filePath = null;
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            // Get the original file name
            $originalFileName = $request->file('file')->getClientOriginalName();

            // Store the file with its original name
            $filePath = $request->file('file')->storeAs('assignments_files', $originalFileName, 'public');
        }

        // Create the new assignment
        $assignment = Assignment::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? '',  // Default to empty string if no description is provided
            'file_path' => $filePath,  // Store the file path if a file was uploaded
            'course_id' => $validated['course_id'],
            'due_date' => $validated['due_date'],
        ]);

        // Redirect to a different page or return success response
        return redirect()->route('teacher.assignment.index')->with('success', 'Assignment created successfully!');
    }

    public function uploadFileAssignment(Request $request, Assignment $assignment)
    {
        // Validate the incoming request
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max:10240',  // Allow only PDFs, DOC, and DOCX files with a max size of 10MB
        ]);

        // Get the original file name
        $originalFileName = $request->file('file')->getClientOriginalName();

        // Store the uploaded file with its original name
        $filePath = $request->file('file')->storeAs('assignments_files', $originalFileName, 'public');

        // Use mass assignment to create the AssignmentFile record
        AssignmentFile::create([
            'assignment_id' => $assignment->id,
            'user_id' => auth()->id(),
            'file_path' => $filePath,
            'original_name' => $originalFileName,
        ]);

        return redirect()->route('teacher.assignment.view', $assignment)->with('success', 'Your assignment has been uploaded successfully!');
    }
}
