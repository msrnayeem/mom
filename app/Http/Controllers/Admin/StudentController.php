<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::where('role', "student")->get();

        return view('admin.students.index', compact('students'));
    }



    /**
     * Display the specified resource.
     */
    public function show(User $student)
    {
        
        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified student.
     */
    public function edit(User $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, User $student)
    {
        // Base validation rules for primary information
        $primaryRules = [
            'name'  => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $student->id,
        ];

        // If password update is requested, add password validation rules
        if ($request->has('update_password')) {
            $primaryRules['password'] = 'required|string|min:8|confirmed';
        }

        $request->validate($primaryRules);

        // Prepare data for primary info update
        $updateData = [
            'name'  => $request->name,
            'email' => $request->email,
        ];

        // If updating password, add hashed password
        if ($request->has('update_password')) {
            $updateData['password'] = Hash::make($request->password);
        }

        $student->update($updateData);

        // Update additional student details only if any additional fields are provided
        if ($student->role === 'student' && ($request->filled('phone') || $request->filled('whatsap') || $request->filled('address'))) {
            $additionalRules = [
                'phone'   => 'nullable|string|max:255',
                'whatsap' => 'nullable|string|max:255',
                'address' => 'nullable|string|max:255',
            ];

            $request->validate($additionalRules);

            if ($student->student_details) {
                $student->student_details->update([
                    'phone'   => $request->phone,
                    'whatsap' => $request->whatsap,
                    'address' => $request->address,
                ]);
            } else {
                \App\Models\Student::create([
                    'user_id' => $student->id,
                    'phone'   => $request->phone,
                    'whatsap' => $request->whatsap,
                    'address' => $request->address,
                ]);
            }
        }

        return redirect()->route('admin.students.index')
                        ->with('success', 'Student updated successfully.');
    }



    /**
     * Remove the specified student from storage.
     */
    public function destroy(User $student)
    {
        $student->delete();

        return redirect()->route('admin.students.index')
                         ->with('success', 'Student deleted successfully.');
    }
}
