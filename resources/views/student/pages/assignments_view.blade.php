@extends('student.layouts.student')

@section('content')
<style>
    .card {
        border: none;
        transition: box-shadow 0.3s ease-in-out;
    }
    .card:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
    }
    .btn {
        border-radius: 20px;
    }
    .list-group-item {
        transition: background-color 0.2s ease-in-out;
    }
    .list-group-item:hover {
        background-color: #f8f9fa;
    }
    .custom-file-label::after {
        content: "Browse";
    }
</style>
<div class="container py-5">
    <div class="card shadow-sm p-4">
        <div class="card-header  text-white">
            <h4 class="mb-0">Title : {{ $assignment->title }}</h4>
        </div>
        <div class="card-body">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h5 class="text-muted">Description</h5>
                    <p>{{ $assignment->description }}</p>
                </div>
                <div class="col-md-6">
                    <h5 class="text-muted">Due Date</h5>
                    <p class="font-weight-bold">{{ \Carbon\Carbon::parse($assignment->due_date)->format('F j, Y, g:i a') }}</p>
                </div>
            </div>

            @if($assignment->file_path)
                <div class="mb-4">
                    <h5 class="text-muted">Assignment Details</h5>
                    <a href="{{ asset('storage/' . $assignment->file_path) }}" download class="btn btn-outline-primary">
                        <i class="fas fa-download mr-2"></i> Download Assignment File
                    </a>
                </div>
            @endif

            @if($studentFiles->isNotEmpty())
                <div class="mb-4">
                    <h5 class="text-muted">Your Submissions</h5>
                    <ul class="list-group">
                        @foreach($studentFiles as $file)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $file->original_name }}
                                <a href="{{ asset('storage/' . $file->file_path) }}" download class="btn btn-sm btn-primary">
                                    <i class="fas fa-download mr-1"></i> Download
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @else
                <p class="text-muted">You haven't uploaded any files yet for this assignment.</p>
            @endif

            @if(\Carbon\Carbon::now()->lessThanOrEqualTo(\Carbon\Carbon::parse($assignment->due_date)))
                <div class="alert alert-info" role="alert">
                    <i class="fas fa-info-circle mr-2"></i> You can still submit your work.
                </div>
                <form action="{{ route('student.assignment.files.upload', $assignment) }}" method="POST" enctype="multipart/form-data" class="mt-4">
                    @csrf
                    <div class="form-group">
                        <label for="file" class="h5 text-muted">Upload Your Assignment</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="file" required>
                            <label class="custom-file-label" for="file">Choose file</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-block mt-3" style="width: 100px; height: 50px;" id="submit-button" disabled>
                        <i class="fas fa-upload mr-2"></i> Submit
                    </button>
                </form>
            @else
                <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle mr-2"></i> <strong>Submission Closed:</strong> The due date has passed.
                </div>
            @endif
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    // Custom file input
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);

        // Enable submit button if file is selected
        if ($(this).val()) {
            $("#submit-button").prop("disabled", false);
        } else {
            $("#submit-button").prop("disabled", true);
        }
    });
</script>
@endsection
