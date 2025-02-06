@extends('layouts.app')

@section('title', 'MOM || Edit Category')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- /.card -->
            <div class="card mb-4">
                <div class="card-header">
                    <h3 class="card-title">Edit Category</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.update', $category) }}">
                        @csrf
                        @method('PUT')

                        <!-- Category Name (Bangla) -->
                        <div class="form-group mt-4">
                            <label for="new_name_bn">Category Name (Bangla)</label>
                            <input type="text" name="name[bn]" id="new_name_bn" class="form-control" required
                                value="{{ old('name.bn', $category->name['bn']) }}"
                                placeholder="Enter category name in Bangla">

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

                        <!-- Category Name (English) -->
                        <div class="form-group mt-4">
                            <label for="new_name_en">Category Name (English)</label>
                            <input type="text" name="name[en]" id="new_name_en" class="form-control" required
                                value="{{ old('name.en', $category->name['en']) }}"
                                placeholder="Enter category name in English">

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

                        <!-- Is Visible -->
                        <div class="form-group mt-4">
                            <label for="is_visible">Is Visible</label>
                            <select name="is_visible" id="is_visible" class="form-control">
                                <option value="1"
                                    {{ old('is_visible', $category->is_visible) == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0"
                                    {{ old('is_visible', $category->is_visible) == 0 ? 'selected' : '' }}>No</option>
                            </select>

                            @if ($errors->has('is_visible'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('is_visible') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Position -->
                        <div class="form-group mt-4">
                            <label for="position">Position</label>
                            <input type="number" name="position" class="form-control"
                                value="{{ old('position', $category->position) }}">

                            @if ($errors->has('position'))
                                <div class="alert alert-danger mt-2">
                                    <ul>
                                        @foreach ($errors->get('position') as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="form-group mt-4 text-end">
                            <button type="submit" class="btn btn-info">Update</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-warning">Cancel</a>
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
