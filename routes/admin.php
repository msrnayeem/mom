<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\BatchController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;

// Authentication & Dashboard Routes

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

// Group Admin Routes with Prefix
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/categories', CategoryController::class);
    Route::resource('/courses', CourseController::class);
    Route::resource('/batches', BatchController::class);

    Route::get('/student-in-batch/{batch}', [BatchController::class, 'studentsInBatch'])->name('batches.students');

    Route::resource('students', StudentController::class)->except(['create', 'store']);
    Route::resource('teachers', TeacherController::class);
});
