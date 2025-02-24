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
                            <h1 class="title">Jon Adam</h1>
                            <div class="course-vedio">
                                <div class="single">
                                    <i class="fa-thin fa-book"></i>
                                <span>{{ auth()->user()->courseCount() }}</span>
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