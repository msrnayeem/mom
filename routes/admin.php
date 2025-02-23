<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\BatchController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\EnrollmentController;

use App\Http\Middleware\AdminMiddleware;

// Authentication & Dashboard Routes

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(AdminMiddleware::class)->name('admin.dashboard');

// Group Admin Routes with Prefix
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/categories', CategoryController::class);
    Route::resource('/courses', CourseController::class);

    Route::get('/student-in-course/{course}', [CourseController::class, 'studentsInCourse'])->name('courses.students');
    Route::get('/enrollments/edit/{enrollment}', [EnrollmentController::class, 'edit'])->name('edit.enrollment');

    Route::resource('students', StudentController::class)->except(['create', 'store']);
    Route::resource('teachers', TeacherController::class);
});
