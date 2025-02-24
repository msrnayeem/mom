
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
            <div class="col-lg-8">
                <div class="in-progress-course-wrapper  title-between-dashboard mb--10">
                    <h5 class="title">Assignments</h5>
                </div>
                <!-- in progress course area -->
                <table id="messagesTable" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Course</th>
                            <th>Due Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($assignments as $assignment)
                            <tr>
                                <td>{{ $assignment->title }}</td>
                                <td>{{ $assignment->course->name }}</td>
                                <td>{{ $assignment->due_date }}</td>
                                <td>
                                    <a href="{{ route('teacher.assignment.view', $assignment) }}" class="btn btn-info">View</a>
                                </td>
                            </tr>
                        @endforeach
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




