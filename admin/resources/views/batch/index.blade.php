@extends('layouts.app')

@section('title', 'MOM || All Batches')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Batches</h3>
                    <a href="{{ route('batches.create') }}" class="btn btn-primary btn-sm float-end">
                        Create Batch
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
                                <th>Course</th>
                                <th>Ustad</th>
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
                            @forelse ($batches as $index => $batch)
                                <tr class="align-middle">
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $batch->name }}</td>
                                    <td>{{ $batch->course->name['en'] }}</td>
                                    <td>{{ $batch->teacher ? $batch->teacher->name : 'N/A' }}</td>
                                    <td>{{ $batch->capacity }}</td>
                                    <td>{{ $batch->enrolled }}</td>
                                    <td> {{ $batch->admission_end_date }}</td>
                                    <td>{{ $batch->start_date }}</td>
                                    <td>{{ $batch->end_date }} </td>
                                    <td>
                                        @if ($batch->is_open)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('batches.show', $batch->id) }}"
                                            class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('batches.edit', $batch->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('batches.destroy', $batch->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-warning">No batches found.</div>
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
