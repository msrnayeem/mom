@extends('teacher.layouts.teacher')

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
    <style>
        /* Apply borders to all table cells */
        table.table-bordered th,
        table.table-bordered td {
            border: 1px solid #dee2e6 !important;
        }
    </style>

    <div class="container py-5">
        <div class="card shadow-sm p-4">
            <div class="card-header d-flex justify-content-between align-items-center text-white">
                <h4 class="mb-0">Title : {{ $assignment->title }}</h4>
                <a href="{{ route('teacher.assignment.edit', $assignment) }}" class="btn btn-primary">Edit</a>
            </div>

            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5 class="text-muted">Description</h5>
                        <p>{{ $assignment->description }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="text-muted">Due Date</h5>
                        <p class="font-weight-bold">
                            {{ \Carbon\Carbon::parse($assignment->due_date)->format('F j, Y, g:i a') }}</p>
                    </div>
                </div>


                <div class="mb-4">
                    <h5 class="text-muted">Assignment File</h5>
                    @if ($assignment->file_path)
                        <p>File :
                            <a href="{{ asset('storage/' . $assignment->file_path) }}" download
                                class="btn btn-outline-primary">
                                <i class="fas fa-download mr-2"></i> Download
                            </a>
                        </p>
                    @else
                        <p>No file uploaded.</p>
                    @endif
                </div>

                <div class="mb-4">
                    <h5 class="text-muted">Student Submission</h5>

                    @if ($studentFiles->isEmpty())
                        <p>No submission yet.</p>
                    @else
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>Uploaded By</th>
                                    <th>Uploaded At</th>
                                    <th>File Name</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($studentFiles as $file)
                                    <tr>
                                        <td>{{ $file->user->name ?? 'Unknown' }}</td>
                                        <td>{{ $file->created_at->format('d M Y, h:i A') }}</td>
                                        <td>{{ $file->original_name }}</td>
                                        <td>
                                            <a href="{{ asset('storage/' . $file->file_path) }}"
                                                class="btn btn-primary btn-sm" download>
                                                Download
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script></script>
@endsection
