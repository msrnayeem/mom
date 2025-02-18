@extends('admin.layouts.app')

@section('title', 'MOM || Student Update')

@section('content')
<div class="container py-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Edit Student</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.students.update', $student) }}">
                @csrf
                @method('PUT')
                <!-- Primary Information -->
                <div class="mb-4">
                    <h5 class="mb-3">Primary Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required
                                   value="{{ old('name', $student->name) }}" placeholder="Enter name">
                            @error('name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required
                                   value="{{ old('email', $student->email) }}" placeholder="Enter email">
                            @error('email')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Option to update password -->
                <div class="mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="updatePasswordCheck" name="update_password" value="1"
                               {{ old('update_password') ? 'checked' : '' }}>
                        <label class="form-check-label" for="updatePasswordCheck">Update Password</label>
                    </div>
                </div>
                <div id="passwordFields" style="display: {{ old('update_password') ? 'block' : 'none' }};">
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter new password">
                            @error('password')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Re-enter new password">
                            @error('password_confirmation')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                @if($student->student_details)
                <div class="mb-4">
                    <h5 class="mb-3">Additional Information</h5>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control"
                                   value="{{ old('phone', $student->student_details->phone) }}" placeholder="Enter phone">
                            @error('phone')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="whatsapp" class="form-label">whatsappp</label>
                            <input type="text" name="whatsapp" id="whatsapp" class="form-control"
                                   value="{{ old('whatsapp', $student->student_details->whatsapp) }}" placeholder="Enter whatsappp number">
                            @error('whatsapp')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                   value="{{ old('address', $student->student_details->address) }}" placeholder="Enter address">
                            @error('address')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                @endif

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                    <a href="{{ route('admin.students.index') }}" class="btn btn-warning">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    document.getElementById('updatePasswordCheck').addEventListener('change', function() {
        var passwordFields = document.getElementById('passwordFields');
        passwordFields.style.display = this.checked ? 'block' : 'none';
    });
</script>
@endsection
