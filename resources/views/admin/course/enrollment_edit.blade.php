@extends('admin.layouts.app')

@section('title', 'MOM || Enrollment Edit')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card mb-2">
            <div class="card-header">
                <h3 class="card-title">Edit Enrollment for: {{ $enrollment->student->name }}</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Payment Status -->
                    <div class="mb-3">
                        <label for="payment_status" class="form-label">Payment Status</label>
                        <select name="payment_status" id="payment_status" class="form-select">
                            <option value="not_paid" {{ $enrollment->payment_status == 'not_paid' ? 'selected' : '' }}>Not Paid</option>
                            <option value="partial" {{ $enrollment->payment_status == 'partial' ? 'selected' : '' }}>Partial</option>
                            <option value="paid" {{ $enrollment->payment_status == 'paid' ? 'selected' : '' }}>Paid</option>
                        </select>
                    </div>

                    <!-- Enrollment Status -->
                    <div class="mb-3">
                        <label for="enrollment_status" class="form-label">Enrollment Status</label>
                        <select name="enrollment_status" id="enrollment_status" class="form-select">
                            <option value="0" {{ $enrollment->enrollment_status ? '' : 'selected' }}>Awaiting Confirmation</option>
                            <option value="1" {{ $enrollment->enrollment_status ? 'selected' : '' }}>Confirmed</option>
                        </select>
                    </div>

                    <!-- Remarks -->
                    <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <textarea name="remarks" id="remarks" class="form-control" rows="4">{{ old('remarks', $enrollment->remarks) }}</textarea>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update Enrollment</button>
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
