<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\TeacherMiddleware;

use App\Http\Controllers\Teacher\ProfileController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Controllers\Teacher\AssignmentTController;



Route::middleware(TeacherMiddleware::class)->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/dashboard',[TeacherController::class, 'index'] )->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'myProfile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'updateProfile'])->name('profile.update');

    //enrolled_courses
    Route::get('/my-courses', [TeacherController::class, 'enrolledCourses'])->name('enrolled.courses');

    //course resource
    Route::get('/course-resource/{enrollment}', [TeacherController::class, 'courseResource'])->name('course.resource');
    Route::get('/files/{course_id}', [TeacherController::class, 'getFiles'])->name('files');

    //student in course
    Route::get('/students/{course}', [TeacherController::class, 'studentsInCourse'])->name('course.students');


    Route::get('/assignments', [AssignmentTController::class, 'index'])->name('assignment.index');
    Route::get('/assignments/{assignment}', [AssignmentTController::class, 'view'])->name('assignment.view');
    Route::post('assignments-file/{assignment}/upload',[AssignmentTController::class, 'uploadFileAssignment'])->name('assignment.files.upload');
});

