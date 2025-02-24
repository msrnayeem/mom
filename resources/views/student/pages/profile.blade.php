@extends('student.layouts.student')

@section('content')
   <style>
   button, .btn {
  width: auto;
}
</style> 
    
     <!-- rts dahboard-area-main-wrapper -->
     <div class="dashboard--area-main pt--100">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
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
