
@extends('teacher.layouts.teacher')

@section('content')
<style>
    #messagesTable td, #messagesTable th {
    border: 1px solid #dee2e6; /* Adjust border color if needed */
}

</style>

<div class="dashboard--area-main pt--10">
    <div class="container">
        <div class="row  justify-content-center">
            @if (session('success'))
            <div class="col-lg-8">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
            @endif
            <div class="col-lg-8">
                <div class="in-progress-course-wrapper  title-between-dashboard mb--10">
                    <h5 class="title">Uploaded Content</h5>
                    <a href="{{ route('teacher.course.resource.create', $course) }}" class="btn btn-primary">Upload Content</a>
                </div>
                <!-- in progress course area -->
                <table id="messagesTable" class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Attachment</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($course->resources->count() > 0)
                            @foreach ($course->resources as $resource)
                                <tr>
                                    <td>{{ $resource->title }}</td>
                                    <td>{{ $resource->content }}</td>
                                    <td><a href="{{ asset('storage/'.$resource->file_path) }}" download>Download</a></td>
                                    <td>{{ $resource->created_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">No resources uploaded yet</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>

</script>
@endsection




