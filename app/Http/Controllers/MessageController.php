<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'content' => 'nullable|string',
            'file' => 'nullable|file|max:2048', // Max 2MB file
        ]);

        try {
            $filePath = null;
            $fileUrl = null;
            $originalFileName = null;

            // Handle file upload
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $originalFileName = $file->getClientOriginalName(); // Format: userID_timestamp_filename
                $filePath = $file->storeAs('messages', $originalFileName, 'public'); // Store with custom filename
                $fileUrl = asset('storage/'.$filePath); // Generate public URL
            }

            // Save message
            $message = Message::create([
                'user_id' => auth()->id(),
                'course_id' => $request->course_id,
                'content' => $request->content,
                'file_name' => $originalFileName, // Store original filename
                'file_path' => $filePath, // Store path
            ]);

            // Broadcast event
            broadcast(new NewMessage($message))->toOthers();

            return response()->json([
                'message' => $message,
                'file_url' => $fileUrl, // Send the accessible URL
                'original_file_name' => $originalFileName, // Include original filename
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Message could not be sent.'], 500);
        }
    }

    public function getMessages($course_id)
    {
        return Message::with('sender')->where('course_id', $course_id)->get();
    }
}
