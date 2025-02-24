
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
                    <h5 class="title">Uploaded Content</h5>
                </div>
                <!-- in progress course area -->
                <table id="messagesTable" class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sender</th>
                            <th>Message</th>
                            <th>Time</th>
                            <th>Attachment</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- DataTables will populate rows via AJAX -->
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>

    <input type="hidden" id="course_id" value="{{ $course_id }}">




@endsection

@section('scripts')
<script>
    // Define getStudentFiles globally
    function getStudentFiles(courseId) {
        $.ajax({
            url: `/student/files/${courseId}`,
            type: "GET",
            dataType: "json",
            success: function(response) {
                const tableBody = $('#messagesTable tbody');
                tableBody.empty();
                response.forEach(function(file) {
                    const filePath = `/storage/${file.file_path}`;
                    const tableRow = `
                        <tr>
                            <td>${file.sender.name}</td>
                            <td>${file.content}</td>
                            <td>${file.created_at}</td>
                            <td>
                                <a href="${filePath}" download="${file.file_name}">
                                    Download
                                </a>
                            </td>
                        </tr>
                    `;
                    tableBody.append(tableRow);
                });
            },
            error: function(xhr, status, error) {
                console.error("Error fetching student files:", error);
            }
        });
    }

    // Initialize course_id for chat.js
    window.course_id = "{{ $course_id }}";

    //doc ready
    $(document).ready(function() {
        // Fetch student files
        getStudentFiles(window.course_id);
    });
</script>
<script>
    {!! Vite::content('resources/js/app.js') !!}
    {!! Vite::content('resources/js/chat.js') !!}
</script>
@endsection




