<?php

namespace App\Http\Controllers;

use App\Models\enrollment;
use App\Models\Course;

use Illuminate\Http\Request;


class EnrollmentController extends Controller
{
    public function store(Request $request, Course $course)
    {
        
        if(!auth()->user() || auth()->user()->role !== 'student'){
            return redirect()->guest(route('login'));
        }
        try {
            
            // Ensure batch is open and admission is not over
            if (!$course->isAdmissionOpen()) {
                return back()->with('error', 'Admissions for this batch have closed.');
            }

            $user = auth()->user();
            
            $existingEnrollment = Enrollment::where('user_id', $user->id)->where('course_id', $course->id)->first();

            if ($existingEnrollment) {
                return back()->with('success', 'You are already enrolled in this batch.');
            }

            // Enroll the user without payment (payment status is false initially)
            Enrollment::create([
                'user_id' => $user->id,
                'course_id' => $course->id,
                'payment_status' => false, // Payment yet to be made
                'enrollment_status' => false, // Not fully enrolled until payment
                'remarks' => 'Enrollment initiated. Awaiting payment.', // Optional remarks
            ]);

            // Update the batch's enrolled count
            $course->increment('enrolled');

            // Redirect with success message
            return redirect()->back()->with('success', 'You have been successfully enrolled. Payment is required to finalize your enrollment.');

        } catch (\Exception $e) {
            // Handle any exceptions that occur
            // Log the error for debugging purposes
            \Log::error('Enrollment failed: ' . $e->getMessage());

            // Redirect with an error message
            return back()->with('success', $e->getMessage());
        }
    }

}
