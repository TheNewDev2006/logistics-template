@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='About Us' subtitle='About Us' />

    <!-- About Section Start -->
    <section class="about-details sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb me-lg-4">
                        <img class="img-fluid" src="{{ asset('images/about-d.jpg') }}" alt="">
                        <h2 class="display-2">Digital & Trusted Transport Logistic Company</h2>
                        <a href="#" class="btn btn-primary">Request a Quote! <i class="fa fa-arrow-right"></i>
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="row gy-4 abs-info-wrap">
                        <div class="col-lg-6 col-sm-6">
                            <div class="abs-info">
                                <h3 class="display-5">Years Of Experience</h3>
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <img src="{{ asset('images/icons/time.svg') }}" alt="About">
                                    <span class="purecounter display-1" data-purecounter-end="25">25</span>
                                </div>
                                <p>With over four decades of experience providing</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="abs-info">
                                <h3 class="display-5">Global Locations</h3>
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <img src="{{ asset('images/icons/location.svg') }}" alt="About">
                                    <span class="purecounter display-1" data-purecounter-end="88">88</span>
                                </div>
                                <p>With over four decades of experience providing</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="abs-info">
                                <h3 class="display-5">Total Employee</h3>
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <img src="{{ asset('images/icons/employee.svg') }}" alt="About">
                                    <span class="purecounter display-1" data-purecounter-end="15">25</span>
                                </div>
                                <p>With over four decades of experience providing</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="abs-info">
                                <h3 class="display-5">Annual Revenue</h3>
                                <div class="d-flex align-items-center justify-content-between border-bottom">
                                    <img src="{{ asset('images/icons/revenue.svg') }}" alt="About">
                                    <h4 class="display-1 purecounter" data-purecounter-currency=" "
                                        data-purecounter-end="7500">
                                        30</h4>
                                </div>
                                <p>With over four decades of experience providing</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Process Section Start -->
    <section class="process-sec bg-shade sec-padding position-relative overflow-hidden">
        <div class="container">
            <div class="sec-intro mx-auto text-center">
                <span class="sub-title fadeInUp"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="18"
                        fill="none" viewBox="0 0 30 18">
                        <path fill="#fd5523"
                            d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                        <path fill="#fd5523"
                            d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                        <path fill="#fd5523"
                            d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                    </svg>WORKING PROCESS</span>
                <h2 class="sec-title">Logistics Solutions to Help Businesses</h2>
            </div>
            <div class="process-wrapper d-flex justify-content-between flex-wrap mt-5">
                <div class="process-card text-center fadeInUp" data-delay=".2">
                    <span class="count mx-auto icon-lg bg-shade rounded-circle">01</span>
                    <div class="process-thumb rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/st1.png') }}" alt="request pickup">
                    </div>
                    <h3 class="display-4">Select Services</h3>
                    <p>Lorain Air freight service deliver knowledge opportunity</p>
                </div>

                <div class="process-card text-center fadeInUp" data-delay=".4">
                    <span class="count mx-auto icon-lg bg-shade rounded-circle">02</span>
                    <div class="process-thumb rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/st2.png') }}" alt="request pickup">
                    </div>
                    <h3 class="display-4">Parcel Information</h3>
                    <p>Lorain Air freight service deliver knowledge opportunity</p>
                </div>

                <div class="process-card text-center fadeInUp" data-delay=".6">
                    <span class="count mx-auto icon-lg bg-shade rounded-circle">03</span>
                    <div class="process-thumb rounded-circle d-flex align-items-center justify-content-center">
                        <img src="{{ asset('images/st3.png') }}" alt="request pickup">
                    </div>
                    <h3 class="display-4">Transportation</h3>
                    <p>Lorain Air freight service deliver knowledge opportunity</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Process Section End -->

    <!-- About Section Start -->
    <section class="about-sec3 sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-7 mx-lg-auto">
                    <div class="about-media3 position-relative">
                        <div class="feat-img position-relative">
                            <img src="{{ asset('images/about-ft.jpg') }}" class="img-fluid round" alt="about">
                            <div class="experien-stat">
                                <p class="text-info m-0"> <span class="purecounter" data-purecounter-end="25"
                                        data-purecounter-duration="0">25</span>+ Years
                                    Experience</p>
                            </div>
                        </div>
                        <div class="d-flex ab-sm-ft align-items-center gap-4">
                            <img class="round img-fluid" src="{{ asset('images/about-ft2.png') }}" alt="about">
                            <img class="img-fluid" src="{{ asset('images/about-ft3.png') }}" alt="about">
                        </div>
                        <div class="ab-stat2">
                            <img src="{{ asset('images/ab-st2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-content3">
                        <span class="sub-title fadeInUp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none"
                                viewBox="0 0 30 18">
                                <path fill="#fd5523"
                                    d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                                <path fill="#fd5523"
                                    d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                                <path fill="#fd5523"
                                    d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                            </svg>
                            About Our Company</span>
                        <h2 class="sec-title">Our services increase the productivity of your work.</h2>
                        <p>Our global logistics expertise, advanced supply chain technology & customized logistics solutions
                            will help you analyze, develop, and implement successful </p>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="mission-tab" data-bs-toggle="tab"
                                    data-bs-target="#mission" type="button" role="tab" aria-controls="mission"
                                    aria-selected="true">Our Mission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="vission-tab" data-bs-toggle="tab" data-bs-target="#vission"
                                    type="button" role="tab" aria-controls="vission" aria-selected="false">Our
                                    Vission</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history"
                                    type="button" role="tab" aria-controls="history" aria-selected="false">Our
                                    History</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="mission" role="tabpanel"
                                aria-labelledby="mission-tab">
                                <div class="d-sm-flex gap-4 mb-3">
                                    <div class="tab-img">
                                        <img src="{{ asset('images/ab-t1.png') }}" alt="tab" class="rounded-4">
                                    </div>
                                    <div class="tab-txt">
                                        <p>Logistic & transport Group is a forward-thinking real estate consultancy and
                                            investment
                                            advisory firm with over 25 years of industry experience.</p>
                                        <p>We specialize in delivering strategic guidance, project development support,</p>
                                    </div>
                                </div>
                                <h6>We specialize in delivering strategic guidance, project development support,</h6>
                            </div>
                            <div class="tab-pane fade" id="vission" role="tabpanel" aria-labelledby="vission-tab">
                                <div class="d-sm-flex gap-4 mb-3">
                                    <div class="tab-img">
                                        <img src="{{ asset('images/ab-t1.png') }}" alt="tab" class="rounded-4">
                                    </div>
                                    <div class="tab-txt">
                                        <p>Logistic & transport Group is a forward-thinking real estate consultancy and
                                            investment
                                            advisory firm with over 25 years of industry experience.</p>
                                        <p>We specialize in delivering strategic guidance, project development support,</p>
                                    </div>
                                </div>
                                <h6>We specialize in delivering strategic guidance, project development support,</h6>
                            </div>
                            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                                <div class="d-sm-flex gap-4 mb-3">
                                    <div class="tab-img">
                                        <img src="{{ asset('images/ab-t1.png') }}" alt="tab" class="rounded-4">
                                    </div>
                                    <div class="tab-txt">
                                        <p>Logistic & transport Group is a forward-thinking real estate consultancy and
                                            investment
                                            advisory firm with over 25 years of industry experience.</p>
                                        <p>We specialize in delivering strategic guidance, project development support,</p>
                                    </div>
                                </div>
                                <h6>We specialize in delivering strategic guidance, project development support,</h6>
                            </div>
                        </div> <!-- tab content end -->
                        <div class="d-sm-flex align-items-center about-cta gap-5 mt-5">
                            <a href="{{ route('about') }}" class="btn btn-primary">About Us <i
                                    class="fa fa-arrow-right"></i><span></span> </a>

                            <div class="quick-call d-flex align-items-center">
                                <span class="bg-dark icon-lg rounded-circle text-info"><i
                                        class="fa-solid fa-phone-volume"></i></span>
                                <div class="conn-txt ms-3">
                                    <p class="m-0">Call Us Any Time:</p>
                                    <a class="h6 text-primary" href="tel:148359505285">148 359 505 285</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Operation Section Start -->
    <section class="operation-sec bg-dark position-relative sec-padding">
        <div class="operate-bg jarallax bg-cover position-absolute" data-speed=".8"
            style="background-image: url({{ asset('images/opt-bg.png') }});"></div>
        <div class="container ct-container">
            <div class="row">
                <div class="col-lg-7 pe-lg-5">
                    <span class="sub-title2 fadeInUp single">Proven Success</span>
                    <h2 class="sec-title text-info">
                        We have helped clients optimize all logistics operations.</h2>
                    <div class="ct-tab nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <div class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center justify-content-between active" id="air-tab"
                                data-bs-toggle="tab" data-bs-target="#air" type="button" role="tab"
                                aria-controls="air" aria-selected="true">

                                <div class="th-info">
                                    <h4>Air Freight Solution</h4>
                                    <p>Our cargo service ensures reduced costs through efficient logis tics and streamlined
                                        operations.</p>
                                </div>
                                <a href="#" class="icon-lg rounded-circle"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center justify-content-between" id="byroad-tab"
                                data-bs-toggle="tab" data-bs-target="#byroad" type="button" role="tab"
                                aria-controls="byroad" aria-selected="false">
                                <div class="th-info">

                                    <h4>Warehouse Inventory</h4>
                                    <p>Our cargo service ensures reduced costs through efficient logis tics and streamlined
                                        operations.</p>
                                </div>
                                <a href="#" class="icon-lg rounded-circle"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="nav-item" role="presentation">
                            <div class="nav-link d-flex align-items-center justify-content-between" id="road-tab"
                                data-bs-toggle="tab" data-bs-target="#road" type="button" role="tab"
                                aria-controls="road" aria-selected="false">
                                <div class="th-info">
                                    <h4>By Road Instant Solution</h4>
                                    <p>Our cargo service ensures reduced costs through efficient logis tics and streamlined
                                        operations.</p>
                                </div>
                                <a href="#" class="icon-lg rounded-circle"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="tab-content">
                        <div class="tab-pane active" id="air" role="tabpanel" aria-labelledby="air-tab">
                            <div class="operation-content">
                                <div class="operation-thumb">
                                    <img src="{{ asset('images/tab-main1.jpg') }}" alt="tab">
                                </div>
                                <div class="opt-card bg-white  rounded-4">
                                    <span><img src="{{ asset('images/tab-icon.png') }}" alt=""></span>
                                    <h5>Parcel Information</h5>
                                    <p>Lorain Air freight service deliver knowledge opportunity</p>
                                    <a class="link-btn" href="{{ route('single-service') }}">More Details <i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="byroad" role="tabpanel" aria-labelledby="byroad-tab">
                            <div class="operation-content">
                                <div class="operation-thumb">
                                    <img src="{{ asset('images/tab-main2.jpg') }}" alt="tab">
                                </div>
                                <div class="opt-card bg-white  rounded-4">
                                    <span><img src="{{ asset('images/tab-icon.png') }}" alt=""></span>
                                    <h5>Parcel Information</h5>
                                    <p>Lorain Air freight service deliver knowledge opportunity</p>
                                    <a class="link-btn" href="{{ route('single-service') }}">More Details <i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="road" role="tabpanel" aria-labelledby="road-tab">
                            <div class="operation-content">
                                <div class="operation-thumb">
                                    <img src="{{ asset('images/tab-main3.jpg') }}" alt="tab">
                                </div>
                                <div class="opt-card bg-white  rounded-4">
                                    <span><img src="{{ asset('images/tab-icon.png') }}" alt=""></span>
                                    <h5>By Road Instant Solution</h5>
                                    <p>Lorain Air freight service deliver knowledge opportunity</p>
                                    <a class="link-btn" href="{{ route('single-service') }}">More Details <i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Operation Section End -->

    <!-- Team Section Start -->
    <section class="team-sec sec-padding position-relative">
        <img src="{{ asset('images/slide-sh1.png') }}" alt="icon" class="abs-img d-none d-lg-block top-0 stat-0">
        <div class="container">
            <div class="sec-intro mx-auto text-center">
                <span class="sub-title2 fadeInUp">our Expert Team Members</span>
                <h2 class="sec-title">Meet our Special Support Team Members!</h2>
            </div>
            <div class="row gy-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <div class="team-thumb round overflow-hidden">
                            <a href="single-team.php"><img src="{{ asset('images/tm1.jpg') }}" alt=""></a>
                            <div class="team-share">
                                <a class="icon link-icon rounded-circle" href="#"><i
                                        class="fa-solid fa-link"></i></a>
                                <div class="social-share">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3 class="display-4 mb-0"><a href="{{ route('single-team') }}">Jenny Noah</a></h3>
                            <span>Head of operations</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <div class="team-thumb round overflow-hidden">
                            <a href="single-team.php"><img src="{{ asset('images/tm2.jpg') }}" alt=""></a>
                            <div class="team-share">
                                <a class="icon link-icon rounded-circle" href="#"><i
                                        class="fa-solid fa-link"></i></a>
                                <div class="social-share">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3 class="display-4 mb-0"><a href="{{ route('single-team') }}">Jenny Mache</a></h3>
                            <span>Head of operations</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <div class="team-thumb round overflow-hidden">
                            <a href="single-team.php"><img src="{{ asset('images/tm3.jpg') }}" alt=""></a>
                            <div class="team-share">
                                <a class="icon link-icon rounded-circle" href="#"><i
                                        class="fa-solid fa-link"></i></a>
                                <div class="social-share">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3 class="display-4 mb-0"><a href="{{ route('single-team') }}">Sofia Melisa</a></h3>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-card">
                        <div class="team-thumb round overflow-hidden">
                            <a href="single-team.php"><img src="{{ asset('images/tm4.jpg') }}" alt=""></a>
                            <div class="team-share">
                                <a class="icon link-icon rounded-circle" href="#"><i
                                        class="fa-solid fa-link"></i></a>
                                <div class="social-share">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-x-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-info">
                            <h3 class="display-4 mb-0"><a href="{{ route('single-team') }}">Shane Darren</a></h3>
                            <span>Head of operations</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

@endsection
