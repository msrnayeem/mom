<?php

use App\Http\Controllers\Teacher\AssignmentController;
use App\Http\Controllers\Teacher\CourseResourceController;
use App\Http\Controllers\Teacher\ProfileController;
use App\Http\Controllers\Teacher\TeacherController;
use App\Http\Middleware\TeacherMiddleware;
use Illuminate\Support\Facades\Route;

Route::middleware(TeacherMiddleware::class)->prefix('teacher')->name('teacher.')->group(function () {
    Route::get('/dashboard', [TeacherController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'myProfile'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/edit', [ProfileController::class, 'updateProfile'])->name('profile.update');

    //enrolled_courses
    Route::get('/my-courses', [TeacherController::class, 'enrolledCourses'])->name('enrolled.courses');

    //course resource
    Route::get('/course-resource/{course}', [CourseResourceController::class, 'view'])->name('course.resource');

    Route::get('/course-resource/create/{course}', [CourseResourceController::class, 'create'])->name('course.resource.create');
    Route::post('/course-resource/store', [CourseResourceController::class, 'store'])->name('course.resource.store');

    Route::get('/files/{course_id}', [CourseResourceController::class, 'getFiles'])->name('files');

    //student in course
    Route::get('/students/{course}', [TeacherController::class, 'studentsInCourse'])->name('course.students');

    Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignment.index');
    Route::get('/assignments/{assignment}', [AssignmentController::class, 'view'])->name('assignment.view');

    Route::get('/assignments/edit/{assignment}', [AssignmentController::class, 'edit'])->name('assignment.edit');
    Route::put('/assignments/update/{assignment}', [AssignmentController::class, 'update'])->name('assignment.update');

    Route::post('/assignments/store', [AssignmentController::class, 'store'])->name('assignment.store');
    Route::post('assignments-file/{assignment}/upload', [AssignmentController::class, 'uploadFileAssignment'])->name('assignment.files.upload');
});

Route::get('/teacherr/assignments/newAssignment', [AssignmentController::class, 'new']
)->name('assignment.new');
