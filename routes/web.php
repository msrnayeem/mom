<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Route;

Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])
    ->name('social.redirect');

Route::get('auth/{provider}/callback', [SocialAuthController::class, 'handleProviderCallback'])
    ->name('social.callback');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/student.php';
require __DIR__.'/teacher.php';

// Route::resource('/category', CategoryController::class)->except(['destroy']);

Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/course-details/{course}', [CourseController::class, 'courseDetails'])->name('course.details');
Route::post('/course/{course}/enroll', [EnrollmentController::class, 'store'])->name('course.enroll');

Route::get('/', function () {
    return view('public.index');
})->name('home');

Route::get('/details', function () {
    return view('public.details');
})->name('details');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (auth()->user()->role == 'student') {
            return redirect()->route('student.dashboard');
        } elseif (auth()->user()->role == 'teacher') {
            return redirect()->route('teacher.dashboard');
        }
    })->name('dashboard');
});

Route::post('/send-message', [MessageController::class, 'sendMessage'])->middleware('auth');
Route::get('/messages/{course_id}', [MessageController::class, 'getMessages'])->middleware('auth');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
