<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\enrollment;
use App\Models\Batch;

use Illuminate\Http\Request;


class EnrollmentController extends Controller
{
    public function store(Request $request, Batch $batch)
    {
        try {
            // Ensure batch is open and admission is not over
            if ($batch->admission_end_date < now()) {
                return redirect()->route('admin.batches.index')->with('error', 'Admissions for this batch have closed.');
            }

            // Check if user is already enrolled
            $user = auth()->user();
            $existingEnrollment = Enrollment::where('user_id', $user->id)->where('batch_id', $batch->id)->first();

            if ($existingEnrollment) {
                return back()->with('error', 'You are already enrolled in this batch.');
            }

            // Enroll the user without payment (payment status is false initially)
            Enrollment::create([
                'user_id' => $user->id,
                'batch_id' => $batch->id,
                'payment_status' => false, // Payment yet to be made
                'enrollment_status' => false, // Not fully enrolled until payment
                'remarks' => 'Enrollment initiated. Awaiting payment.', // Optional remarks
            ]);

            // Update the batch's enrolled count
            $batch->increment('enrolled');

            // Redirect with success message
            return redirect()->route('admin.batches.show', $batch->id)->with('success', 'You have been successfully enrolled. Payment is required to finalize your enrollment.');

        } catch (\Exception $e) {
            // Handle any exceptions that occur
            // Log the error for debugging purposes
            \Log::error('Enrollment failed: ' . $e->getMessage());

            // Redirect with an error message
            return redirect()->route('admin.batches.index')->with('error', 'An error occurred while enrolling. Please try again.');
        }
    }

}
