@extends('student.layouts.student')

@section('content')
   <style>
   button, .btn {
  width: auto;
}
</style> 
    <!-- dashboard banner area start -->
    <div class="dashboard-banner-area-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashboard-banner-area-start bg_image  student-dashboard">
                        
                        <div class="author-profile-image-and-name">
                            <div class="profile-pic">
                                <img src="{{asset('assets/images/dashboard/04.png')}}" alt="dashboard">
                            </div>
                            <div class="name-desig">
                                <h1 class="title">{{ $profile->name }}</h1>
                                <div class="course-vedio">
                                    <div class="single">
                                        <i class="fa-thin fa-book"></i>
                                        <span>5 Course Enrolled</span>
                                    </div>
                                    <div class="single">
                                        <i class="fa-thin fa-file-certificate"></i>
                                        <span>4 Certificate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dashboard banner area end -->



     <!-- rts dahboard-area-main-wrapper -->
     <div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <div class="left-sindebar-dashboard">
                        <div class="dashboard-left-single-wrapper">
                            <!-- single item -->
                            <a href="{{ route('student.dashboard') }}" class="single-item ">
                                <i class="fa-light fa-house"></i>
                                <p>Dashboard</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-profile.html" class="single-item active">
                                <i class="fa-regular fa-user"></i>
                                <p>My Profile</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-enroll-course.html" class="single-item ">
                                <i class="fa-light fa-graduation-cap"></i>
                                <p>Enrolled Courses</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-wishlist.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bookmark"></i>
                                <p>Wishlist</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-reviews.html" class="single-item ">
                                <i class="fa-regular fa-star"></i>
                                <p>Reviews</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-quiz-attempts.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bullseye-pointer"></i>
                                <p>My Quiz Attempts</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-order-history.html" class="single-item ">
                                <i class="fa-sharp fa-light fa-bag-shopping"></i>
                                <p>Order History</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-question-answer.html" class="single-item ">
                                <i class="fa-regular fa-circle-question"></i>
                                <p>Question & Answer</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="student-calender.html" class="single-item ">
                                <i class="fa-light fa-calendar-days"></i>
                                <p>Calendar</p>
                            </a>
                            <!-- single item end -->
                        </div>
                        <div class="dashboard-left-single-wrapper bbnone mt--40">
                            <h4 class="title mb--5">User</h4>
                            <!-- single item -->
                            <a href="student-settings.html" class="single-item ">
                                <i class="fa-sharp fa-regular fa-gear"></i>
                                <p>Settings</p>
                            </a>
                            <!-- single item end -->
                            <!-- single item -->
                            <a href="index.html" class="single-item">
                                <i class="fa-light fa-right-from-bracket"></i>
                                <p>Logout</p>
                            </a>
                            <!-- single item end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 rts-sticky-column-item">
                    <div class="right-sidebar-my-profile-dash theiaStickySidebar pt--30">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="title mb-0">My Profile</h5>
                            <a href="{{ route('student.profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                        </div>
                        
                        <!-- single My portfolio start-->
                        <div class="my-single-portfolio-dashed">
                            <div class="name">Registration Date</div>
                            <div class="value">{{ $profile->created_at->format('F d, Y h:i a') }}</div>
                        </div>
                        <!-- single My portfolio end-->
                        <!-- single My portfolio start-->
                        <div class="my-single-portfolio-dashed">
                            <div class="name">Name:</div>
                            <div class="value">{{ $profile->name }}</div>
                        </div>
                        <!-- single My portfolio end-->
                        
                        <!-- single My portfolio start-->
                        <div class="my-single-portfolio-dashed">
                            <div class="name">Email:</div>
                            <div class="value">{{ $profile->email }}</div>
                        </div>
                        <!-- single My portfolio end-->
                        
                        <!-- single My portfolio start-->
                        <div class="my-single-portfolio-dashed">
                            <div class="name">Phone Number:</div>
                            <div class="value">{{ $profile->student_details->phone ?? 'Not available' }}</div>
                        </div>
                        <!-- single My portfolio end-->

                        <!-- single My portfolio start-->
                        <div class="my-single-portfolio-dashed">
                            <div class="name">Whatsapp Number:</div>
                            <div class="value">{{ $profile->student_details->whatsapp ?? 'Not available' }}</div>
                        </div>
                        <!-- single My portfolio end-->

                        <!-- single My portfolio start-->
                        <div class="my-single-portfolio-dashed">
                            <div class="name">Address:</div>
                            <div class="value">{{ $profile->student_details->address ?? 'Not available' }}</div>
                        </div>
                        <!-- single My portfolio end-->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- rts dahboard-area-main-wrapper end -->

    <div class="rts-section-gap">

    </div>



    
   
    <!-- rts backto top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- rts backto top end -->

    <!-- offcanvase search -->
    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>
    <!-- offcanvase search -->
    <div id="anywhere-home" class="">
    </div>

@endsection
