<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\enrollment;

class EnrollmentController extends Controller
{
    public function edit(Enrollment $enrollment)
    {
        return view('admin.course.enrollment_edit', compact('enrollment'));
    }
}
