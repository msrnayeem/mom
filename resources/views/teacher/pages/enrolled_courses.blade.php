@extends('teacher.layouts.teacher')

@section('content')
    
    <!-- rts dahboard-area-main-wrapper -->
    <div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-10">
                    <!-- in progress course area -->
                    <div class="in-progress-course-wrapper  title-between-dashboard mb--10">
                        <h5 class="title">My Courses</h5>
                    </div>
                    <!-- in progress course area end -->
            
                    <!-- my course enroll wrapper -->
                    <div class="my-course-enroll-wrapper-board">
                       
                        <div class="single-course-inroll-board head">
                            <div class="name">
                                <p>Course Name</p>
                            </div>
                            <div class="name">
                                <p>Course Materials</p>
                            </div>
                            <div class="enroll">
                                <p>Start Date</p>
                            </div>
                            
                            <div class="enroll">
                                <p>End Date(ETA)</p>
                            </div>
                            <div class="enroll">
                                <p>Actions</p>
                            </div>
                        </div>

                        @foreach ($courses as $course)
                            <div class="single-course-inroll-board">
                                <div class="name">
                                    <p>{{ $course->name }}</p>
                                </div>
                                <div class="enroll">
                                    <a href="{{ route('teacher.course.resource', $course) }}">View Materials</a>
                                </div>
                                <div class="enroll">
                                    <p>{{ $course->start_date }}</p>
                                </div>
                                
                                <div class="enroll">
                                    <p>{{$course->end_date}}</p>
                                </div>
                                <div class="enroll">
                                    <a href="{{ route('teacher.course.students', $course) }}">View Students ({{ $course->enrolled }})</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- my course enroll wrapper end -->
                </div>
            </div>
            
        </div>
        
    </div>

@endsection