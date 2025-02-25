<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string|min:5',
        ]);

        // Save the feedback in the database
        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        return redirect()->to(url()->previous().'#contact')->with('success', 'আপনার বার্তা সফলভাবে জমা দেওয়া হয়েছে।');
    }
}
