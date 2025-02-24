
@extends('student.layouts.student')

@section('content')
<div class="container">
    <div id="chat-box" class="border p-3" style="height: 300px; overflow-y: scroll;">
        <!-- Messages will appear here -->
    </div>

    <form id="messageForm" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course_id }}">
        <textarea name="content" placeholder="Type a message"></textarea>
        <input type="file" name="file">
        <button type="submit">Send</button>
    </form>
</div>
<script>
    window.course_id = "{{ $course_id }}";
</script>


<script>
   
 
    {!! Vite::content('resources/js/app.js') !!}
    {!! Vite::content('resources/js/chat.js') !!}
   
</script>
@endsection
