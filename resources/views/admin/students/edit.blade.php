@extends('admin.layouts.app')

@section('title', 'MOM || Student edit')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Edit Student</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.students.update', $student) }}">
                        @csrf
                        @method('PUT')

                        <!-- Category Name (Bangla) -->
                        <div class="form-group mt-4">
                            <label for="new_name_bn">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required
                                value="{{ old('name', $student->name) }}" placeholder="Enter  name">

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

                        {{-- email --}}
                        <div class="form-group mt-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                value="{{ old('email', $student->email) }}" placeholder="Enter email">

                            @if ($errors->has('email'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('email') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Update</button>
                            <a href="{{ route('admin.students.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->


            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
