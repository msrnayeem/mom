@extends('layouts.front')

@section('title', 'MOM Courses')

@section('content')

{{-- breadcrumb --}}

@include('front_components.breadcrumb')


    <!-- course area start -->
    <div class="rts-course-default-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3">
                    <!-- course-filter-area start -->
                    <div class="rts-course-filter-area">
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">Search</h6>
                            <div class="search-filter filter-body">
                                <div class="input-wrapper">
                                    <input type="text" placeholder="Search Course...">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">Type</h6>
                            <div class="checkbox-filter filter-body">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-1">
                                            <label for="type-1">Course</label><br>
                                        </div>
                                        <span class="number">(20,000)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="type-2">
                                            <label for="type-2">Bundle</label><br>
                                        </div>
                                        <span class="number">(20,000)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">Category</h6>
                            <div class="checkbox-filter filter-body">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-1">
                                            <label for="category-1">Web Development</label><br>
                                        </div>
                                        <span class="number">(130)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-2">
                                            <label for="category-2">Film & Video</label><br>
                                        </div>
                                        <span class="number">(85)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-3">
                                            <label for="category-3">Illustration</label><br>
                                        </div>
                                        <span class="number">(210)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-4">
                                            <label for="category-4">Music & Art</label><br>
                                        </div>
                                        <span class="number">(45)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-5">
                                            <label for="category-5">Photography</label><br>
                                        </div>
                                        <span class="number">(35)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-6">
                                            <label for="category-6">Business & Marketing</label><br>
                                        </div>
                                        <span class="number">(66)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-7">
                                            <label for="category-7">Design & UI/UX</label><br>
                                        </div>
                                        <span class="number">(95)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="category-8">
                                            <label for="category-8">Web Design</label><br>
                                        </div>
                                        <span class="number">(150)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">Level</h6>
                            <div class="checkbox-filter filter-body">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="lavel-1">
                                            <label for="lavel-1">All Levels</label><br>
                                        </div>
                                        <span class="number">(130)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="lavel-2">
                                            <label for="lavel-2">Beginner</label><br>
                                        </div>
                                        <span class="number">(85)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="lavel-3">
                                            <label for="lavel-3">Intermediate</label><br>
                                        </div>
                                        <span class="number">(210)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="lavel-4">
                                            <label for="lavel-4">Expert</label><br>
                                        </div>
                                        <span class="number">(45)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">Author</h6>
                            <div class="checkbox-filter filter-body">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="author-1">
                                            <label for="author-1">Admin</label><br>
                                        </div>
                                        <span class="number">(130)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="author-2">
                                            <label for="author-2">Sean Kaye</label><br>
                                        </div>
                                        <span class="number">(85)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="author-3">
                                            <label for="author-3">David Travis</label><br>
                                        </div>
                                        <span class="number">(210)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="author-4">
                                            <label for="author-4">Dr. Angela Yu</label><br>
                                        </div>
                                        <span class="number">(45)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">Tage</h6>
                            <div class="checkbox-filter filter-body">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="Tage-1">
                                            <label for="Tage-1">Course</label><br>
                                        </div>
                                        <span class="number">(10)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="Tage-2">
                                            <label for="Tage-2">Education</label><br>
                                        </div>
                                        <span class="number">(85)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="Tage-3">
                                            <label for="Tage-3">LMS</label><br>
                                        </div>
                                        <span class="number">(21)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <!-- single filter wized -->
                        <div class="single-filter-left-wrapper">
                            <h6 class="title">Price</h6>
                            <div class="checkbox-filter filter-body last">
                                <div class="checkbox-wrapper">
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="price-1">
                                            <label for="price-1">Free</label><br>
                                        </div>
                                        <span class="number">(6)</span>
                                    </div>
                                    <!-- single check box end -->
                                    <!-- single check box -->
                                    <div class="single-checkbox-filter">
                                        <div class="check-box">
                                            <input type="checkbox" id="price-2">
                                            <label for="price-2">Paid</label><br>
                                        </div>
                                        <span class="number">(80)</span>
                                    </div>
                                    <!-- single check box end -->
                                </div>
                            </div>
                        </div>
                        <!-- single filter wized end -->
                        <a href="#" class="rts-btn btn-border"><i class="fa-regular fa-x"></i> Clear All
                            Filters</a>
                    </div>
                    <!-- course-filter-area end -->
                </div>
                <div class="col-lg-9">
                    <!-- filter top-area  -->
                    <div class="filter-small-top-full">
                        <div class="left-filter">
                            <span>Short By</span>
                            <select class="nice-select" name="price">
                                <option>All Category</option>
                                <option value="asc">Design</option>
                                <option value="desc">Development</option>
                                <option value="pop">Popularity</option>
                                <option value="low">Price</option>
                                <option value="high">Stars</option>
                            </select>
                        </div>
                        <div class="right-filter">
                            <span>Showing 1-9 of 19 results</span>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">
                                        <i class="fa-light fa-grid-2"></i>
                                        <span>Grid</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">
                                        <i class="fa-light fa-list"></i>
                                        <span> List</span>
                                    </button>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- filter top-area end -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5 mt--30">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/01.jpg" alt="course">
                                        </a>
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
                                    <!-- rts single course end -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/02.jpg" alt="course">
                                        </a>
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
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/03.jpg" alt="course">
                                        </a>
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
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/04.jpg" alt="course">
                                        </a>
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
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/05.jpg" alt="course">
                                        </a>
                                        <div class="tags-area-wrapper">
                                            <div class="single-tag">
                                                <span>Music</span>
                                            </div>
                                            <div class="single-tag">
                                                <span>Art</span>
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
                                            <h5 class="title">Complete Guitar Lessons System
                                                Beginner to Advanced</h5>
                                        </a>
                                        <p class="teacher">Erich Andreas</p>
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
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/06.jpg" alt="course">
                                        </a>
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
                                            <h5 class="title">How to Market Yourself as Coach or Consultant Market</h5>
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
                                                <div class="price">
                                                    $79.99
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- rts single course end -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/07.jpg" alt="course">
                                        </a>
                                        <div class="tags-area-wrapper">
                                            <div class="single-tag">
                                                <span>Business</span>
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
                                            <h5 class="title">How to Run truly Productive in
                                                Meetings – and add value</h5>
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
                                                    $39.99
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- rts single course end -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/08.jpg" alt="course">
                                        </a>
                                        <div class="tags-area-wrapper">
                                            <div class="single-tag">
                                                <span>Dance</span>
                                            </div>
                                            <div class="single-tag">
                                                <span>Meditation</span>
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
                                            <h5 class="title">Pole Dancing Video Course with
                                                Noelle Wood</h5>
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
                                                <div class="price">
                                                    $59.99
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- rts single course end -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/01.jpg" alt="course">
                                        </a>
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
                                    <!-- rts single course end -->
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/02.jpg" alt="course">
                                        </a>
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
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/03.jpg" alt="course">
                                        </a>
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
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/05.jpg" alt="course">
                                        </a>
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
                            </div>
                            <div class="row mt--30">
                                <div class="col-lg-12">
                                    <!-- rts-pagination-area -->
                                    <div class="rts-pagination-area-2">
                                        <ul>
                                            <li><i class="fa-solid fa-chevron-left"></i></li>
                                            <li class="active">1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li><i class="fa-solid fa-chevron-right"></i></li>
                                        </ul>
                                    </div>
                                    <!-- rts-pagination-area end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="row g-5 mt--0">
                                <div class="col-lg-12">
                                    <!-- rts single course -->
                                    <div class="rts-single-course course-list">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/11.jpg" alt="course">
                                        </a>
                                        <div class="information-inner">
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
                                            <p class="disc">Discover a world of knowledge and learning opportunities</p>
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

                                    </div>
                                    <!-- rts single course end -->
                                    <!-- rts single course -->
                                    <div class="rts-single-course course-list">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/12.jpg" alt="course">
                                        </a>
                                        <div class="information-inner">
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
                                            <p class="disc">Discover a world of knowledge and learning opportunities</p>
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

                                    </div>
                                    <!-- rts single course end -->
                                    <!-- rts single course -->
                                    <div class="rts-single-course course-list">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/13.jpg" alt="course">
                                        </a>
                                        <div class="information-inner">
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
                                            <p class="disc">Discover a world of knowledge and learning opportunities</p>
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

                                    </div>
                                    <!-- rts single course end -->
                                    <!-- rts single course -->
                                    <div class="rts-single-course course-list">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/14.jpg" alt="course">
                                        </a>
                                        <div class="information-inner">
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
                                            <p class="disc">Discover a world of knowledge and learning opportunities</p>
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

                                    </div>
                                    <!-- rts single course end -->
                                    <!-- rts single course -->
                                    <div class="rts-single-course course-list">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/15.jpg" alt="course">
                                        </a>
                                        <div class="information-inner">
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
                                            <p class="disc">Discover a world of knowledge and learning opportunities</p>
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

                                    </div>
                                    <!-- rts single course end -->
                                    <!-- rts single course -->
                                    <div class="rts-single-course course-list">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/16.jpg" alt="course">
                                        </a>
                                        <div class="information-inner">
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
                                            <p class="disc">Discover a world of knowledge and learning opportunities</p>
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

                                    </div>
                                    <!-- rts single course end -->
                                    <!-- rts single course -->
                                    <div class="rts-single-course course-list">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/17.jpg" alt="course">
                                        </a>
                                        <div class="information-inner">
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
                                            <p class="disc">Discover a world of knowledge and learning opportunities</p>
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

                                    </div>
                                    <!-- rts single course end -->
                                    <!-- rts single course -->
                                    <div class="rts-single-course course-list">
                                        <a href="single-course.html" class="thumbnail">
                                            <img src="assets/images/course/18.jpg" alt="course">
                                        </a>
                                        <div class="information-inner">
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
                                            <p class="disc">Discover a world of knowledge and learning opportunities</p>
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

                                    </div>
                                    <!-- rts single course end -->
                                </div>
                            </div>
                            <div class="row mt--30">
                                <div class="col-lg-12">
                                    <!-- rts-pagination-area -->
                                    <div class="rts-pagination-area-2">
                                        <ul>
                                            <li><i class="fa-solid fa-chevron-left"></i></li>
                                            <li class="active">1</li>
                                            <li>2</li>
                                            <li>3</li>
                                            <li>4</li>
                                            <li><i class="fa-solid fa-chevron-right"></i></li>
                                        </ul>
                                    </div>
                                    <!-- rts-pagination-area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- course area end -->

@endsection
