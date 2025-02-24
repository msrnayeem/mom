@extends('student.layouts.student')

@section('content')

    @include('student.components.profile_card')

    <!-- rts dahboard-area-main-wrapper -->
    <div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="right-sidebar-dashboard">
                        <div class="row g-5">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-light fa-book-open-cover"></i>
                                    </div>
                                    <h5 class="title"><span class="counter">{{ auth()->user()->courseCount() }}</span></h5>
                                    <p>Enrolled Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-regular fa-graduation-cap"></i>
                                    </div>
                                    <h5 class="title"><span class="counter">10</span></h5>
                                    <p>Active Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <!-- single dashboard-card -->
                                <div class="single-dashboard-card">
                                    <div class="icon">
                                        <i class="fa-light fa-trophy"></i>
                                    </div>
                                    <h5 class="title"><span class="counter">36</span></h5>
                                    <p>Completed Courses</p>
                                </div>
                                <!-- single dashboard-card end -->
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts dahboard-area-main-wrapper end -->
@endsection
