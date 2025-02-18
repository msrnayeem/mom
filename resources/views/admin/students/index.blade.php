@extends('admin.layouts.app')

@section('title', 'MOM || Students')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <div class="card mb-2">
                <div class="card-header">
                    <h3 class="card-title">Registered Student</h3>
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
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joined At</th>
                                <th>Phone</th> <!-- Add a column for phone -->
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="custom-tbody-font-size">
                            @forelse ($students as $index => $student)
                                <tr class="align-middle">
                                    <td>{{ $index + 1 }}.</td>
                                    <td>
                                        <a href="{{ route('admin.students.show', $student->id) }}">
                                            {{ $student->name }}
                                        </a>
                                    </td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->created_at }}</td>
                                    <td>
                                        @if ($student->student_details && $student->student_details->phone)
                                            {{ $student->student_details->phone }}
                                        @else
                                            Not Available
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">No students available yet.</td>
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
