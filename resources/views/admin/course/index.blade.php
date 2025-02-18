@extends('admin.layouts.app')

@section('title', 'MOM || All Courses')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Courses</h3>
                    <a href="{{ route('admin.courses.create') }}" class="btn btn-primary btn-sm float-end">
                        Create Course
                    </a>
                </div>
                <!-- /.card-header -->

                @if (session('success'))
                    <div class="card-body p-4">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead class="custom-thead-font-size">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Teacher</th>
                                <th>Duration</th>
                                <th>Fee</th>
                                <th>Capacity</th>
                                <th>Enrolled</th>
                                <th>Admission End Date</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="custom-tbody-font-size">
                            @forelse ($courses as $index => $course)
                                <tr class="align-middle">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $course->name ?? $course->name }}</td>
                                    <td>{{ $course->category->name['en'] ?? 'N/A' }}</td>
                                    <td>{{ $course->teacher ? $course->teacher->name : 'N/A' }}</td>
                                    <td>{{ $course->course_duration }}</td>
                                    <td>{{ $course->fee }}</td>
                                    <td>{{ $course->capacity }}</td>
                                    <td>{{ $course->enrolled }} (<a
                                            href="{{ route('admin.courses.students', $course) }}">View</a>)</td>
                                    <td>{{ $course->admission_end_date }}</td>
                                    <td>{{ $course->start_date }}</td>
                                    <td>{{ $course->end_date }}</td>
                                    <td>
                                        @if ($course->is_open)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.courses.show', $course->id) }}"
                                            class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('admin.courses.edit', $course->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.courses.destroy', $course->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13">
                                        <div class="alert alert-warning">No courses found.</div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- /.card-body -->

                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
