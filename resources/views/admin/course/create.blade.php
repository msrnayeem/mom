@extends('admin.layouts.app')

@section('title', 'MOM || New Course')

@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <div class="card mb-1">
                <div class="card-header">
                    <h3 class="card-title">Add New Course</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('admin.courses.store') }}" method="POST">
                        @csrf

                        <div class="form-group mt-1">
                            <label for="new_name_bn">Course Name (Bangla)</label>
                            <input type="text" name="name[bn]" id="new_name_bn" class="form-control" required>
                        </div>

                        <div class="form-group mt-4">
                            <label for="new_name_en">Course Name (English)</label>
                            <input type="text" name="name[en]" id="new_name_en" class="form-control" required>
                        </div>

                        <!-- Category Selection -->
                        <div class="form-group mt-4">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->id }} - {{ $category->name['en'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-4">
                            <label for="description">Course Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                        </div>

                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Create</button>
                            <a href="{{ route('admin.categories.index') }}" class="btn btn-warning">Cancel</a>
                        </div>
                    </form>

                </div>
                <!-- /.card-body -->
                <div class="card-body mt-4">
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


            </div>
            <!-- /.card -->
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: "Enter course description",
                height: 250,
                codeviewFilter: false,
            });
        });
    </script>

@endsection
