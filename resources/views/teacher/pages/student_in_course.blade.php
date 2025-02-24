@extends('teacher.layouts.teacher')


@section('content')

    <div class="row justify-content-center p-3">
        <div class="col-md-10">
            <!-- /.card -->
            <div class="card mb-2 p-2">
                <div class="card-header">
                    <h3 class="card-title">Student in Course - {{ $course->name }}</h3>
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
                                <th>Enrolled At</th>
                                <th>Payment Status</th>
                                <th>Enrollment Status</th>
                            </tr>
                        </thead>
                        <tbody class="custom-tbody-font-size">
                            @forelse ($course->enrollments as $index => $enrollment)
                                @if ($enrollment->student)
                                    <tr class="align-middle">
                                        <td>{{ $index + 1 }}.</td>
                                        <td>
                                            {{ $enrollment->student->name }}
                                        </td>
                                        <td>{{ $enrollment->student->email }}</td>
                                        <td>{{ $enrollment->enrollment_date }}</td>

                                        <!-- Payment Status -->
                                        <td>
                                                {{ $enrollment->payment_status }}
                                        </td>

                                        <!-- Enrollment Status -->
                                        <td>
                                            <span
                                                class="badge bg-{{ $enrollment->enrollment_status ? 'success' : 'secondary' }}">
                                                {{ $enrollment->enrollment_status ? 'Confirmed' : 'Awaiting Confirmation' }}
                                            </span>
                                        </td>

                                        
                                    </tr>
                                @endif
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No students enrolled yet.</td>
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
