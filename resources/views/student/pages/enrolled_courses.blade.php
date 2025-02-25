
@extends('student.layouts.student')

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
                                <p>Materials</p>
                            </div>
                            <div class="enroll">
                                <p>Enroll Date</p>
                            </div>
                            <div class="enroll">
                                <p>Payment</p>
                            </div>
                            <div class="enroll">
                                <p>Enrollment Status</p>
                            </div>
                            <div class="enroll">
                                <p>End Date(ETA)</p>
                            </div>
                        </div>

                        @foreach ($enrollments as $enrollment)
                            <div class="single-course-inroll-board">
                                <div class="name">
                                    <p>
                                        {{ $enrollment->course->name }}
                                    </p>
                                </div>
                                <div class="enroll">
                                    <a href="{{ route('student.course.resource', $enrollment) }}">View</a>
                                </div>
                                <div class="enroll">
                                    <p>{{ $enrollment->created_at }}</p>
                                </div>
                                <div class="enroll">
                                    <p>{{ $enrollment->payment_status }}</p>
                                </div>
                                <div class="enroll">
                                    <p>{{ $enrollment->enrollment_status ? 'Confirmed' : 'Not Confirmed' }}</p>
                                </div>
                                <div class="enroll">
                                    <p>{{$enrollment->course->end_date}}</p>
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