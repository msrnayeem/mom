@extends('admin.layouts.app')

@section('title', 'MOM || Course - ' . $course->name['en'])

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Course Details</h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong>Course Name (Bangla):</strong>
                    <p>{{ $course->name['bn'] }}</p>
                </div>

                <div class="mb-3">
                    <strong>Course Name (English):</strong>
                    <p>{{ $course->name['en'] }}</p>
                </div>

                <div class="mb-3">
                    <strong>Category:</strong>
                    <p>{{ $course->category->name['en'] }}</p>
                </div>

                <div class="mb-3">
                    <strong>Created At:</strong>
                    <p>{{ $course->created_at->format('d M Y') }}</p>
                </div>

                <div class="mb-3">
                    <strong>Visibility:</strong>
                    <p>{{ $course->is_visible ? 'Visible' : 'Not Visible' }}</p>
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
