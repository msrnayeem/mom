@extends('admin.layouts.app')

@section('title', 'MOM || New Category')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Add New Category</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf

                        <div class="form-group mt-4">
                            <label for="new_name_bn">Category Name (Bangla)</label>
                            <input type="text" name="name[bn]" id="new_name_bn" class="form-control" required
                                value="{{ old('name.bn') }}" placeholder="Enter category name in Bangla">
                        </div>

                        <div class="form-group mt-4">
                            <label for="new_name_en">Category Name (English)</label>
                            <input type="text" name="name[en]" id="new_name_en" class="form-control" required
                                value="{{ old('name.en') }}" placeholder="Enter category name in English">
                        </div>


                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Create</button>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
                @if ($errors->has('name'))
                    <div class="card-body mt-4">

                        <div class="alert alert-danger mt-2">
                            <ul>
                                @foreach ($errors->get('name') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                @endif

            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
