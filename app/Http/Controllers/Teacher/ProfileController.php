<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Teacher;

class ProfileController extends Controller
{
    public function myProfile(){
        
        $profile = auth()->user();

        return view('teacher.pages.profile', compact('profile'));
    }

    public function editProfile(){
        
        $profile = auth()->user();

        return view('teacher.pages.edit_profile', compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        
        $student = auth()->user();

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
        if ($student->role === 'student' && ($request->filled('phone') || $request->filled('whatsapp') || $request->filled('address'))) {
            $additionalRules = [
                'phone'   => 'nullable|string|max:255',
                'whatsapp' => 'nullable|string|max:255',
                'address' => 'nullable|string|max:255',
            ];

            $request->validate($additionalRules);

            if ($student->student_details) {
                $student->student_details->update([
                    'phone'   => $request->phone,
                    'whatsapp' => $request->whatsapp,
                    'address' => $request->address,
                ]);
            } else {
                Student::create([
                    'user_id' => $student->id,
                    'phone'   => $request->phone,
                    'whatsapp' => $request->whatsapp,
                    'address' => $request->address,
                ]);
            }
        }

        return redirect()->route('teacher.profile')->with('success', 'Profile updated successfully.');
    }

    public function updatee(Request $request, User $student)
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
                Student::create([
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
}
