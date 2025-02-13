@extends('admin.layouts.app')

@section('title', 'MOM || Create Teacher')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Create Teacher</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.teachers.store') }}">
                        @csrf

                        <div class="form-group mt-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required
                                placeholder="Enter name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group mt-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                placeholder="Enter email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group mt-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required
                                placeholder="Enter password">
                        </div>

                        <div class="form-group mt-4">
                            <label for="password_confirmation">Re-enter Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control" required placeholder="Re-enter password">
                        </div>

                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-success">Create</button>
                            <a href="{{ route('admin.teachers.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
