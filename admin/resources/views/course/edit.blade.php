@extends('layouts.app')

@section('title', 'MOM || Course Update')


@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>

    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <div class="card mb-1">
                <div class="card-header">
                    <h3 class="card-title">Update Course</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('courses.update', $course->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mt-1">
                            <label for="new_name_bn">Course Name (Bangla)</label>
                            <input type="text" name="name[bn]" id="new_name_bn" class="form-control" required
                                value="{{ old('name.bn', $course->name['bn']) }}">
                            @if ($errors->has('name.bn'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('name.bn') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="form-group mt-4">
                            <label for="new_name_en">Course Name (English)</label>
                            <input type="text" name="name[en]" id="new_name_en" class="form-control" required
                                value="{{ old('name.en', $course->name['en']) }}">
                            @if ($errors->has('name.en'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('name.en') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Category Selection -->
                        <div class="form-group mt-4">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control" required>
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $course->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->id }} - {{ $category->name['en'] }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('category_id') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="form-group mt-4">
                            <label for="description">Course Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $course->description) }}</textarea>
                            @if ($errors->has('description'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('description') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Update</button>
                            <a href="{{ route('courses.index') }}" class="btn btn-warning">Cancel</a>
                        </div>

                        <!-- Displaying Success or Error Message from Controller -->
                        @if (session('success'))
                            <div class="alert alert-success mt-2">
                                {{ session('success') }}
                            </div>
                        @endif
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
