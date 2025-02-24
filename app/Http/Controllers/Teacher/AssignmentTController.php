<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;

use App\Models\Assignment;
use App\Models\AssignmentFile;
use Illuminate\Http\Request;

class AssignmentTController extends Controller
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
