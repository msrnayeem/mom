<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\StudentMiddleware;

use App\Http\Controllers\Student\ProfileController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\AssignmentController;



Route::middleware(StudentMiddleware::class)->prefix('student')->name('student.')->group(function () {
    Route::get('/dashboard',[StudentController::class, 'index'] )->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'myProfile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'updateProfile'])->name('profile.update');

    //enrolled_courses
    Route::get('/enrolled-courses', [StudentController::class, 'enrolledCourses'])->name('enrolled.courses');

    //course resource
    Route::get('/course-resource/{enrollment}', [StudentController::class, 'courseResource'])->name('course.resource');
    Route::get('/files/{course_id}', [StudentController::class, 'getFiles'])->name('files');


    Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignment.index');
    Route::get('/assignments/{assignment}', [AssignmentController::class, 'view'])->name('assignment.view');
    Route::post('assignments-file/{assignment}/upload',[AssignmentController::class, 'uploadFileAssignment'])->name('assignment.files.upload');
});

