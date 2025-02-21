@extends('layouts.front')

@section('content')
    
    <!-- rts-top-category -->
    <div class="top-category-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-area-center-style">
                        <div class="pre-title">
                            <img src="assets/images/banner/bulb.png" alt="icon">
                            <span>Top Category</span>
                        </div>
                        <h2 class="title">Explore 2000+ Free Online Courses</h2>
                        <p class="post-title">You'll find something to spark your curiosity and enhance</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single course category -->
                    <a href="course-one.html" class="single-category-2">
                        <div class="icon">
                            <img src="assets/images/category/01.svg" alt="category">
                        </div>
                        <div class="information">
                            <h5 class="title">Development</h5>
                            <p>130+ Courses</p>
                        </div>
                    </a>
                    <!-- single course category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single course category -->
                    <a href="course-one.html" class="single-category-2">
                        <div class="icon">
                            <img src="assets/images/category/02.svg" alt="category">
                        </div>
                        <div class="information">
                            <h5 class="title">Academics</h5>
                            <p>230+ Courses </p>
                        </div>
                    </a>
                    <!-- single course category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single course category -->
                    <a href="course-one.html" class="single-category-2">
                        <div class="icon">
                            <img src="assets/images/category/03.svg" alt="category">
                        </div>
                        <div class="information">
                            <h5 class="title">Business</h5>
                            <p>140+ Courses</p>
                        </div>
                    </a>
                    <!-- single course category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single course category -->
                    <a href="course-one.html" class="single-category-2">
                        <div class="icon">
                            <img src="assets/images/category/04.svg" alt="category">
                        </div>
                        <div class="information">
                            <h5 class="title">Photography</h5>
                            <p>130+ Courses</p>
                        </div>
                    </a>
                    <!-- single course category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single course category -->
                    <a href="course-one.html" class="single-category-2">
                        <div class="icon">
                            <img src="assets/images/category/05.svg" alt="category">
                        </div>
                        <div class="information">
                            <h5 class="title">Marketing</h5>
                            <p>330+ Courses</p>
                        </div>
                    </a>
                    <!-- single course category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single course category -->
                    <a href="course-one.html" class="single-category-2">
                        <div class="icon">
                            <img src="assets/images/category/06.svg" alt="category">
                        </div>
                        <div class="information">
                            <h5 class="title">Design & Art</h5>
                            <p>110+ Courses</p>
                        </div>
                    </a>
                    <!-- single course category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single course category -->
                    <a href="course-one.html" class="single-category-2">
                        <div class="icon">
                            <img src="assets/images/category/07.svg" alt="category">
                        </div>
                        <div class="information">
                            <h5 class="title">Music & Dance</h5>
                            <p>60+ Courses</p>
                        </div>
                    </a>
                    <!-- single course category end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single course category -->
                    <a href="course-one.html" class="single-category-2">
                        <div class="icon">
                            <img src="assets/images/category/08.svg" alt="category">
                        </div>
                        <div class="information">
                            <h5 class="title">Accounting</h5>
                            <p>150+ Courses</p>
                        </div>
                    </a>
                    <!-- single course category end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts-top-category end -->

    
    <!-- course area start -->
    <div class="course-area-two rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area align-items-end">
                        <div class="title-area-left-style">
                            <div class="pre-title">
                                <img src="assets/images/banner/bulb.png" alt="icon">
                                <span>Courses</span>
                            </div>
                            <h2 class="title mb--5">Explore Featured Courses</h2>
                            <p class="disc">
                                You'll find something to spark your curiosity and enhance
                            </p>
                        </div>
                        <a href="#" class="rts-btn with-arrow p-0">View All Course <i
                                class="fa-light fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="swiper mySwiper-category-1 swiper-float-right-course swiper-data"
                    data-swiper='{
                    "spaceBetween":30,
                    "slidesPerView":4,
                    "loop": true,
                    "autoplay":{
                        "delay":"2000"
                    },
                    "navigation":{
                        "nextEl":".swiper-button-next",
                        "prevEl":".swiper-button-prev"
                    },
                    "pagination":{
                        "el": ".swiper-pagination",
                        "clickable": "true"
                    },
                    "breakpoints":{
                    "320":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "420":{
                        "slidesPerView":1,
                        "spaceBetween":30},
                    "500":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "740":{
                        "slidesPerView":2,
                        "spaceBetween":30},
                    "940":{
                        "slidesPerView":3,
                        "spaceBetween":30},
                    "1240":{
                        "slidesPerView":4,
                        "spaceBetween":30}
                    }
                }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- single course style two -->
                            <div class="rts-single-course">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/01.jpg" alt="course">
                                </a>
                                <div class="save-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-login">
                                    <i class="fa-sharp fa-light fa-bookmark"></i>
                                </div>
                                <div class="tags-area-wrapper">
                                    <div class="single-tag">
                                        <span>Web Development</span>
                                    </div>
                                </div>
                                <div class="lesson-studente">
                                    <div class="lesson">
                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                        <span>25 Lessons</span>
                                    </div>
                                    <div class="lesson">
                                        <i class="fa-light fa-user-group"></i>
                                        <span>54 Students</span>
                                    </div>
                                </div>
                                <a href="single-course.html">
                                    <h5 class="title">The Complete Web Developer in
                                        2023: Zero to Mastery</h5>
                                </a>
                                <p class="teacher">Dr. Angela Yu</p>
                                <div class="rating-and-price">
                                    <div class="rating-area">
                                        <span>4.5</span>
                                        <div class="stars">
                                            <ul>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="price-area">
                                        <div class="not price">
                                            $79.99
                                        </div>
                                        <div class="price">
                                            $79.99
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single course style two end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- rts single course -->
                            <div class="rts-single-course">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/02.jpg" alt="course">
                                </a>
                                <div class="save-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-login">
                                    <i class="fa-sharp fa-light fa-bookmark"></i>
                                </div>
                                <div class="tags-area-wrapper">
                                    <div class="single-tag">
                                        <span>Marketing</span>
                                    </div>
                                    <div class="single-tag">
                                        <span>Finance</span>
                                    </div>
                                </div>
                                <div class="lesson-studente">
                                    <div class="lesson">
                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                        <span>22 Lessons</span>
                                    </div>
                                    <div class="lesson">
                                        <i class="fa-light fa-user-group"></i>
                                        <span>60 Students</span>
                                    </div>
                                </div>
                                <a href="single-course.html">
                                    <h5 class="title">How to Write the Ultimate 1 Page
                                        Strategic Business Plan</h5>
                                </a>
                                <p class="teacher">William U. Peña, MBA</p>
                                <div class="rating-and-price">
                                    <div class="rating-area">
                                        <span>4.5</span>
                                        <div class="stars">
                                            <ul>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="price-area">
                                        <div class="price">
                                            $79.99
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rts single course end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- rts single course -->
                            <div class="rts-single-course">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/03.jpg" alt="course">
                                </a>
                                <div class="save-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-login">
                                    <i class="fa-sharp fa-light fa-bookmark"></i>
                                </div>
                                <div class="tags-area-wrapper">
                                    <div class="single-tag">
                                        <span>Web Development</span>
                                    </div>
                                </div>
                                <div class="lesson-studente">
                                    <div class="lesson">
                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                        <span>23 Lessons</span>
                                    </div>
                                    <div class="lesson">
                                        <i class="fa-light fa-user-group"></i>
                                        <span>40 Students</span>
                                    </div>
                                </div>
                                <a href="single-course.html">
                                    <h5 class="title">100 Days Of Code - 2023 Web
                                        Development Bootcamp</h5>
                                </a>
                                <p class="teacher">Dr. Angela Yu</p>
                                <div class="rating-and-price">
                                    <div class="rating-area">
                                        <span>4.5</span>
                                        <div class="stars">
                                            <ul>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="price-area">
                                        <div class="not price">
                                            $79.99
                                        </div>
                                        <div class="price">
                                            $79.99
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rts single course end -->
                        </div>
                        <div class="swiper-slide">
                            <!-- rts single course -->
                            <div class="rts-single-course">
                                <a href="single-course.html" class="thumbnail">
                                    <img src="assets/images/course/04.jpg" alt="course">
                                </a>
                                <div class="save-icon" data-bs-toggle="modal" data-bs-target="#exampleModal-login">
                                    <i class="fa-sharp fa-light fa-bookmark"></i>
                                </div>
                                <div class="tags-area-wrapper">
                                    <div class="single-tag">
                                        <span>Design</span>
                                    </div>
                                    <div class="single-tag">
                                        <span>UI/UX</span>
                                    </div>
                                </div>
                                <div class="lesson-studente">
                                    <div class="lesson">
                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                        <span>19 Lessons</span>
                                    </div>
                                    <div class="lesson">
                                        <i class="fa-light fa-user-group"></i>
                                        <span>14 Students</span>
                                    </div>
                                </div>
                                <a href="single-course.html">
                                    <h5 class="title">User Experience The Ultimate
                                        Guide to Usability and UX</h5>
                                </a>
                                <p class="teacher">David Travis</p>
                                <div class="rating-and-price">
                                    <div class="rating-area">
                                        <span>4.5</span>
                                        <div class="stars">
                                            <ul>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="price-area">
                                        <div class="not price">
                                            $79.99
                                        </div>
                                        <div class="price">
                                            $79.99
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- rts single course end -->
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="fa-solid fa-chevron-right"></i></div>
                    <div class="swiper-button-prev"><i class="fa-solid fa-chevron-left"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

    <!-- why choose us section area start -->
    <div class="why-choose-us bg-blue bg-choose-us-one bg_image rts-section-gap shape-move">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="why-choose-us-area-image pb--50">
                        <img class="one" src="assets/images/why-choose/02.jpg" alt="why-choose">
                        <div class="border-img">
                            <img class="two ml--20" src="assets/images/why-choose/03.jpg" alt="why-choose">
                        </div>
                        <div class="circle-animation">
                            <a class="uni-circle-text uk-background-white dark:uk-background-gray-80 uk-box-shadow-large uk-visible@m"
                                href="#view_in_opensea">
                                <svg class="uni-circle-text-path uk-text-secondary uni-animation-spin"
                                    viewBox="0 0 100 100" width="140" height="140">
                                    <defs>
                                        <path id="circle" d="M 50, 50 m -37, 0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0">
                                        </path>
                                    </defs>
                                    <text font-size="11.2">
                                        <textPath xlink:href="#circle">About Univercity • About Collage •</textPath>
                                    </text>
                                </svg>
                                <i class="fa-regular fa-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl--90 mt_md--50 mt_sm--20 pl_md--15 pl_sm--10">
                    <div class="title-area-left-style">
                        <div class="pre-title">
                            <img src="assets/images/banner/bulb-2.png" alt="icon">
                            <span>Why Choose Us</span>
                        </div>
                        <h2 class="title">Studyhub Your Path to
                            Excellence & Success</h2>
                        <p class="post-title">We are passionate about education and dedicated to providing high- <br>
                            quality learning resources for learners of all backgrounds.</p>
                    </div>
                    <div class="why-choose-main-wrapper-1">
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="assets/images/why-choose/icon/01.png" alt="icon">
                            </div>
                            <h6 class="title">Expert
                                Instructors</h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="assets/images/why-choose/icon/02.png" alt="icon">
                            </div>
                            <h6 class="title">Interactive
                                Learning</h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="assets/images/why-choose/icon/03.png" alt="icon">
                            </div>
                            <h6 class="title">Affordable
                                Learning</h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="assets/images/why-choose/icon/04.png" alt="icon">
                            </div>
                            <h6 class="title">Career
                                Advance</h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="assets/images/why-choose/icon/05.png" alt="icon">
                            </div>
                            <h6 class="title">Course
                                Selection</h6>
                        </div>
                        <!-- single choose reason end -->
                        <!-- single choose reason -->
                        <div class="single-choose-reason-1">
                            <div class="icon">
                                <img src="assets/images/why-choose/icon/06.png" alt="icon">
                            </div>
                            <h6 class="title">Support
                                Community</h6>
                        </div>
                        <!-- single choose reason end -->
                    </div>
                    <a href="course-five.html" class="rts-btn btn-primary-white with-arrow">View All Course <i
                            class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true"><img src="assets/images/banner/15.png"
                    alt=""></div>
            <div class="shape two" data-speed="0.04"><img src="assets/images/banner/shape/banner-shape02-w.svg"
                    alt=""></div>
            <div class="shape three" data-speed="0.04" data-revert="true"><img src="assets/images/banner/16.png"
                    alt=""></div>
        </div>
    </div>
    <!-- why choose us section area end -->

    
    <!-- fun facts area start -->
    <div class="fun-facts-area-1 shape-move bg_image ptb--50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-facts-main-wrapper-1">
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/fun-facts/01.svg" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">65,972</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/fun-facts/02.svg" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">5,321</span></h5>
                            <span class="enr">Completed Course</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/fun-facts/03.svg" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">44,239</span></h5>
                            <span class="enr">Students Learner</span>
                        </div>
                        <!-- single end -->
                        <!-- single  -->
                        <div class="single-fun-facts">
                            <div class="icon">
                                <img src="assets/images/fun-facts/04.svg" alt="icon">
                            </div>
                            <h5 class="title"><span class="counter">75,992</span></h5>
                            <span class="enr">Students Enrolled</span>
                        </div>
                        <!-- single end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-image">
            <div class="shape one" data-speed="0.04" data-revert="true"><img src="assets/images/banner/15.png"
                    alt=""></div>
            <div class="shape three" data-speed="0.04"><img src="assets/images/banner/16.png" alt=""></div>
        </div>
    </div>
    <!-- fun facts area end -->



    <!-- Modal -->
    <div class="modal login-pupup-modal fade" id="exampleModal-login" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hi, Welcome back!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" class="login-form">
                        <input type="text" placeholder="Username of Email Address" required>
                        <input type="password" placeholder="Password" required>
                        <div class="d-flex mb--20 align-items-center">
                            <input type="checkbox" id="examplecheck-modal">
                            <label for="examplecheck-modal">I agree to the terms of use and privacy policy.</label>
                        </div>
                        <button type="submit" class="rts-btn btn-primary">Sign In</button>

                        <p class="dont-acc mt--20">Dont Have an Account? <a href="registration.html">Sign-up</a> </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- cart area start -->

    <!-- modal -->
    <div id="myModal-1" class="modal fade" role="dialog">
        <div class="modal-dialog bg_image">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="fa-light fa-x"></i></button>
                </div>
                <div class="modal-body text-center">
                    <div class="inner-content">
                        <div class="title-area">
                            <span class="pre">Get Our Courses Free</span>
                            <h4 class="title">Wonderful for Learning</h4>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Your Mail.." required>
                            <button>Download Now</button>
                            <span>Your information will never be shared with any third party</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    {{-- all js --}}
@endsection
