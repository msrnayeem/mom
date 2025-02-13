
@extends('admin.layouts.app')

@section('title', 'MOM || Edit Teacher')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Edit Teacher</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.teachers.update', $teacher) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group mt-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $teacher->name) }}" placeholder="Enter name">
                        </div>

                        <div class="form-group mt-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $teacher->email) }}" placeholder="Enter email">
                        </div>

                        <div class="form-group mt-4">
                            <label for="password">New Password (leave blank to keep current password)</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password">
                        </div>

                        <div class="form-group mt-4">
                            <label for="password_confirmation">Re-enter New Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Re-enter new password">
                        </div>

                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Update</button>
                            <a href="{{ route('admin.teachers.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
