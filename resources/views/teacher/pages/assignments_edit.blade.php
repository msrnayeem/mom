@extends('teacher.layouts.teacher')

@section('content')
    <style>
        #messagesTable td,
        #messagesTable th {
            border: 1px solid #dee2e6;
        }

        .error {
            color: red;
            font-size: 0.875em;
        }
    </style>

    <div class="dashboard--area-main pt--10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="in-progress-course-wrapper title-between-dashboard mb--10">
                        <h5 class="title">Edit Assignment</h5>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('teacher.assignment.update', $assignment->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Course Dropdown -->
                        <div class="mb-3">
                            <label for="course_id" class="form-label">Select Course</label>
                            <select name="course_id" id="course_id" class="form-control" required>
                                <option value="">Select Course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ old('course_id', $assignment->course_id) == $course->id ? 'selected' : '' }}>
                                        {{ $course->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('course_id')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Title Input -->
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ old('title', $assignment->title) }}" required>
                            @error('title')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Description Textarea -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control" required>{{ old('description', $assignment->description) }}</textarea>
                            @error('description')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Due Date Input -->
                        <div class="mb-3">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input type="date" name="due_date" id="due_date" class="form-control"
                                value="{{ old('due_date', \Carbon\Carbon::parse($assignment->due_date)->format('Y-m-d')) }}"
                                min="{{ date('Y-m-d') }}" required>
                            @error('due_date')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- File Upload -->
                        <div class="mb-3">
                            <label for="file" class="form-label">Upload File (optional)</label>
                            @if ($assignment->file_path)
                                <div class="mb-2">
                                    <a href="{{ asset('storage/' . $assignment->file_path) }}" target="_blank">View current
                                        file</a>
                                </div>
                            @endif
                            <input type="file" name="file" id="file" class="form-control">
                            @error('file')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update Assignment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script></script>
@endsection
