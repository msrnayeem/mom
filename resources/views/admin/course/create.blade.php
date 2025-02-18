@extends('admin.layouts.app')

@section('title', 'MOM || New Course')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="{{ asset('summernote/summernote-bs5.css') }}" rel="stylesheet">
    <script src="{{ asset('summernote/summernote-bs5.js') }}"></script>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-1">
                <div class="card-header">
                    <h3 class="card-title">Add New Course</h3>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="card-body p-4">
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('admin.courses.store') }}" method="POST">
                        @csrf
                        <div class="form-group mt-1">
                            <label for="name">Course Name </label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->id }} - {{ $category->name['en'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="teacher_id">Course Teacher</label>
                            <select name="teacher_id" id="teacher_id" class="form-control" required>
                                <option value="">Select teacher</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"
                                        {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->id }} - {{ $teacher->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-4">
                            <label for="course_duration">Course Duration (months)</label>
                            <input type="number" name="course_duration" id="course_duration" class="form-control"
                                value="{{ old('course_duration') }}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="fee">Fee</label>
                            <input type="number" step="100" name="fee" id="fee" class="form-control"
                                value="{{ old('fee') }}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="capacity">Capacity</label>
                            <input type="number" name="capacity" id="capacity" class="form-control"
                                value="{{ old('capacity') }}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control"
                                value="{{ old('start_date') }}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="end_date">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control"
                                value="{{ old('end_date') }}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="admission_end_date">Admission End Date</label>
                            <input type="date" name="admission_end_date" id="admission_end_date" class="form-control"
                                value="{{ old('admission_end_date') }}" required>
                        </div>
                        <div class="form-group mt-4">
                            <label for="description">Course Description</label>
                            <textarea name="description" id="description" class="form-control summernote">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Create</button>
                            <a href="{{ route('admin.courses.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
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
