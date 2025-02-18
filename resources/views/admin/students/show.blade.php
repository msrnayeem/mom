@extends('admin.layouts.app')

@section('title', 'MOM || Student Details')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-2">
            <div class="card-header">
                <h3 class="card-title mb-0 d-inline-block">Student Details</h3>
                <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-warning btn-sm float-end">Edit</a>
            </div>            
            
            @if (session('success'))
                <div class="card-body p-4">
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="card-body">
                <div class="row">
                    <!-- Primary User Information -->
                    <div class="col-md-6">
                        <h5 class="mb-3">Primary Information</h5>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>Name:</strong> {{ $student->name }}
                            </li>
                            <li class="list-group-item">
                                <strong>Email:</strong> {{ $student->email }}
                            </li>
                            <li class="list-group-item">
                                <strong>Role:</strong> {{ ucfirst($student->role) }}
                            </li>
                            <li class="list-group-item">
                                <strong>Joined:</strong> {{ $student->created_at->format('d M Y') }}
                            </li>
                        </ul>
                    </div>
                    <!-- Student Additional Details -->
                    <div class="col-md-6">
                        <h5 class="mb-3">Additional Details</h5>
                        @if($student->student_details)
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <strong>Phone:</strong> {{ $student->student_details->phone }}
                                </li>
                                <li class="list-group-item">
                                    <strong>WhatsApp:</strong> {{ $student->student_details->whatsap }}
                                </li>
                                <li class="list-group-item">
                                    <strong>Address:</strong> {{ $student->student_details->address }}
                                </li>
                            </ul>
                        @else
                            <div class="alert alert-warning">
                                Student details not available.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
