<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

// Route::resource('/category', CategoryController::class)->except(['destroy']);

Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/course-details/{course}/{batch?}', [CourseController::class, 'courseDetails'])->name('course.details');
Route::post('/course/{batch}/enroll', [EnrollmentController::class, 'store'])->name('course.enroll');

Route::get('/course/batch/{batch}', [CourseController::class, 'batchDetails'])->name('course.batch.show');


