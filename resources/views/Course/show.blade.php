@extends('layouts.front')

@section('title', 'MOM || Course Details')

@section('content')
    <!-- course details breadcrumb -->
    <div class="course-details-breadcrumb-2 bg_image rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-course-left-align-wrapper">
                        <div class="meta-area">
                            <a href="index.html">Home</a>
                            <i class="fa-solid fa-chevron-right"></i>
                            <a class="active" href="#">Course Details</a>
                        </div>
                        <h1 class="title">
                            The Complete Web Developer in <br> 2024: Zero to Mastery
                        </h1>
                        <div class="rating-area">
                            <div class="stars-area">
                                <span>4.5</span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <div class="students">
                                <i class="fa-thin fa-users"></i>
                                <span>3054 Students</span>
                            </div>
                            <div class="calender-area-stars">
                                <i class="fa-light fa-calendar-lines-pen"></i>
                                <span>Last updated 12/2024</span>
                            </div>
                        </div>
                        <div class="author-area">
                            <div class="author">
                                <img src="assets/images/breadcrumb/01.png" alt="breadcrumb">
                                <h6 class="name"><span>By</span> William U.</h6>
                            </div>
                            <p> <span>Categories: </span> Web Developments</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course details breadcrumb end -->



    <!-- course details-area start -->
    <div class="course-details-wrapper-2 rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 order-cl-1 order-lg-1 order-md-2 order-sm-2 order-2">

                    <div class="thumbnail mb--30" style="position: relative;">
                        <img src="assets/images/course/21.jpg" alt="">
                        <div class="vedio-icone">
                            <a class="video-play-button play-video popup-video"
                                href="https://www.youtube.com/watch?v=ezbJwaLmOeM">
                                <span></span>
                            </a>
                            <div class="video-overlay">
                                <a class="video-overlay-close">×</a>
                            </div>
                        </div>
                    </div>
                    <div class="course-content-wrapper">
                        <h5 class="title">About Course</h5>
                        <p class="disc">
                            If filmmaking is your passion but you never went to film school you’ve come to the right place.
                            Here, you will get hands-on
                            experience and acquire skills that you never would’ve elsewhere like learning how to make
                            feature films on your own,
                            making do with any equipment, and doing it all faster and better.
                        </p>
                        <h5 class="title">Description</h5>
                        <p class="disc">
                            You will be taught the full process of filmmaking starting from planning, filming, and editing.
                            Not only that but you will learn
                            how to make films that look way more expensive than they are without spending a whole lot of
                            time or money on them.
                            In this course, we’ll focus on a few different forms of films from video ads, to movie trailers
                            to travel vlogs, you name it.
                        </p>
                        <p class="disc">
                            In addition to that, we’ll also go over Adobe Premiere Pro in detail so that you get an idea of
                            all that you need to know to become an editing genius. And, if you feel like you’re stuck at any
                            point then you can always ask for guidance and I’ll reply as soon as possible.
                        </p>
                        <p class="disc">
                            With this course, you also have access to a whole lot of resources not only for reference but
                            also free media like aerial video shots, background music, fonts, and more. These all come with
                            proper licensing so you can use them in your production worry free.
                        </p>
                        <div class="module-wrapper">
                            <h6 class="title">What Will You Learn?</h6>
                            <div class="inner-content">
                                <div class="single-wrapper">
                                    <div class="single-codule">
                                        <i class="fa-regular fa-check"></i>
                                        <p>Learn the basics of computer programming</p>
                                    </div>
                                    <div class="single-codule">
                                        <i class="fa-regular fa-check"></i>
                                        <p>Differences between ads, trailers, vlogs, etc</p>
                                    </div>
                                    <div class="single-codule">
                                        <i class="fa-regular fa-check"></i>
                                        <p>Learn JavaScript</p>
                                    </div>
                                </div>
                                <div class="single-wrapper">
                                    <div class="single-codule">
                                        <i class="fa-regular fa-check"></i>
                                        <p>Learn CSS</p>
                                    </div>
                                    <div class="single-codule">
                                        <i class="fa-regular fa-check"></i>
                                        <p>Tools you need for best results</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="course-content-wrapper-main mt--40">
                        <h5 class="title">Course Content</h5>

                        <!-- course content accordion area -->
                        <div class="accordion mt--30" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>Introduction</span>
                                        <span>3 Lectures . 9 min</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Introduction to the course</span>
                                            </div>
                                            <div class="right">
                                                <span class="play">Preview</span>
                                                <span>9 min</span>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Introduction to the course</span>
                                            </div>
                                            <div class="right">
                                                <span class="play">Preview</span>
                                                <span>9 min</span>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Introduction to the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>Learn to Storyboard</span>
                                        <span>7 Lectures . 120 min</span>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Become a storyboard artist</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>storyboard artist</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Introduction PHP</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>LEarning Fundamentsl Elementor</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Enter to the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Main Part of the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Function About PHP</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span>How to draw characters, layouts, and scenes</span>
                                        <span>7 Lectures . 83 min</span>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Become a storyboard artist</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>storyboard artist</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Introduction PHP</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>LEarning Fundamentsl Elementor</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Enter to the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Main Part of the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Function About PHP</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span>1-point and 2-point perspective</span>
                                        <span>7 Lectures . 72 min</span>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Become a storyboard artist</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>storyboard artist</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Introduction PHP</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>LEarning Fundamentsl Elementor</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Enter to the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Main Part of the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Function About PHP</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        <span>Digital drawing application</span>
                                        <span>7 Lectures . 90 min</span>
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Become a storyboard artist</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>storyboard artist</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Introduction PHP</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>LEarning Fundamentsl Elementor</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Enter to the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Main Part of the course</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                        <!-- play single area start -->
                                        <a href="#" class="play-vedio-wrapper">
                                            <div class="left">
                                                <i class="fa-light fa-circle-play"></i>
                                                <span>Function About PHP</span>
                                            </div>
                                            <div class="right">
                                                <i class="fa-regular fa-lock"></i>
                                            </div>
                                        </a>
                                        <!-- play single area end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- course content accordion area end -->
                    </div>
                    <div class="single-instructor-area-details mt--40">
                        <a href="#" class="thumbnail">
                            <img src="assets/images/instructor/10.jpg" alt="instructor">
                        </a>
                        <div class="inner-instrustor-area">
                            <h5 class="title">William U.</h5>
                            <span class="deg">Advanced Educator</span>
                            <div class="stars-area-wrapper">
                                <div class="stars-area">
                                    <span>4.5</span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <div class="users-area">
                                    <i class="fa-light fa-users"></i>
                                    <span>1350 Students</span>
                                </div>
                                <div class="users-area">
                                    <i class="fa-light fa-video"></i>
                                    <span>26 Courses</span>
                                </div>
                            </div>
                            <p class="disc">
                                William U. Peña, MBA, CISSP No. 349867, is a former college professor and the lead
                                instructor at Dion Training Solutions.
                            </p>
                            <div class="follow-us">
                                <span>Follow</span>
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rating-main-wrapper">
                        <!-- single-top-rating -->
                        <div class="rating-top-main-wrapper">
                            <!-- rating area start -->
                            <div class="rating-area-main-wrapper">
                                <h2 class="title">4.5</h2>
                                <div class="stars-wrapper">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <span>Total 2 Ratings</span>
                            </div>
                            <!-- rating area end -->
                            <div class="progress-wrapper-main">
                                <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="progress-top">
                                        <i class="fa-regular fa-star"></i>
                                        <span class="parcent">
                                            5
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar"
                                            style="width: 100%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="end">
                                        <span>25 Rating</span>
                                    </div>
                                </div>
                                <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="progress-top">
                                        <i class="fa-regular fa-star"></i>
                                        <span class="parcent">
                                            4
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar"
                                            style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="end">
                                        <span>20 Rating</span>
                                    </div>
                                </div>
                                <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="progress-top">
                                        <i class="fa-regular fa-star"></i>
                                        <span class="parcent">
                                            3
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar"
                                            style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="end">
                                        <span>5 Rating</span>
                                    </div>
                                </div>
                                <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="progress-top">
                                        <i class="fa-regular fa-star"></i>
                                        <span class="parcent">
                                            2
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar"
                                            style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="end">
                                        <span>2 Rating</span>
                                    </div>
                                </div>
                                <div class="single-progress-area-h" data-sal-delay="150" data-sal="slide-up"
                                    data-sal-duration="800">
                                    <div class="progress-top">
                                        <i class="fa-regular fa-star"></i>
                                        <span class="parcent">
                                            1
                                        </span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar wow fadeInLeft bg--primary" role="progressbar"
                                            style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="end">
                                        <span>1 Rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-top-rating end-->
                        <!-- person indevidual rating area  -->
                        <div class="indevidual-rating-area">
                            <!-- author-area -->
                            <div class="author-area">
                                <img src="assets/images/instructor/12.jpg" alt="instructor">
                                <div class="information">
                                    <span>William U.</span>
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <span class="ml--30">a week ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- author-area end -->
                            <p class="disc">
                                I still have a lot of studying to do using this course and the other practice exams, but so
                                far it's been great! I have not taken my Security+ exam as well, so I'll update this at a
                                later time.
                            </p>
                            <div class="like-love-area">
                                <a href="#">
                                    <i class="fa-sharp fa-light fa-thumbs-up"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <!-- person indevidual rating area end -->
                        <!-- person indevidual rating area  -->
                        <div class="indevidual-rating-area">
                            <!-- author-area -->
                            <div class="author-area">
                                <img src="assets/images/instructor/13.jpg" alt="instructor">
                                <div class="information">
                                    <span>William U.</span>
                                    <div class="stars">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <span class="ml--30">a week ago</span>
                                    </div>
                                </div>
                            </div>
                            <!-- author-area end -->
                            <p class="disc">
                                I still have a lot of studying to do using this course and the other practice exams, but so
                                far it's been great! I have not taken my Security+ exam as well, so I'll update this at a
                                later time.
                            </p>
                            <div class="like-love-area">
                                <a href="#">
                                    <i class="fa-sharp fa-light fa-thumbs-up"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-regular fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <!-- person indevidual rating area end -->
                    </div>
                </div>
                <div class="col-lg-4 order-cl-2 order-lg-2 order-md-1 order-sm-1 order-1 rts-sticky-column-item">
                    <!-- right- sticky bar area -->
                    <div class="right-course-details mt--0">
                        <!-- single course-sidebar -->
                        <div class="course-side-bar">
                            <div class="price-area">
                                <h3 class="title">$79.99</h3>
                                <h4 class="none">$79.99</h4>
                                <span class="discount">-50%</span>
                            </div>
                            <div class="clock-area">
                                <i class="fa-light fa-clock"></i>
                                <span>2 Day left at this price!</span>
                            </div>
                            <a href="#" class="rts-btn btn-primary">Add To Cart</a>
                            <a href="#" class="rts-btn btn-border">Buy Now</a>

                            <div class="what-includes">
                                <span class="m">30-Day Money-Back Guarantee</span>
                                <h5 class="title">This course includes: </h5>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-light fa-chart-bar"></i>
                                        <span>Levels</span>
                                    </div>
                                    <div class="right">
                                        <span>Beginner</span>
                                    </div>
                                </div>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-light fa-timer"></i>
                                        <span>Duration</span>
                                    </div>
                                    <div class="right">
                                        <span>6 hours 56 minutes</span>
                                    </div>
                                </div>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-regular fa-floppy-disk"></i>
                                        <span>Subject</span>
                                    </div>
                                    <div class="right">
                                        <span>Web Development</span>
                                    </div>
                                </div>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                        <span>Update</span>
                                    </div>
                                    <div class="right">
                                        <span>29 October, 2023 Last Update</span>
                                    </div>
                                </div>
                                <div class="single-include">
                                    <div class="left">
                                        <i class="fa-sharp fa-light fa-file-certificate"></i>
                                        <span>Certificate</span>
                                    </div>
                                    <div class="right">
                                        <span>Certificate of completion </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single course-sidebar end -->
                    </div>
                    <!-- right- sticky bar area end -->
                    <!-- right- sticky bar area -->
                    <div class="right-course-details mt--30">
                        <!-- single course-sidebar -->
                        <div class="course-side-bar">
                            <!-- course single sidebar -->
                            <div class="course-single-information">
                                <h5 class="title">A course by</h5>
                                <div class="body">
                                    <div class="author">
                                        <img src="assets/images/course/13.png" alt="">
                                        <span>Dr. Angela Yu</span>
                                    </div>
                                    <div class="author">
                                        <img src="assets/images/course/13.png" alt="">
                                        <span>Dr. Angela Yu</span>
                                    </div>
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class="course-single-information">
                                <h5 class="title">Material Includes</h5>
                                <div class="body">
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Flexible Deadlines
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Hours of live- demo
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Hours of live- demo
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        200+ downloadable resoursces
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                            <!-- course single sidebar -->
                            <div class="course-single-information">
                                <h5 class="title">Requirements</h5>
                                <div class="body">
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Access to Adobe Premiere Pro
                                    </div>
                                    <!-- ingle check end -->
                                    <!-- ingle check -->
                                    <div class="single-check">
                                        <i class="fa-light fa-circle-check"></i>
                                        Familiarity with computers and other devices
                                    </div>
                                    <!-- ingle check end -->
                                </div>
                            </div>
                            <!-- course single sidebar end-->
                        </div>
                        <!-- single course-sidebar end -->
                    </div>
                    <!-- right- sticky bar area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- course details-area end -->



    <!-- course area start -->
    <div class="rts-section-gapBottom  rts-feature-course-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-area">
                        <div class="title-area-left-style">
                            <div class="pre-title">
                                <img src="assets/images/banner/bulb.png" alt="icon">
                                <span>More Similar Courses</span>
                            </div>
                            <h2 class="title">Related Courses</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--50 ">
                <div class="col-lg-12">
                    <div class="swiper swiper-float-right-course swiper-data"
                        data-swiper='{
                "spaceBetween":30,
                "slidesPerView":4,
                "loop": true,
                "autoplay":{
                    "delay":"2000"
                },
                "breakpoints":{
                "0":{
                    "slidesPerView":1,
                    "spaceBetween":30},
                "320":{
                    "slidesPerView":1,
                    "spaceBetween":30},
                "480":{
                    "slidesPerView":1,
                    "spaceBetween":30},
                "640":{
                    "slidesPerView":2,
                    "spaceBetween":30},
                "1100":{
                    "slidesPerView":3,
                    "spaceBetween":30},
                "1200":{
                    "slidesPerView":4,
                    "spaceBetween":30}
                }
            }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/course/01.jpg" alt="course">
                                        <div class="tag-thumb">
                                            <span>Marketing</span>
                                        </div>
                                    </a>
                                    <div class="body-area">
                                        <div class="course-top">
                                            <div class="tags">Best Seller</div>
                                            <div class="price">$49.50</div>
                                        </div>
                                        <a href="#">
                                            <h5 class="title">How to Write the Ultimate 1 Page
                                                Strategic Business Plan</h5>
                                        </a>
                                        <div class="teacher-stars">
                                            <div class="teacher"><span>Dr. Angela Yu</span></div>
                                            <ul class="stars">
                                                <li class="span">4.5</li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="leasson-students">
                                            <div class="lesson">
                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                            <div class="students">
                                                <i class="fa-light fa-users"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single course style two end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/course/02.jpg" alt="course">
                                        <div class="tag-thumb">
                                            <span>Marketing</span>
                                        </div>
                                    </a>
                                    <div class="body-area">
                                        <div class="course-top">
                                            <div class="tags">Best Seller</div>
                                            <div class="price">$49.50</div>
                                        </div>
                                        <a href="#">
                                            <h5 class="title">The Complete Web Developer in
                                                2023: Zero to Mastery</h5>
                                        </a>
                                        <div class="teacher-stars">
                                            <div class="teacher"><span>Dr. Angela Yu</span></div>
                                            <ul class="stars">
                                                <li class="span">4.5</li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="leasson-students">
                                            <div class="lesson">
                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                            <div class="students">
                                                <i class="fa-light fa-users"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single course style two end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/course/03.jpg" alt="course">
                                        <div class="tag-thumb">
                                            <span>Marketing</span>
                                        </div>
                                    </a>
                                    <div class="body-area">
                                        <div class="course-top">
                                            <div class="tags">Best Seller</div>
                                            <div class="price">$49.50</div>
                                        </div>
                                        <a href="#">
                                            <h5 class="title">User Experience The Ultimate
                                                Guide to Usability and UX</h5>
                                        </a>
                                        <div class="teacher-stars">
                                            <div class="teacher"><span>Dr. Angela Yu</span></div>
                                            <ul class="stars">
                                                <li class="span">4.5</li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="leasson-students">
                                            <div class="lesson">
                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                            <div class="students">
                                                <i class="fa-light fa-users"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single course style two end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/course/04.jpg" alt="course">
                                        <div class="tag-thumb">
                                            <span>Marketing</span>
                                        </div>
                                    </a>
                                    <div class="body-area">
                                        <div class="course-top">
                                            <div class="tags">Best Seller</div>
                                            <div class="price">$49.50</div>
                                        </div>
                                        <a href="#">
                                            <h5 class="title">Complete Guitar Lessons System
                                                Beginner to Advanced</h5>
                                        </a>
                                        <div class="teacher-stars">
                                            <div class="teacher"><span>Dr. Angela Yu</span></div>
                                            <ul class="stars">
                                                <li class="span">4.5</li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="leasson-students">
                                            <div class="lesson">
                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                            <div class="students">
                                                <i class="fa-light fa-users"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single course style two end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/course/05.jpg" alt="course">
                                        <div class="tag-thumb">
                                            <span>Marketing</span>
                                        </div>
                                    </a>
                                    <div class="body-area">
                                        <div class="course-top">
                                            <div class="tags">Best Seller</div>
                                            <div class="price">$49.50</div>
                                        </div>
                                        <a href="#">
                                            <h5 class="title">Automate the Boring Stuff with
                                                Python Programming</h5>
                                        </a>
                                        <div class="teacher-stars">
                                            <div class="teacher"><span>Dr. Angela Yu</span></div>
                                            <ul class="stars">
                                                <li class="span">4.5</li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="leasson-students">
                                            <div class="lesson">
                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                            <div class="students">
                                                <i class="fa-light fa-users"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single course style two end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/course/06.jpg" alt="course">
                                        <div class="tag-thumb">
                                            <span>Marketing</span>
                                        </div>
                                    </a>
                                    <div class="body-area">
                                        <div class="course-top">
                                            <div class="tags">Best Seller</div>
                                            <div class="price">$49.50</div>
                                        </div>
                                        <a href="#">
                                            <h5 class="title">Automate the Boring Stuff with
                                                Python Programming</h5>
                                        </a>
                                        <div class="teacher-stars">
                                            <div class="teacher"><span>Dr. Angela Yu</span></div>
                                            <ul class="stars">
                                                <li class="span">4.5</li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="leasson-students">
                                            <div class="lesson">
                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                            <div class="students">
                                                <i class="fa-light fa-users"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single course style two end -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single course style two -->
                                <div class="single-course-style-three">
                                    <a href="#" class="thumbnail">
                                        <img src="assets/images/course/07.jpg" alt="course">
                                        <div class="tag-thumb">
                                            <span>Marketing</span>
                                        </div>
                                    </a>
                                    <div class="body-area">
                                        <div class="course-top">
                                            <div class="tags">Best Seller</div>
                                            <div class="price">$49.50</div>
                                        </div>
                                        <a href="#">
                                            <h5 class="title">How to Write the Ultimate 1 Page
                                                Strategic Business Plan</h5>
                                        </a>
                                        <div class="teacher-stars">
                                            <div class="teacher"><span>Dr. Angela Yu</span></div>
                                            <ul class="stars">
                                                <li class="span">4.5</li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                <li><i class="fa-sharp fa-regular fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="leasson-students">
                                            <div class="lesson">
                                                <i class="fa-light fa-calendar-lines-pen"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                            <div class="students">
                                                <i class="fa-light fa-users"></i>
                                                <span>25 Lessons</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single course style two end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

@endsection
