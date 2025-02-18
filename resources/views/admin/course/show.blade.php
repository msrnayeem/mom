@extends('admin.layouts.app')

@section('title', 'MOM || Course - ' . $course->name)

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Course Details</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Course Name</strong>
                    <p>{{ $course->name }}</p>
                </div>
                <div class="mb-3">
                    <strong>Category:</strong>
                    <p>{{ $course->category->name['en'] }}</p>
                </div>
                @if ($course->teacher)
                    <div class="mb-3">
                        <strong>Teacher:</strong>
                        <p>{{ $course->teacher->name }}</p>
                    </div>
                @endif
                <div class="mb-3">
                    <strong>Course Duration (months):</strong>
                    <p>{{ $course->course_duration }}</p>
                </div>
                <div class="mb-3">
                    <strong>Fee:</strong>
                    <p>{{ $course->fee }}</p>
                </div>
                <div class="mb-3">
                    <strong>Capacity:</strong>
                    <p>{{ $course->capacity }}</p>
                </div>
                <div class="mb-3">
                    <strong>Enrolled:</strong>
                    <p>{{ $course->enrolled }}</p>
                </div>
                <div class="mb-3">
                    <strong>Start Date:</strong>
                    <p>{{ \Carbon\Carbon::parse($course->start_date)->format('d M Y') }}</p>
                </div>
                <div class="mb-3">
                    <strong>End Date:</strong>
                    <p>{{ \Carbon\Carbon::parse($course->end_date)->format('d M Y') }}</p>
                </div>
                <div class="mb-3">
                    <strong>Admission End Date:</strong>
                    <p>{{ \Carbon\Carbon::parse($course->admission_end_date)->format('d M Y') }}</p>
                </div>
                <div class="mb-3">
                    <strong>Visibility:</strong>
                    <p>{{ $course->is_visible ? 'Visible' : 'Not Visible' }}</p>
                </div>
                <div class="mb-3">
                    <strong>Status:</strong>
                    <p>{{ $course->is_open ? 'Open for Admission' : 'Closed for Admission' }}</p>
                </div>
                <div class="mb-3">
                    <strong>Created At:</strong>
                    <p>{{ $course->created_at->format('d M Y') }}</p>
                </div>
                <div class="mb-3">
                    <strong>Description:</strong>
                    @if (is_array($course->description))
                        <pre>{{ print_r($course->description, true) }}</pre>
                    @else
                        <div>{!! $course->description !!}</div>
                    @endif
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Back to Courses</a>
                    <a href="{{ route('admin.courses.edit', $course) }}" class="btn btn-primary">Edit Course</a>
                </div>
            </div>
        </div>
    </div>
@endsection
