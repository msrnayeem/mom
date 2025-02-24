<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\StudentMiddleware;

use App\Http\Controllers\Student\ProfileController;
use App\Http\Controllers\Student\StudentController;



Route::middleware(StudentMiddleware::class)->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard',[StudentController::class, 'index'] )->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'myProfile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'updateProfile'])->name('profile.update');

    //enrolled_courses
    Route::get('/enrolled-courses', [StudentController::class, 'enrolledCourses'])->name('enrolled.courses');

    //course resource
    Route::get('/course-resource/{enrollment}', [StudentController::class, 'courseResource'])->name('course.resource');
});
