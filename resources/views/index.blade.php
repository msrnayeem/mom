<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>মদিনা অনলাইন মাদরাসা</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Scheherazade New', serif;
            cursor: default;
            background-color: #f2f9f1;
            /* A soft, light background */
        }

        /* Navbar styles (unchanged behavior) */
        .navbar {
            transition: background-color 0.3s ease-in-out;
        }

        .navbar-solid {
            background-color: #343a40 !important;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar-transparent {
            background-color: transparent !important;
        }

        @media (max-width: 991px) {
            .navbar {
                background-color: #343a40 !important;
            }
        }

        /* Hero Section with an Islamic-inspired patterned background and green overlay */
        .hero {
            background: linear-gradient(rgba(0, 100, 0, 0.7), rgba(0, 100, 0, 0.7)),
                url('https://via.placeholder.com/1920x800?text=Islamic+Pattern') no-repeat center center;
            background-size: cover;
            position: relative;
            height: 80vh;
            color: #fff;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            /* Gradient overlay already applied in the background property */
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        /* Section Headings in a deep green tone */
        h2 {
            color: #006400;
        }

        /* Navbar link font size remains increased */
        .navbar .nav-link {
            font-size: 1.25rem;
        }

        /* Card styling with subtle gold accents */
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-top: 4px solid #d4af37;
            /* Gold accent */
        }

        .card:hover {
            transform: translateY(-5px);
            transition: transform 0.3s;
        }

        /* Button styles with Islamic-inspired colors */
        .btn-primary {
            background-color: #006400;
            border-color: #006400;
        }

        .btn-primary:hover {
            background-color: #004d00;
            border-color: #004d00;
        }

        .btn-warning {
            background-color: #d4af37;
            border-color: #d4af37;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #b5912e;
            border-color: #b5912e;
        }

        /* Footer with a gradient of deep green to turquoise */
        footer {
            background: linear-gradient(to right, #2c3e50, #34495e);
            /* Dark gradient */
            padding: 4rem 0;
            color: #fff;
        }

        footer h5 {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        footer p,
        footer ul {
            font-size: 1rem;
        }

        footer ul {
            padding-left: 0;
        }

        footer ul li {
            list-style: none;
            margin-bottom: 0.5rem;
        }

        footer a {
            color: #f1c40f;
            /* Gold color for links */
            transition: color 0.3s ease-in-out;
        }

        footer a:hover {
            color: #e67e22;
            /* Orange color on hover */
        }

        /* Social Icons */
        .social-icons a {
            font-size: 1.5rem;
            margin: 0 10px;
            display: inline-block;
            transition: transform 0.3s ease-in-out;
        }

        .social-icons a:hover {
            transform: scale(1.2);
        }

        /* Bottom Section */
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1rem;
            margin-top: 2rem;
        }

        #contact {
            background: linear-gradient(to right, #f2f9f1, #e6f7e6);
            /* Soft, fresh gradient */
            padding: 4rem 0;
        }

        #contact h2 {
            color: #006400;
            /* Deep green for headings */
            font-weight: bold;
            margin-bottom: 2rem;
        }

        #contact p {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        /* Style for the contact info on the left */
        #contact .contact-info p {
            line-height: 1.6;
        }

        /* Form Input Styles */
        #contact .form-control {
            border-radius: 0.5rem;
            border: 1px solid #ccc;
            box-shadow: none;
            padding: 0.75rem;
        }

        #contact .form-control:focus {
            border-color: #006400;
            box-shadow: 0 0 5px rgba(0, 100, 0, 0.5);
        }

        /* Button Styles */
        #contact .btn-dark {
            background-color: #006400;
            border: none;
            border-radius: 0.5rem;
            padding: 0.75rem 2rem;
            transition: background-color 0.3s ease;
        }

        #contact .btn-dark:hover {
            background-color: #004d00;
        }

        /* Optional: Add some spacing between the contact info and form on smaller screens */
        @media (max-width: 767px) {
            #contact .col-md-6 {
                margin-bottom: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation (Fixed Top with dynamic behavior for desktop only) -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('MOM-logo-02.jpg') }}" alt="মদিনা অনলাইন মাদরাসা" style="width: 122px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- You can keep ms-auto here if you want right-aligned items; remove it for left alignment -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#featured-courses">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center justify-content-center">
        <div class="container text-center hero-content">
            <h1 class="display-4">ইসলামী জ্ঞানের মুক্ত প্ল্যাটফর্ম: সহজ, সবার জন্য, সর্বত্র</h1>
            <p class="lead mt-3">ইসলামের সঠিক ও বিশুদ্ধ জ্ঞান এখন আপনার হাতের নাগালে</p>
            <form class="d-flex justify-content-center mt-4">
                <input class="form-control w-50 me-2" type="search" placeholder="কোর্সের নাম লিখুন"
                    aria-label="Search">
                <button class="btn btn-warning" type="submit">খুঁজুন</button>
            </form>
        </div>
    </section>


    <!-- Featured Courses Section -->
    <section id="featured-courses" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">প্রসিদ্ধ কোর্স</h2>
            <div class="row">
                <!-- Course Card 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title">ইলম কোর্স</h5>
                            <p class="card-text">৩ বছরের পূর্ণ কোর্স</p>
                            <p class="card-text">এই কোর্সে ইসলামী ইতিহাস, ফিকহ, তাফসীর ও অন্যান্য বিষয় শেখানো হবে।</p>
                            <ul class="list-unstyled">
                                <li>সময়: ৩ বছর</li>
                                <li>ফি: ১০,০০০ টাকা</li>
                                <li>ইনস্ট্রাক্টর: ড. মোহাম্মদ রইয়াত</li>
                            </ul>
                            <a href="#course-details" class="btn btn-primary">আরো জানুন</a>
                        </div>
                    </div>
                </div>
                <!-- Course Card 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title">আরব ভাষা কোর্স</h5>
                            <p class="card-text">১৮ মাসের সুনির্দিষ্ট কোর্স</p>
                            <p class="card-text">এই কোর্সে আরবি ভাষার মৌলিক ব্যাকরণ, উচ্চারণ ও কথ্য প্রয়োগ শেখানো হবে।
                            </p>
                            <ul class="list-unstyled">
                                <li>সময়: ১৮ মাস</li>
                                <li>ফি: ৫,০০০ টাকা</li>
                                <li>ইনস্ট্রাক্টর: শায়খ মুসলিম</li>
                            </ul>
                            <a href="#course-details" class="btn btn-primary">আরো জানুন</a>
                        </div>
                    </div>
                </div>
                <!-- Course Card 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title">কুরআন শিক্ষা</h5>
                            <p class="card-text">২০ দিনের শর্ট কোর্স</p>
                            <p class="card-text">এই কোর্সে কুরআনের তেলাওয়াত, হিফজ ও তাজবীদ শেখানো হবে।</p>
                            <ul class="list-unstyled">
                                <li>সময়: ২০ দিন</li>
                                <li>ফি: ফ্রি</li>
                                <li>ইনস্ট্রাক্টর: আয়েশা বেগম</li>
                            </ul>
                            <a href="#course-details" class="btn btn-primary">আরো জানুন</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#courses" class="btn btn-outline-dark">সব কোর্স দেখুন</a>
            </div>
        </div>
    </section>

    <!-- Teachers Section -->
    <section id="teachers" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">প্রখ্যাত শিক্ষকগণ</h2>
            <div class="row">
                <!-- Teacher 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="https://avatar.iran.liara.run/public/boy"
                            class="card-img-top rounded-circle mx-auto mt-3" style="width:150px; height:150px;"
                            alt="আবদুল্লাহ হোসেন">
                        <div class="card-body">
                            <h5 class="card-title">আবদুল্লাহ হোসেন</h5>
                            <p class="card-text">ইসলামী ইতিহাস ও ফিকহ বিশেষজ্ঞ</p>
                        </div>
                    </div>
                </div>
                <!-- Teacher 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="https://avatar.iran.liara.run/public/boy"
                            class="card-img-top rounded-circle mx-auto mt-3" style="width:150px; height:150px;"
                            alt="মুহাম্মদ ইসলাম">
                        <div class="card-body">
                            <h5 class="card-title">মুহাম্মদ ইসলাম</h5>
                            <p class="card-text">কুরআন তেলাওয়াত ও হিফজ বিশেষজ্ঞ</p>
                        </div>
                    </div>
                </div>
                <!-- Teacher 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center">
                        <img src="https://avatar.iran.liara.run/public/boy"
                            class="card-img-top rounded-circle mx-auto mt-3" style="width:150px; height:150px;"
                            alt="শায়খ আব্দুল করিম">
                        <div class="card-body">
                            <h5 class="card-title">শায়খ আব্দুল করিম</h5>
                            <p class="card-text">আরবি ভাষা ও ব্যাকরণ বিশেষজ্ঞ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#004d40"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                        </svg>
                    </div>
                    <h5>সঠিক শিক্ষা</h5>
                    <p>বিশ্বস্ত স্কলারদের দ্বারা নির্মিত কোর্স</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#004d40"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12" y2="16"></line>
                        </svg>
                    </div>
                    <h5>সহজ ব্যবহার</h5>
                    <p>আধুনিক প্রযুক্তি দ্বারা পরিচালিত প্ল্যাটফর্ম</p>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="mb-3">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#004d40"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20l9-5-9-5-9 5 9 5z"></path>
                            <path d="M12 12l9-5-9-5-9 5 9 5z"></path>
                        </svg>
                    </div>
                    <h5>সমৃদ্ধ মূল্যবোধ</h5>
                    <p>ইসলামী মূল্যবোধ ও ঐতিহ্যের সাথে মিলিত</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Options Section -->
    <section id="donation" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">ডোনেশন অপশনস</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">স্বল্প ডোনেশন</h5>
                            <p class="card-text">আপনি মাত্র ৫০০ টাকায় আমাদের সাহায্য করতে পারেন।</p>
                            <a href="#" class="btn btn-primary">ডোনেট করুন</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">মাঝারি ডোনেশন</h5>
                            <p class="card-text">১,০০০ থেকে ৫,০০০ টাকার মধ্যে আপনার অবদান দিন।</p>
                            <a href="#" class="btn btn-primary">ডোনেট করুন</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">উচ্চ ডোনেশন</h5>
                            <p class="card-text">৫,০০০ টাকার উপরে ডোনেশন করে বৃহত্তর প্রভাব ফেলুন।</p>
                            <a href="#" class="btn btn-primary">ডোনেট করুন</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">আসন্ন ইভেন্ট</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://placehold.co/400x250" class="card-img-top" alt="ইভেন্ট">
                        <div class="card-body">
                            <h5 class="card-title">ইবনের রূমী আলোচনা</h5>
                            <p class="card-text">তারিখ: ২৫শে জানুয়ারী</p>
                            <p class="card-text">ইসলামের প্রাচীন ও আধুনিক চিন্তাধারার সমন্বয়।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://placehold.co/400x250" class="card-img-top" alt="ইভেন্ট">
                        <div class="card-body">
                            <h5 class="card-title">ঐতিহ্য প্রদর্শনী</h5>
                            <p class="card-text">তারিখ: ৫ই ফেব্রুয়ারী</p>
                            <p class="card-text">ইসলামী ঐতিহ্য ও সংস্কৃতির প্রদর্শনী।</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://placehold.co/400x250" class="card-img-top" alt="ইভেন্ট">
                        <div class="card-body">
                            <h5 class="card-title">মাসুল ইসলাম সেমিনার</h5>
                            <p class="card-text">তারিখ: ১২ই মার্চ</p>
                            <p class="card-text">আধুনিক ইসলামী দৃষ্টিভঙ্গি ও আলোচনা।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">ছাত্রদের মন্তব্য</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex flex-column align-items-center">
                            <p class="lead">"মদিনা অনলাইন মাদরাসা আমাকে সঠিক দিশা দেখিয়েছে।"</p>
                            <h6>আহমেদ খান</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <p class="lead">"এখানে শিখে জীবন বদলে গেছে।"</p>
                            <h6>সারাহ আমান</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <p class="lead">"সঠিক শিক্ষার জন্য মদিনা অনলাইন মাদরাসা সেরা।"</p>
                            <h6>মোহাম্মদ সোহান</h6>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Expanded FAQ Section -->
    <section id="faq" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">প্রশ্নোত্তর</h2>
            <div class="accordion" id="faqAccordion">
                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseOne">
                            কোর্সে ভর্তি হওয়ার জন্য কী প্রয়োজন?
                        </button>
                    </h2>
                    <div id="faqCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            ওয়েবসাইটে রেজিস্ট্রেশন করুন এবং প্রয়োজনীয় তথ্য প্রদান করুন।
                        </div>
                    </div>
                </div>
                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseTwo">
                            কোর্সের ফি কত?
                        </button>
                    </h2>
                    <div id="faqCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            কিছু কোর্স ফ্রি এবং কিছু কোর্স পেইড। বিস্তারিত জানতে কোর্স পেজ দেখুন।
                        </div>
                    </div>
                </div>
                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseThree">
                            কোর্স শেষ হওয়ার পর সার্টিফিকেট দেয়া হয়?
                        </button>
                    </h2>
                    <div id="faqCollapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            হ্যাঁ, সফলভাবে কোর্স শেষ করলে সার্টিফিকেট প্রদান করা হবে।
                        </div>
                    </div>
                </div>
                <!-- FAQ Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseFour">
                            কোর্সের সময়সূচী কি?
                        </button>
                    </h2>
                    <div id="faqCollapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            প্রতিটি কোর্সের সময়সূচী ভিন্ন। বিস্তারিত তথ্য কোর্স পেজে প্রদান করা হয়।
                        </div>
                    </div>
                </div>
                <!-- FAQ Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseFive">
                            শিক্ষকদের সাথে যোগাযোগ কিভাবে করবেন?
                        </button>
                    </h2>
                    <div id="faqCollapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            কোর্সের অন্তর্গত ফোরাম ও সরাসরি বার্তা পাঠানোর মাধ্যমে শিক্ষকগণের সাথে যোগাযোগ করা যায়।
                        </div>
                    </div>
                </div>
                <!-- FAQ Item 6 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeadingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqCollapseSix">
                            কোর্স শুরু হওয়ার পূর্বে কি কোনো ওরিয়েন্টেশন সেশন আছে?
                        </button>
                    </h2>
                    <div id="faqCollapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            হ্যাঁ, প্রতিটি কোর্সের শুরুতে ওরিয়েন্টেশন সেশন আয়োজন করা হয়।
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>আমাদের সম্পর্কে</h2>
                    <p class="mt-3">মদিনা অনলাইন মাদরাসা একটি আধুনিক, ব্যবহারকারী-বান্ধব প্ল্যাটফর্ম যা ইসলামী শিক্ষা
                        প্রদান করে। আমরা বিশ্বাস করি সঠিক শিক্ষা ও মূল্যবোধের মাধ্যমে সমাজে ইতিবাচক পরিবর্তন আনা সম্ভব।
                    </p>
                    <a href="#contact" class="btn btn-warning mt-3">যোগাযোগ করুন</a>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x400" alt="আমাদের সম্পর্কে" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">যোগাযোগ</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <p><strong>ফোন:</strong> +৮৮-০১২৩৪৫৬৭৮৯</p>
                        <p><strong>ইমেইল:</strong> info@modinaonlinemadrasah.com</p>
                        <p><strong>ঠিকানা:</strong> ঢাকা, বাংলাদেশ</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="নাম">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="ইমেইল">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="5" placeholder="বার্তা"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">পাঠান</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="py-5">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 mb-4">
                    <h5>মদিনা অনলাইন মাদরাসা</h5>
                    <p>ইসলামী শিক্ষার উৎকর্ষ সাধনে নিবেদিত।</p>
                </div>
                <!-- Quick Links -->
                <div class="col-md-4 mb-4">
                    <h5>দ্রুত লিঙ্ক</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">হোম</a></li>
                        <li><a href="#courses" class="text-decoration-none">কোর্স</a></li>
                        <li><a href="#about" class="text-decoration-none">আমাদের সম্পর্কে</a></li>
                        <li><a href="#contact" class="text-decoration-none">যোগাযোগ</a></li>
                        <li><a href="#" class="text-decoration-none">প্রাইভেসি পলিসি</a></li>
                        <li><a href="#" class="text-decoration-none">টার্মস অব সার্ভিস</a></li>
                    </ul>
                </div>
                <!-- Contact Info -->
                <div class="col-md-4 mb-4">
                    <h5>যোগাযোগ</h5>
                    <p>ঢাকা, বাংলাদেশ</p>
                    <p>ফোন: +৮৮-০১২৩৪৫৬৭৮৯</p>
                    <p>ইমেইল: info@modinaonlinemadrasah.com</p>
                </div>
            </div>

            <!-- Social Media -->
            <div class="row mt-4">
                <div class="col text-center social-icons">
                    <a href="#"><i class="fab fa-facebook-f text-white"></i></a>
                    <a href="#"><i class="fab fa-twitter text-white"></i></a>
                    <a href="#"><i class="fab fa-instagram text-white"></i></a>
                    <a href="#"><i class="fab fa-youtube text-white"></i></a>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="row mt-4 footer-bottom text-center">
                <div class="col">
                    <p class="mb-0">© ২০২৫ মদিনা অনলাইন মাদরাসা. সকল স্বত্ব সংরক্ষিত।</p>
                    <p class="mb-0">Developed by <a href="#" class="text-decoration-none">Your Name</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script>
        // GSAP animations for various sections (mobile and desktop)
        let mm = gsap.matchMedia();
        mm.add("(max-width: 767px)", () => {
            gsap.from(".hero h1", {
                duration: 1.5,
                y: -30,
                opacity: 0,
                ease: "power3.out"
            });
            gsap.from(".hero p", {
                duration: 1.5,
                y: 30,
                opacity: 0,
                ease: "power3.out",
                delay: 0.5
            });
            gsap.from("#featured-courses .card", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 1
            });
            gsap.from("#teachers .card", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 1.3
            });
            gsap.from("#why-choose-us .col", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 1.8
            });
            gsap.from("#donation .card", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 2.3
            });
            gsap.from("#events .card", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 2.8
            });
            gsap.from("#testimonials .carousel-item", {
                duration: 0.5,
                opacity: 0,
                y: 30,
                stagger: 0.3,
                delay: 1.5
            });
            gsap.from("#faq .accordion-item", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 3.8
            });
            gsap.from("#about h2", {
                duration: 1,
                x: -30,
                opacity: 0,
                delay: 4.3
            });
            gsap.from("#contact h2", {
                duration: 1,
                x: 30,
                opacity: 0,
                delay: 4.8
            });
        });
        mm.add("(min-width: 768px)", () => {
            gsap.from(".hero h1", {
                duration: 1.5,
                y: -50,
                opacity: 0,
                ease: "power3.out"
            });
            gsap.from(".hero p", {
                duration: 1.5,
                y: 50,
                opacity: 0,
                ease: "power3.out",
                delay: 0.5
            });
            gsap.from("#featured-courses .card", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 1
            });
            gsap.from("#teachers .card", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 1.3
            });
            gsap.from("#why-choose-us .col", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 1.8
            });
            gsap.from("#donation .card", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 2.3
            });
            gsap.from("#events .card", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 2.8
            });
            gsap.from("#testimonials .carousel-item", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.3,
                delay: 3.3
            });
            gsap.from("#faq .accordion-item", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 3.8
            });
            gsap.from("#about h2", {
                duration: 1,
                x: -50,
                opacity: 0,
                delay: 4.3
            });
            gsap.from("#contact h2", {
                duration: 1,
                x: 50,
                opacity: 0,
                delay: 4.8
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let navbar = document.querySelector(".navbar");

            function updateNavbar() {
                if (window.scrollY > 50) {
                    navbar.classList.remove("navbar-transparent");
                    navbar.classList.add("navbar-solid");
                } else {
                    navbar.classList.remove("navbar-solid");
                    navbar.classList.add("navbar-transparent");
                }
            }

            if (window.innerWidth > 991) {
                navbar.classList.add("navbar-transparent");
                window.addEventListener("scroll", updateNavbar);
            }
        });
    </script>
</body>

</html>
