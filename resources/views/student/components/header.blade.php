<!-- header style one -->
<header class="header-one v-2 header--sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-one-wrapper">
                    <div class="left-side-header">
                        <a href="/" class="logo-area">
                            <img src="{{ asset('MOM-logo-02.jpg') }}" alt="logo" style="width: 144px;">
                        </a>
                        <div class="main-nav-one">
                            <nav>
                                <ul>
                                    <li class="" style="position: static;">
                                        <a class="nav-link" href="{{ route('student.dashboard') }}">Home</a>
                                    </li>
                                    <li class="" style="position: static;">
                                      <a class="nav-link" href="{{ route('student.profile') }}">My Profile</a>
                                  </li>

                                  <li class="" style="position: static;">
                                    <a class="nav-link" href="{{ route('student.enrolled.courses') }}">Enrolled Courses</a>
                                </li>
                                
                                <li class="" style="position: static;">
                                    <a class="nav-link" href="{{ route('student.assignment.index') }}">Assignments({{ auth()->user()->pendingAssignmentsCount() }})</a>
                                </li>
                                <li class="" style="position: static;">
                                  <a class="nav-link" href="#">Setting</a>
                              </li>
                              
                                </ul>
                            </nav>
                        </div>

                    </div>
                    <div class="header-right-area-one">
                        <div class="actions-area">
                            {{-- <div class="search-btn" id="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 22 22" fill="none">
                                    <path
                                        d="M19.9375 18.9652L14.7454 13.7732C15.993 12.2753 16.6152 10.3542 16.4824 8.40936C16.3497 6.46453 15.4722 4.64575 14.0326 3.33139C12.593 2.01702 10.7021 1.30826 8.75326 1.35254C6.8044 1.39683 4.94764 2.19075 3.56924 3.56916C2.19083 4.94756 1.39691 6.80432 1.35263 8.75317C1.30834 10.702 2.0171 12.5929 3.33147 14.0325C4.64584 15.4721 6.46461 16.3496 8.40944 16.4823C10.3543 16.6151 12.2754 15.993 13.7732 14.7453L18.9653 19.9374L19.9375 18.9652ZM2.75 8.93742C2.75 7.71365 3.11289 6.51736 3.79278 5.49983C4.47267 4.4823 5.43903 3.68923 6.56965 3.22091C7.70026 2.7526 8.94436 2.63006 10.1446 2.86881C11.3449 3.10756 12.4474 3.69686 13.3127 4.56219C14.1781 5.42753 14.7674 6.53004 15.0061 7.7303C15.2449 8.93055 15.1223 10.1747 14.654 11.3053C14.1857 12.4359 13.3926 13.4022 12.3751 14.0821C11.3576 14.762 10.1613 15.1249 8.9375 15.1249C7.29703 15.1231 5.72427 14.4706 4.56429 13.3106C3.4043 12.1506 2.75182 10.5779 2.75 8.93742Z"
                                        fill="#553CDF" />
                                </svg>
                            </div> --}}
                            {{-- <div class="cart cart-icon">
                                <i class="fa-regular fa-cart-shopping"></i>
                            </div> --}}
                        </div>
                        <div class="buttons-area">
                            @guest
                                <!-- Display these buttons if the user is not authenticated -->
                                <a href="{{ route('login') }}" class="rts-btn btn-border">Log In</a>
                                <a href="{{ route('register') }}" class="rts-btn btn-primary">Sign Up</a>
                            @endguest
                            
                            @auth
                                <!-- Display this button if the user is authenticated -->
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="rts-btn btn-border">Log Out</button>
                                </form>
                            @endauth                        
                        </div>
                        <div class="menu-btn" id="menu-btn">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                <rect width="20" height="2" fill="#1F1F25"></rect>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header style end -->


<!-- header style two -->
<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    {{-- <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="assets/images/banner/04.jpg" alt="elevate">
        </div>
        <div class="inner-content">
            <h4 class="title">We Build Building and Great Constructive Homes.</h4>
            <p class="disc">
                We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.
            </p>
            <div class="footer">
                <h4 class="title">Got a project in mind?</h4>
                <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
            </div>
        </div>
    </div> --}}
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">
                <li class="">
                    <a href="{{ route('student.dashboard') }}" class="main">Home</a>
                </li>
                <li class="">
                    <a href="{{ route('student.profile') }}" class="main">My Profile</a>
                </li>
                <li class="">
                    <a href="{{ route('student.enrolled.courses') }}" class="main">Enrolled Courses</a>
                </li>
                <li class="">
                    <a class="main" href="{{ route('student.assignment.index') }}">Assignments({{ auth()->user()->pendingAssignmentsCount() }})</a>
                </li>
                <li class="">
                    <a href="#" class="main">Settings</a>
                </li>
            </ul>
        </nav>

        
        <div class="buttons-area">
            @guest
                <a href="{{ route('login') }}" class="rts-btn btn-border">Log In</a>
                <a href="{{ route('register') }}" class="rts-btn btn-primary">Sign Up</a>
            @endguest
            @auth
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-inline" style="display: none;">
                @csrf
            </form>
            
            <a href="#" class="rts-btn btn-primary" onclick="document.getElementById('logout-form').submit(); return false;">
                Log Out
            </a>
            @endauth
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->