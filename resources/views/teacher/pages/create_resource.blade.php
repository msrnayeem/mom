
@extends('teacher.layouts.teacher')

@section('content')
<style>
    #messagesTable td, #messagesTable th {
    border: 1px solid #dee2e6; /* Adjust border color if needed */
}

</style>

<div class="dashboard--area-main pt--10">
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-lg-8">
                <div class="in-progress-course-wrapper  title-between-dashboard mb--10">
                    <h5 class="title">Upload Content</h5>
                </div>
                @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('teacher.course.resource.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="course_id" class="form-label">Select Course</label>
            <select name="course_id" id="course_id" class="form-control" required>
                
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
              
            </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="file" class="form-label">Upload File (optional)</label>
            <input type="file" name="file" id="file" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
        
    </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>

</script>
@endsection

