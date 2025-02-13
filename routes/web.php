<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/create-user', function () {
    // Create an Admin user
    // $admin = User::create([
    //     'name' => 'Admin 1',
    //     'email' => 'admin11@example.com',
    //     'password' => Hash::make('adminpassword'),  // Hash password
    //     'role' => 'admin',
    // ]);

    // // Create a Teacher user
    // $teacher = User::create([
    //     'name' => 'Teacher 1',
    //     'email' => 'teacher1@example.com',
    //     'password' => Hash::make('teacherpassword'),  // Hash password
    //     'role' => 'teacher',
    // ]);

    // Create a Student user
    for($i = 2; $i <= 10; $i++) {
        $student = User::create([
            'name' => 'Student ' . $i,
            'email' => 'student' . $i . '@example.com',
            'password' => Hash::make('studentpassword'),  // Hash password
            'role' => 'student',
        ]);
    }
    // $student = User::create([
    //     'name' => 'Student 1',
    //     'email' => 'student1@example.com',
    //     'password' => Hash::make('studentpassword'),  // Hash password
    //     'role' => 'student',
    // ]);

    return "Admin, Teacher, and Student users created with";
});

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

