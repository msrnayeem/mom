<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>মদিনা অনলাইন মাদরাসা</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Scheherazade New', serif;
            cursor: default;
            background-color: #f2f9f1;

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
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .section-title {
            margin-top: 40px;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ddd;
        }

        .instructor-img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        @media (min-width: 992px) {
            .sticky-sidebar {
                position: sticky;
                top: 20px;
            }
        }
    </style>
</head>

<body>
    @include('front_components.main_navbar')

    <section class="hero d-flex align-items-center justify-content-center">
        <div class="container text-center hero-content">
            <h1 class="display-4">আরবাইন কোর্স</h1>
            <p class="lead mt-3">আল্লাহর নামে, আরবি ভাষার মাধুর্য ও রহস্য উদঘাটনের এক অনন্য যাত্রা</p>
        </div>
    </section>




    <!-- Main Course Details Content -->
    <section id="course-details" class="py-5">
        <div class="container">
            <div class="row">
                <!-- Left Column: Full Course Details -->
                <div class="col-lg-8">
                    <!-- Course Introduction -->
                    <div class="mt-4">
                        <h2 class="section-title">কোর্স পরিচিতি</h2>
                        <p>
                            এই আরবাইন কোর্সটি এমন এক আলোকবর্তিকা যাত্রা, যেখানে প্রাচীন ইসলামী ঐতিহ্যের দীপশিখা ও আধুনিক
                            শিক্ষণ কৌশলের মিলনে আপনাকে আরবি ভাষার সূক্ষ্মতা, সুর, ছন্দ ও ব্যাকরণের নান্দনিকতা অনুধাবনে
                            সহায়তা করা হবে। প্রতিটি পাঠ যেন আপনার অন্তরে আলোর দীপ জ্বালিয়ে দেয়।
                        </p>
                    </div>

                    <!-- Detailed Curriculum -->
                    <div class="mt-4">
                        <h2 class="section-title">পাঠ্যক্রম</h2>
                        <div class="accordion" id="curriculumAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="moduleOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">
                                        Module ১: সূচনা ও প্রাথমিক ধারণা
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        আরবী বর্ণমালার সৌন্দর্য, শব্দের সুরেলা গঠন ও প্রাথমিক ব্যাকরণের মৌলিকতা।
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="moduleTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">
                                        Module ২: সুরেলা উচ্চারণ ও কথ্য প্রকাশ
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        তেলাওয়াতের মাধুর্য, সঠিক উচ্চারণ ও কথ্য অভ্যাসের নিপুণ কলা।
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="moduleThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">
                                        Module ৩: উন্নত ব্যাকরণ ও সাহিত্যিক রচনা
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#curriculumAccordion">
                                    <div class="accordion-body">
                                        উন্নত ব্যাকরণ, শব্দের অলংকার এবং রচনার সূক্ষ্মতা, যেখানে ভাষার গহীনতা ও সৌন্দর্য
                                        প্রকাশ পায়।
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Instructor Details -->
                    <div class="mt-4">
                        <h2 class="section-title">ইনস্ট্রাক্টর</h2>
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/100" alt="ইনস্ট্রাক্টর" class="instructor-img me-3">
                            <div>
                                <h5>শায়খ আলী</h5>
                                <p>
                                    শায়খ আলী, একজন প্রখ্যাত আরবি ভাষা ও ইসলামী শিক্ষার পণ্ডিত, তাঁর অভিজ্ঞতা ও মানবিক
                                    স্পর্শের মাধ্যমে শিক্ষার্থীদের অন্তরে আলোর দীপ জ্বালান। তাঁর পাঠ আপনাকে আত্মবিশ্বাস
                                    ও সত্যের পথে পরিচালিত করবে।
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class="mt-4">
                        <h2 class="section-title">মন্তব্য</h2>
                        <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p class="lead text-center">"এই কোর্সের মাধ্যমে আমার আরবী ভাষার প্রতি ভালোবাসা ও
                                        শ্রদ্ধা আরও বেড়েছে।"</p>
                                    <h6 class="text-center">- রফিকুল ইসলাম</h6>
                                </div>
                                <div class="carousel-item">
                                    <p class="lead text-center">"প্রতিটি পাঠ যেন এক নতুন দিগন্তের উন্মোচন; সত্যিই
                                        অনন্য।"</p>
                                    <h6 class="text-center">- সেলিনা পারভীন</h6>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#reviewCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#reviewCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>

                    <!-- Prerequisites -->
                    <div class="mt-4">
                        <h2 class="section-title">প্রাথমিক শর্তাবলী</h2>
                        <p>
                            কোর্সে প্রবেশের পূর্বে প্রাথমিক আরবী বর্ণমালা ও ব্যাকরণে ধারণা থাকা অত্যন্ত জরুরি – যাতে
                            শিক্ষার্থীরা শুরু থেকেই শক্ত ভিত্তিতে জ্ঞান আহরণ করতে পারেন।
                        </p>
                    </div>

                    <!-- Course Outcomes -->
                    <div class="mt-4">
                        <h2 class="section-title">কোর্সের ফলাফল ও অর্জন</h2>
                        <ul>
                            <li>আরবী ভাষার সুর, ছন্দ ও গভীরতা অনুধাবন</li>
                            <li>সঠিক উচ্চারণ ও তেলাওয়াতে দক্ষতা অর্জন</li>
                            <li>উন্নত ব্যাকরণ ও সাহিত্যিক রচনার নান্দনিকতা উপলব্ধি</li>
                            <li>ইসলামী ঐতিহ্য ও আধুনিক শিক্ষার সমন্বয়ে জীবনে এক নতুন দিগন্তের সূচনা</li>
                        </ul>
                    </div>

                    <!-- Related Courses -->
                    <div class="mt-4">
                        <h2 class="section-title">সম্পর্কিত কোর্সসমূহ</h2>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://via.placeholder.com/350x200" class="card-img-top"
                                        alt="কুরআন শিক্ষা">
                                    <div class="card-body">
                                        <h6 class="card-title">কুরআন শিক্ষা কোর্স</h6>
                                        <a href="#" class="btn btn-sm btn-outline-primary">বিস্তারিত</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://via.placeholder.com/350x200" class="card-img-top"
                                        alt="ইসলামী ইতিহাস">
                                    <div class="card-body">
                                        <h6 class="card-title">ইসলামী ইতিহাস কোর্স</h6>
                                        <a href="#" class="btn btn-sm btn-outline-primary">বিস্তারিত</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://via.placeholder.com/350x200" class="card-img-top"
                                        alt="আরবী উচ্চারণ">
                                    <div class="card-body">
                                        <h6 class="card-title">আরবী উচ্চারণ কোর্স</h6>
                                        <a href="#" class="btn btn-sm btn-outline-primary">বিস্তারিত</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Attractive Aspects -->
                    <div class="mt-4">
                        <h2 class="section-title">কোর্সের আকর্ষণীয় দিক</h2>
                        <p>
                            ইন্টারেক্টিভ লার্নিং, লাইভ সেশন, প্রশ্নোত্তর ও গ্রুপ আলোচনা – এই সব মিলিয়ে, এই কোর্সটি
                            শিক্ষার্থীদের অন্তরে আলোর দীপ জ্বালাবে, যা তাদের জীবনে স্থায়ী পরিবর্তনের সূচনা করবে।
                        </p>
                    </div>

                    <!-- FAQ -->
                    <div class="mt-4">
                        <h2 class="section-title">প্রশ্নোত্তর</h2>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faqCollapse1">
                                        কোর্সে ভর্তি হতে কী প্রয়োজন?
                                    </button>
                                </h2>
                                <div id="faqCollapse1" class="accordion-collapse collapse show"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        প্রাথমিক আরবী বর্ণমালা ও ব্যাকরণে ধারণা, পাশাপাশি আন্তরিক আগ্রহ ও অধ্যবসায়।
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq2">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
                                        কোর্সের ফি ও সময়কাল কত?
                                    </button>
                                </h2>
                                <div id="faqCollapse2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        সময়কাল ১৮ মাস এবং ফি ৫,০০০ টাকা – যাতে শিক্ষার্থীরা পর্যাপ্ত সময় নিয়ে গভীরভাবে
                                        শিখতে পারেন।
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq3">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
                                        কোর্স শেষে সার্টিফিকেট প্রদান করা হয়?
                                    </button>
                                </h2>
                                <div id="faqCollapse3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        হ্যাঁ, সফলভাবে কোর্স সম্পন্ন করলে স্বীকৃত ও মর্যাদাপূর্ণ সার্টিফিকেট প্রদান করা
                                        হবে।
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alumni Success -->
                    <div class="mt-4">
                        <h2 class="section-title">অ্যালামনি সাফল্য</h2>
                        <p>এই কোর্স থেকে উত্তীর্ণ শিক্ষার্থীরা নানা ক্ষেত্রে অনন্য সাফল্যের উদাহরণ স্থাপন করেছেন।</p>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://via.placeholder.com/350x200" class="card-img-top"
                                        alt="অ্যালামনি">
                                    <div class="card-body">
                                        <h6 class="card-title">মোঃ রফিক</h6>
                                        <p class="card-text">কোর্স শেষে নিজস্ব শিক্ষা প্রতিষ্ঠান চালু করেছেন।</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://via.placeholder.com/350x200" class="card-img-top"
                                        alt="অ্যালামনি">
                                    <div class="card-body">
                                        <h6 class="card-title">সেলিনা খাতুন</h6>
                                        <p class="card-text">অনলাইন শিক্ষায় নেতৃস্থানীয় ব্যক্তিত্ব হিসেবে নিজেকে
                                            প্রতিষ্ঠিত করেছেন।</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="https://via.placeholder.com/350x200" class="card-img-top"
                                        alt="অ্যালামনি">
                                    <div class="card-body">
                                        <h6 class="card-title">আবদুল করিম</h6>
                                        <p class="card-text">বহুমুখী আরবী প্রশিক্ষক হিসেবে খ্যাতি অর্জন করেছেন।</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Registration Process -->
                    <div class="mt-4">
                        <h2 class="section-title">নিবন্ধন প্রক্রিয়া</h2>
                        <p>
                            কোর্সে ভর্তি হতে আমাদের অনলাইন নিবন্ধন ফর্ম পূরণ করুন। বিস্তারিত পরামর্শ, লাইভ সেশন ও
                            শিক্ষকদের মেন্টরশিপের সুযোগের জন্য, নিবন্ধন করুন এবং এক নতুন শিক্ষা যাত্রার সূচনা করুন।
                        </p>
                    </div>

                    <!-- Certification & Accreditation -->
                    <div class="mt-4">
                        <h2 class="section-title">প্রত্যয়ন ও স্বীকৃতি</h2>
                        <p>
                            এই কোর্স আন্তর্জাতিক মানের শিক্ষণ পদ্ধতি ও দেশের শীর্ষস্থানীয় ইসলামী কর্তৃপক্ষ দ্বারা
                            স্বীকৃত। সফল কোর্স সমাপ্তির পর, আপনাকে উচ্চমানের সার্টিফিকেট প্রদান করা হবে যা আপনার
                            শিক্ষাগত ও পেশাগত জীবনে এক নতুন দিগন্ত উন্মোচিত করবে।
                        </p>
                    </div>
                </div>

                <!-- Sticky Sidebar -->
                <div class="col-lg-4">
                    <div class="sticky-sidebar">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h4 class="card-title">কোর্স তথ্য</h4>
                                <ul class="list-unstyled">
                                    <li><strong>সময়কাল:</strong> ১৮ মাস</li>
                                    <li><strong>ফি:</strong> ৫,০০০ টাকা</li>
                                    <li><strong>লেভেল:</strong> মধ্যম</li>
                                    <li><strong>রেটিং:</strong> ৪.৫/৫ (১০০+ রিভিউ)</li>
                                </ul>
                                <a href="#" class="btn btn-warning w-100">এখনই নিবন্ধন করুন</a>
                            </div>
                        </div>
                        <div class="mt-4">
                            <h5>শেয়ার করুন</h5>
                            <div>
                                <a href="#" class="btn btn-outline-secondary btn-sm me-1">ফেসবুক</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm me-1">টুইটার</a>
                                <a href="#" class="btn btn-outline-secondary btn-sm">ইনস্টাগ্রাম</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest Blog / Articles Section -->
    <section id="blog" class="py-5 bg-white">
        <div class="container">
            <h2 class="section-title text-center">সর্বশেষ প্রবন্ধ</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="প্রবন্ধ">
                        <div class="card-body">
                            <h5 class="card-title">ইসলামী জ্ঞান ও আধুনিক শিক্ষা</h5>
                            <p class="card-text">আধুনিক প্রযুক্তি ও ইসলামী ঐতিহ্যের মিলনে শিক্ষা পরিবর্তনের নতুন
                                দিগন্ত।</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">বিস্তারিত</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="প্রবন্ধ">
                        <div class="card-body">
                            <h5 class="card-title">আরবী ভাষা: এক অনন্য সাহিত্যের যাত্রা</h5>
                            <p class="card-text">আরবী ভাষার সমৃদ্ধ সাহিত্যিক ঐতিহ্যের নতুন অধ্যায়।</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">বিস্তারিত</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="প্রবন্ধ">
                        <div class="card-body">
                            <h5 class="card-title">ইসলামী মূল্যবোধ ও শিক্ষার গুরুত্ব</h5>
                            <p class="card-text">ইসলামী মূল্যবোধের আলোয় শিক্ষা ও চরিত্র গঠনের নতুন দৃষ্টিভঙ্গি।</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">বিস্তারিত</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">আমাদের অংশীদার</h2>
            <div class="row text-center">
                <div class="col-md-2 col-4 mb-4">
                    <img src="https://via.placeholder.com/150x80" alt="অংশীদার" class="img-fluid">
                </div>
                <div class="col-md-2 col-4 mb-4">
                    <img src="https://via.placeholder.com/150x80" alt="অংশীদার" class="img-fluid">
                </div>
                <div class="col-md-2 col-4 mb-4">
                    <img src="https://via.placeholder.com/150x80" alt="অংশীদার" class="img-fluid">
                </div>
                <div class="col-md-2 col-4 mb-4">
                    <img src="https://via.placeholder.com/150x80" alt="অংশীদার" class="img-fluid">
                </div>
                <div class="col-md-2 col-4 mb-4">
                    <img src="https://via.placeholder.com/150x80" alt="অংশীদার" class="img-fluid">
                </div>
                <div class="col-md-2 col-4 mb-4">
                    <img src="https://via.placeholder.com/150x80" alt="অংশীদার" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Call To Action / Newsletter Section -->
    <section id="cta" class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="section-title">নতুন শিক্ষা যাত্রার জন্য প্রস্তুত?</h2>
            <p class="lead">আমাদের সাথে যুক্ত হন এবং ইসলামী জ্ঞানের আলোয় আপনার জীবনকে পরিপূর্ণ করুন।</p>
            <a href="#contact" class="btn btn-warning btn-lg mt-3">এখনই নিবন্ধন করুন</a>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script>
        let mm = gsap.matchMedia();

        // Mobile devices (max-width: 767px)
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
            gsap.from(".featured-courses .card", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 1
            });
            gsap.from("#why-choose-us .col", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 1.5
            });
            gsap.from("#events .card", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 2
            });
            gsap.from("#testimonials .carousel-item", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.3,
                delay: 2.5
            });
            gsap.from("#faq .accordion-item", {
                duration: 1,
                opacity: 0,
                y: 30,
                stagger: 0.2,
                delay: 3
            });
            gsap.from("#about h2", {
                duration: 1,
                x: -30,
                opacity: 0,
                delay: 3.5
            });
            gsap.from("#contact h2", {
                duration: 1,
                x: 30,
                opacity: 0,
                delay: 4
            });
        });

        // Desktop devices (min-width: 768px)
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
            gsap.from(".featured-courses .card", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 1
            });
            gsap.from("#why-choose-us .col", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 1.5
            });
            gsap.from("#events .card", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 2
            });
            gsap.from("#testimonials .carousel-item", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.3,
                delay: 2.5
            });
            gsap.from("#faq .accordion-item", {
                duration: 1,
                opacity: 0,
                y: 50,
                stagger: 0.2,
                delay: 3
            });
            gsap.from("#about h2", {
                duration: 1,
                x: -50,
                opacity: 0,
                delay: 3.5
            });
            gsap.from("#contact h2", {
                duration: 1,
                x: 50,
                opacity: 0,
                delay: 4
            });
        });
    </script>
    <!-- Optionally include Font Awesome for social icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" crossorigin="anonymous"></script>
</body>

</html>
