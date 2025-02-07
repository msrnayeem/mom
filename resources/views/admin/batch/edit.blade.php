@extends('admin.layouts.app')

@section('title', 'MOM || Edit Batch')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-1">
                <div class="card-header">
                    <h3 class="card-title">Edit Batch</h3>
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

                    <form action="{{ route('admin.batches.update', $batch) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mt-3">
                            <label for="name_bn">Batch Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ old('name', $batch->name) }}" required>
                        </div>

                        <!-- Course Selection -->
                        <div class="form-group mt-3">
                            <label for="course_id">Course</label>
                            <select name="course_id" id="course_id" class="form-control" required>
                                <option value="">Select a course</option>
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ old('course_id', $batch->course_id) == $course->id ? 'selected' : '' }}>
                                        {{ $course->name['en'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Teacher Selection -->
                        <div class="form-group mt-3">
                            <label for="teacher_id">Teacher</label>
                            <select name="teacher_id" id="teacher_id" class="form-control">
                                <option value="">Select a teacher</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"
                                        {{ old('teacher_id', $batch->teacher_id) == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="batch_duration">Batch Duration (months)</label>
                            <input type="number" name="batch_duration" id="batch_duration" class="form-control"
                                value="{{ old('batch_duration', $batch->batch_duration) }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="fee">Fee</label>
                            <input type="number" step="100" name="fee" id="fee" class="form-control"
                                value="{{ old('fee', $batch->fee) }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="capacity">Capacity</label>
                            <input type="number" name="capacity" id="capacity" class="form-control"
                                value="{{ old('capacity', $batch->capacity) }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control"
                                value="{{ old('start_date', $batch->start_date) }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="end_date">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control"
                                value="{{ old('end_date', $batch->end_date) }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="admission_end_date">Admission End Date</label>
                            <input type="date" name="admission_end_date" id="admission_end_date" class="form-control"
                                value="{{ old('admission_end_date', $batch->admission_end_date) }}" required>
                        </div>

                        <div class="form-group mt-3">
                            <label for="description">Batch Description</label>
                            <textarea name="description" id="description" class="form-control summernote">{{ old('description', $batch->description) }}</textarea>
                        </div>

                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Update</button>
                            <a href="{{ route('admin.batches.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#description').summernote({
                height: 200,
                codemirror: {
                    theme: 'monokai'
                }
            });

            function updateDates() {
                var startDate = $('#start_date').val();
                var batchDuration = $('#batch_duration').val();

                if (!startDate || !batchDuration) return;

                var startDateObj = new Date(startDate);
                var durationMonths = parseInt(batchDuration);

                var endDate = new Date(startDateObj);
                endDate.setMonth(startDateObj.getMonth() + durationMonths);
                $('#end_date').val(endDate.toISOString().split('T')[0]);

                var admissionEndDate = new Date(startDateObj);
                admissionEndDate.setDate(startDateObj.getDate() - 3);
                $('#admission_end_date').val(admissionEndDate.toISOString().split('T')[0]);
            }

            $('#start_date, #batch_duration').on('change', updateDates);

            updateDates();
        });
    </script>
@endsection
