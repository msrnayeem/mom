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
    </style>
</head>

<body>

    @include('front_components.main_navbar')

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
                            <a href="{{ route('details') }}" class="btn btn-primary">আরো জানুন</a>
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
                            <a href="{{ route('details') }}" class="btn btn-primary">আরো জানুন</a>
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
                            <a href="{{ route('details') }}" class="btn btn-primary">আরো জানুন</a>
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

    @include('front_components.main_footer')

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

</body>

</html>
