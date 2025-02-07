@extends('layouts.front')

@section('title', 'MOM || Courses')

@section('content')

    <!-- bread crumb area -->
    <div class="rts-bread-crumbarea-1 rts-section-gap bg_image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main-wrapper">
                        <h1 class="title">Our Course</h1>
                        <!-- breadcrumb pagination area -->
                        <div class="pagination-wrapper">
                            <a href="/">Home</a>
                            <i class="fa-regular fa-chevron-right"></i>
                            <a class="active" href="{{ route('course.index') }}">All Course</a>
                        </div>
                        <!-- breadcrumb pagination area end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bread crumb area end -->


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
                            {{-- <span>Short By</span>
                            <select class="nice-select" name="price">
                                <option>All Category</option>
                                <option value="asc">Design</option>
                                <option value="desc">Development</option>
                                <option value="pop">Popularity</option>
                                <option value="low">Price</option>
                                <option value="high">Stars</option>
                            </select> --}}
                        </div>
                        <div class="right-filter">
                            <span>Showing 1-9 of 19 results</span>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">
                                        <i class="fa-light fa-grid-2"></i>
                                        <span>Grid</span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile" aria-selected="false">
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

                                @forelse($courses as $course)
                                    @php
                                        $activeBatch = $course->activeBatches->first(); // Get the first active batch if exists
                                    @endphp

                                    <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                        <!-- rts single course -->
                                        <div class="rts-single-course">
                                            <a href="" class="thumbnail">
                                                <img src="assets/images/course/01.jpg" alt="course">
                                            </a>
                                            <div class="tags-area-wrapper">
                                                <div class="single-tag">
                                                    <span>{{ $course->category->name['en'] }}</span>
                                                </div>
                                            </div>
                                            <div class="lesson-studente">
                                                <div class="lesson">
                                                    <i class="fa-light fa-calendar-lines-pen"></i>
                                                    <span>25 Lessons</span>
                                                </div>
                                                <div class="lesson">
                                                    <i class="fa-light fa-user-group"></i>
                                                    <span>
                                                        <!-- Get the enrolled count from the active batches -->
                                                        @php
                                                            $totalEnrolled = 0;
                                                            foreach ($course->activeBatches as $batch) {
                                                                $totalEnrolled += $batch->enrolled; // Summing enrolled count from all active batches
                                                            }
                                                        @endphp
                                                        {{ $totalEnrolled }}
                                                    </span>
                                                </div>
                                            </div>

                                            <a
                                                href="{{ route('course.details', ['course' => $course, 'batch' => $course->activeBatches->first() ?? null]) }}">
                                                <h5 class="title">{{ $course->name['en'] }} -
                                                    @if ($activeBatch)
                                                        {{ $activeBatch->name }}
                                                    @else
                                                        No Active Batch
                                                    @endif
                                                </h5>
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
                                @empty
                                    <div class="rts-single"
                                        style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
                                        <h4>No Course Found</h4>
                                    </div>
                                @endforelse
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
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5 mt--0">
                                <div class="col-lg-12">
                                    @forelse($courses as $course)
                                        <!-- rts single course -->
                                        <div class="rts-single-course course-list">
                                            <a href="" class="thumbnail">
                                                <img src="assets/images/course/11.jpg" alt="course">
                                            </a>
                                            <div class="information-inner">
                                                <div class="tags-area-wrapper">
                                                    <div class="single-tag">
                                                        <span>{{ $course->category->name['en'] }}</span>
                                                    </div>
                                                </div>
                                                <div class="lesson-studente">
                                                    <div class="lesson">
                                                        <i class="fa-light fa-calendar-lines-pen"></i>
                                                        <span>25 Lessons</span>
                                                    </div>
                                                    <div class="lesson">
                                                        <i class="fa-light fa-user-group"></i>
                                                        <span>
                                                            <!-- Get the enrolled count from the active batches -->
                                                            @php
                                                                $totalEnrolled = 0;
                                                                foreach ($course->activeBatches as $batch) {
                                                                    $totalEnrolled += $batch->enrolled; // Summing enrolled count from all active batches
                                                                }
                                                            @endphp
                                                            {{ $totalEnrolled }}
                                                        </span>
                                                    </div>
                                                </div>

                                                <a
                                                    href="{{ route('course.details', ['course' => $course, 'batch' => $course->activeBatches->first() ?? null]) }}">
                                                    <h5 class="title">{{ $course->name['en'] }} -
                                                        @if ($activeBatch)
                                                            {{ $activeBatch->name }}
                                                        @else
                                                            No Active Batch
                                                        @endif
                                                    </h5>
                                                </a>

                                                <p class="disc">Discover a world of knowledge and learning opportunities
                                                </p>
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
                                    @empty
                                        <div class="rts-single"
                                            style="text-align: center; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
                                            <h4>No Course Found</h4>
                                        </div>
                                    @endforelse
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
