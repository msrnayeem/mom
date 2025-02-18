@extends('admin.layouts.app')

@section('title', 'MOM || Course Update')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{ asset('summernote/summernote-bs5.css') }}" rel="stylesheet">
    <script src="{{ asset('summernote/summernote-bs5.js') }}"></script>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-1">
                <div class="card-header">
                    <h3 class="card-title">Update Course</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.courses.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mt-1">
                            <label for="name">Course Name</label>
                            <input type="text" name="name" id="name" class="form-control" required
                                value="{{ old('name', $course->name) }}">
                            @if ($errors->has('name'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('name') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Category Selection -->
                        <div class="form-group mt-4">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->id }} - {{ $category->name['en'] }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('category_id') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Teacher Selection -->
                        <div class="form-group mt-4">
                            <label for="teacher_id">Course Teacher</label>
                            <select name="teacher_id" id="teacher_id" class="form-control" required>
                                <option value="">Select teacher</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"
                                        {{ old('teacher_id', $course->teacher_id) == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->id }} - {{ $teacher->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('teacher_id'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('teacher_id') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Course Duration -->
                        <div class="form-group mt-4">
                            <label for="course_duration">Course Duration (months)</label>
                            <input type="number" name="course_duration" id="course_duration" class="form-control" required
                                value="{{ old('course_duration', $course->course_duration) }}">
                            @if ($errors->has('course_duration'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('course_duration') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Fee -->
                        <div class="form-group mt-4">
                            <label for="fee">Fee</label>
                            <input type="number" step="100" name="fee" id="fee" class="form-control" required
                                value="{{ old('fee', $course->fee) }}">
                            @if ($errors->has('fee'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('fee') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Capacity -->
                        <div class="form-group mt-4">
                            <label for="capacity">Capacity</label>
                            <input type="number" name="capacity" id="capacity" class="form-control" required
                                value="{{ old('capacity', $course->capacity) }}">
                            @if ($errors->has('capacity'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('capacity') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Start Date -->
                        <div class="form-group mt-4">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" required
                                value="{{ old('start_date', $course->start_date) }}">
                            @if ($errors->has('start_date'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('start_date') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- End Date -->
                        <div class="form-group mt-4">
                            <label for="end_date">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" required
                                value="{{ old('end_date', $course->end_date) }}">
                            @if ($errors->has('end_date'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('end_date') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Admission End Date -->
                        <div class="form-group mt-4">
                            <label for="admission_end_date">Admission End Date</label>
                            <input type="date" name="admission_end_date" id="admission_end_date" class="form-control"
                                required value="{{ old('admission_end_date', $course->admission_end_date) }}">
                            @if ($errors->has('admission_end_date'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('admission_end_date') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Course Description -->
                        <div class="form-group mt-4">
                            <label for="description">Course Description</label>
                            <textarea name="description" id="description" class="form-control summernote" required>{{ old('description', $course->description) }}</textarea>
                            @if ($errors->has('description'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('description') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Update</button>
                            <a href="{{ route('admin.courses.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success mt-2">
                                {{ session('success') }}
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Enter course description",
                height: 250,
                codeviewFilter: false
            });

            function updateDates() {
                var startDate = $('#start_date').val();
                var courseDuration = $('#course_duration').val();
                if (!startDate || !courseDuration) return;
                var startDateObj = new Date(startDate);
                var durationMonths = parseInt(courseDuration);
                var endDate = new Date(startDateObj);
                endDate.setMonth(startDateObj.getMonth() + durationMonths);
                $('#end_date').val(endDate.toISOString().split('T')[0]);
                var admissionEndDate = new Date(startDateObj);
                admissionEndDate.setDate(startDateObj.getDate() - 3);
                $('#admission_end_date').val(admissionEndDate.toISOString().split('T')[0]);
            }
            $('#start_date, #course_duration').on('change', updateDates);
            updateDates();
        });
    </script>
@endsection
