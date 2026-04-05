@extends('layouts.multipage.style-1')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <!-- Header End -->
    <section class="slider-section position-relative">
        <img src="{{ asset('images/slide-sh1.png') }}" alt="" class="abs-img top-0" aria-hidden="true">
        <img src="{{ asset('images/tranck-v.png') }}" alt="Truck delivery illustration" class="anim-img moveXS bottom-0">

        <div class="container-fluid p-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="hero-content position-relative">
                        <div class="trust-badge">
                            <img class="abs-img" src="{{ asset('images/text-rotate.png') }}" alt=""
                                aria-hidden="true">
                            <div class="icon rounded-circle">
                                <img src="{{ asset('images/icons/boomark.png') }}" alt="Bookmark icon">
                            </div>
                        </div>
                        <p class="sub-title h4">Logistic Transportation</p>
                        <h1 class="text-info fw-bold">The Bridge to Your Logistics Success</h1>

                        <div class="slide-meta">
                            <p class="h6 text-info">Optimizing processes and leveraging technology, businesses can gain a
                                competitive.</p>
                            <a href="{{ route('contact') }}" class="btn btn-primary">Let's get Started <i
                                    class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="hero-slider-wrap overflow-hidden position-relative">
                        <div class="hero-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide-img">
                                        <img src="{{ asset('images/slide-m1.jpg') }}" alt="Logistics warehouse management">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-img">
                                        <img src="{{ asset('images/slide-m2.jpg') }}" alt="Global shipping transport">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stat-card bg-white d-none d-sm-flex align-items-center">
                            <div class="customer-imgs d-flex">
                                <img src="{{ asset('images/cl1.png') }}" alt="Client logo">
                                <img src="{{ asset('images/cl2.png') }}" alt="Client logo">
                                <img src="{{ asset('images/cl3.png') }}" alt="Client logo">
                                <img src="{{ asset('images/cl4.png') }}" alt="Client logo">
                            </div>
                            <div class="stat-info">
                                <span class="display-5 purecounter text-primary" data-purecounter-end="2800000"
                                    data-purecounter-currency=" "></span>
                                <h2 class="h5">Orders Complete</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="custom-nav">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Slider Section End -->

    <!-- About Section Start -->
    <section class="about-section position-relative sec-padding">
        <img src="{{ asset('images/about-sh.png') }}" alt="shape" class="anim-img moveY">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-media position-relative">
                        <div class="about-m1">
                            <img class="round img-fluid" src="{{ asset('images/about-1.png') }}" alt="">
                            <div class="ab-stat bg-primary round">
                                <span class="display-1 purecounter" data-purecounter-end="2.1" data-purecounter-decimals="1"
                                    data-purecounter-currency=" ">2.1</span> <span class="unit">M</span>
                                <p>Deliver Goods Every Weeks</p>
                            </div>
                        </div>
                        <div class="about-m2">
                            <div class="ab-stat2 bg-dark text-info round">
                                <span class="display-1 purecounter" data-purecounter-end="5"
                                    data-purecounter-decimals="0">5</span> <span class="unit">M</span>
                                <p>Happy Customer</p>
                            </div>
                            <img class="img-fluid" src="{{ asset('images/about-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
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
                            Who we are</span>
                        <h2 class="sec-title">The Advantages of Our logistic Transport</h2>
                        <p>In a free hour when our power of choice is untram fm melled and when nothing prevents our being
                            able to do what we to be welcomed fkjngn ff and every pain avoidedThe Advantages of Our logistic
                            Transport.</p>
                        <div class="d-sm-flex gap-4 about-feat border-bottom">
                            <div class="ab-item d-flex align-items-center gap-3">
                                <img src="{{ asset('images/ab-icon1.png') }}" alt="">
                                <h3 class="display-4">Packaging and crating</h3>
                            </div>
                            <div class="ab-item d-flex align-items-center gap-3">
                                <img src="{{ asset('images/ab-icon2.png') }}" alt="">
                                <h3 class="display-4">Certified & Awards winner</h3>
                            </div>
                        </div>
                        <ul class="check">
                            <li>We will never compromise the safety of our people</li>
                            <li>With over four decades of experience providing solutions</li>
                        </ul>
                        <div class="d-sm-flex align-items-center about-footer gap-5 mt-5">
                            <a href="{{ route('about') }}" class="btn btn-primary">About More <i
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

    <!-- Services Section Start -->
    <section class="services-sec overflow-hidden position-relative bg-shade sec-padding">
        <div class="container position-relative">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div class="sec-intro">
                    <span class="sub-title fadeInUp"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="18" fill="none" viewBox="0 0 30 18">
                            <path fill="#fd5523"
                                d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                            <path fill="#fd5523"
                                d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                            <path fill="#fd5523"
                                d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                        </svg> What to expect</span>
                    <h2 class="sec-title">Reliable Freight Services</h2>
                </div>
                <div class="header-slider-nav fadeInUp">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="container ct-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-carousel swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-card bg-white round">
                                    <div class="service-head d-flex gap-3 align-items-center">
                                        <img src="{{ asset('images/icons/serv1.png') }}" alt="Icon">
                                        <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">Multimodal
                                                Transport</a></h3>
                                    </div>
                                    <div class="service-thumb">
                                        <img class="img-fluid" src="{{ asset('images/serv1.png') }}" alt="">
                                    </div>
                                    <p>For over two decades, been the backbone of seamless global logistics delivering goods
                                        across continents with unwavering</p>
                                    <div class="service-footer border-top">
                                        <a class="custom-btn" href="{{ route('single-service') }}"><span
                                                class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>View
                                            Details</a>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                            <div class="swiper-slide">
                                <div class="service-card bg-white round">
                                    <div class="service-head d-flex gap-3 align-items-center">
                                        <img src="{{ asset('images/icons/serv2.png') }}" alt="Icon">
                                        <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">E-commerce
                                                Logistics</a></h3>
                                    </div>
                                    <div class="service-thumb">
                                        <img class="img-fluid" src="{{ asset('images/serv2.png') }}" alt="">
                                    </div>
                                    <p>For over two decades, been the backbone of seamless global logistics delivering goods
                                        across continents with unwavering</p>
                                    <div class="service-footer border-top">
                                        <a class="custom-btn" href="{{ route('single-service') }}"><span
                                                class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>View
                                            Details</a>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                            <div class="swiper-slide">
                                <div class="service-card bg-white round">
                                    <div class="service-head d-flex gap-3 align-items-center">
                                        <img src="{{ asset('images/icons/serv3.png') }}" alt="Icon">
                                        <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">Warehousing</a>
                                        </h3>
                                    </div>
                                    <div class="service-thumb">
                                        <img class="img-fluid" src="{{ asset('images/serv3.png') }}" alt="">
                                    </div>
                                    <p>For over two decades, been the backbone of seamless global logistics delivering goods
                                        across continents with unwavering</p>
                                    <div class="service-footer border-top">
                                        <a class="custom-btn" href="{{ route('single-service') }}"><span
                                                class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>View
                                            Details</a>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                            <div class="swiper-slide">
                                <div class="service-card bg-white round">
                                    <div class="service-head d-flex gap-3 align-items-center">
                                        <img src="{{ asset('images/icons/serv4.png') }}" alt="Icon">
                                        <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">Courier
                                                Services</a></h3>
                                    </div>
                                    <div class="service-thumb">
                                        <img class="img-fluid" src="{{ asset('images/serv4.png') }}" alt="">
                                    </div>
                                    <p>For over two decades, been the backbone of seamless global logistics delivering goods
                                        across continents with unwavering</p>
                                    <div class="service-footer border-top">
                                        <a class="custom-btn" href="{{ route('single-service') }}"><span
                                                class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>View
                                            Details</a>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                            <div class="swiper-slide">
                                <div class="service-card bg-white round">
                                    <div class="service-head d-flex gap-3 align-items-center">
                                        <img src="{{ asset('images/icons/serv1.png') }}" alt="Icon">
                                        <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">E-commerce
                                                Logistics</a></h3>
                                    </div>
                                    <div class="service-thumb">
                                        <img class="img-fluid" src="{{ asset('images/serv1.png') }}" alt="">
                                    </div>
                                    <p>For over two decades, been the backbone of seamless global logistics delivering goods
                                        across continents with unwavering</p>
                                    <div class="service-footer border-top">
                                        <a class="custom-btn" href="{{ route('single-service') }}"><span
                                                class="icon rounded-3"><i class="fa fa-arrow-right"></i></span>View
                                            Details</a>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5 mt-3">
            <div class="d-sm-flex justify-content-between align-items-center">
                <span>Our list of services does not end here. We’ll adapt to your particular needs.</span>
                <div class="ct-pagination">
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Brands Section End -->
    <div class="brands-sec bg-cover jarallax" data-jarallax data-speed=".4">
        <img src="{{ asset('images/brand-bg.jpg') }}" alt="" class="jarallax-img">
        <div class="parallax-overly"></div>
        <div class="container ct-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brands-carousel swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#"><img src="{{ asset('images/br1.png') }}" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="{{ asset('images/br2.png') }}" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="{{ asset('images/br3.png') }}" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="{{ asset('images/br4.png') }}" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="{{ asset('images/br5.png') }}" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="{{ asset('images/br6.png') }}" alt="Brands"></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="{{ asset('images/br1.png') }}" alt="Brands"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brands Section Start -->

    <!-- Process Section Start -->
    <section class="process-sec sec-padding position-relative overflow-hidden">
        <img src="{{ asset('images/slide-sh1.png') }}" alt="shape" class="abs-img  end-0 top-0">
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

    <!-- Choose Section Start -->
    <section class="choose-sec bg-shade sec-padding position-relative">
        <img src="{{ asset('images/choose-sh.png') }}" alt="shape" class="anim-img left-bottom moveY">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-media position-relative">
                        <img class="img-fluid" src="{{ asset('images/choose-img.png') }}" alt="Choose Image">
                        <img class="abs-img img-fluid" src="{{ asset('images/choose-img2.png') }}" alt="Choose Image 2">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-content">
                        <span class="sub-title fadeInUp"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                                height="18" fill="none" viewBox="0 0 30 18">
                                <path fill="#fd5523"
                                    d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                                <path fill="#fd5523"
                                    d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                                <path fill="#fd5523"
                                    d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                            </svg>WHY CHOOSE US</span>
                        <h2 class="sec-title">Why we are considered the best in transcriptions</h2>
                        <p>Trunshub features minimal and stylish design. The theme is well crafted for all the modern
                            architect and interior design website. With Arki, it makes your logistic
                            website look even more attractive and impressive to all.</p>
                        <div class="success-stat">
                            <div class="progress">
                                <div class="meta">Wirehousing</div>
                                <div class="progress-bar" data-progress="55%" style="width: 65%;">
                                    <span>65%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="meta">Logistics</div>
                                <div class="progress-bar" data-progress="87%" style="width: 87%;">
                                    <span>87%</span>
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-flex justify-content-between mb-5">
                            <div class="choose-circle d-flex gap-2 align-items-center">
                                <div class="progress-circle-item">
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="number" data-target="95">0%</div>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="80px"
                                        height="80px">
                                        <circle cx="40" cy="40" r="30" class="progress-stroke" />
                                    </svg>
                                </div>
                                <h3 class="display-4 m-0">On-Time Delivery Rate</h3>
                            </div>

                            <div class="choose-circle d-flex gap-2 align-items-center">
                                <div class="progress-circle-item">
                                    <div class="outer">
                                        <div class="inner">
                                            <div class="number" data-target="90">0%</div>
                                        </div>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="80px"
                                        height="80px">
                                        <circle cx="40" cy="40" r="30" class="progress-stroke" />
                                    </svg>
                                </div>
                                <h3 class="display-4 m-0">Shipping Managment Rate</h3>
                            </div>

                        </div>
                        <h3 class="h5">Do you have any project on your mind? Call Us: <a class="text-primary"
                                href="tel:123456789">123
                                456789</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose Section End -->


    <!-- Stat Section End -->
    <section class="stat-sec" style="background-image: url({{ asset('images/stat-bg.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".2">
                        <img src="{{ asset('images/stat1.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white"><span class=" purecounter" data-purecounter-end="120">120
                                </span>K
                            </h3>
                            <p>Successful Transportation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".4">
                        <img src="{{ asset('images/sta2.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white"><span class=" purecounter" data-purecounter-end="50">50
                                </span>+
                            </h3>
                            <p>Expert Team Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".6">
                        <img src="{{ asset('images/stat3.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white"><span class=" purecounter" data-purecounter-end="50">50
                                </span>+
                            </h3>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-stat fadeInUp" data-delay=".8">
                        <img src="{{ asset('images/stat4.png') }}" alt="Stat">
                        <div class="stat-info">
                            <h3 class="display-3 text-white"><span class=" purecounter" data-purecounter-end="50">50
                                </span>K
                            </h3>
                            <p>Staisfied Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stat Section Start -->

    <!-- Portfolio Section Start -->
    <section class="portfolio-sec sec-padding overflow-hidden">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div class="sec-intro">
                    <span class="sub-title fadeInUp"> <svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="18" fill="none" viewBox="0 0 30 18">
                            <path fill="#fd5523"
                                d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                            <path fill="#fd5523"
                                d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                            <path fill="#fd5523"
                                d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                        </svg> What to expect</span>
                    <h2 class="sec-title">Reliable Freight Services</h2>
                </div>
                <div class="header-slider-nav">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="container ct-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-carousel swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <div class="portfolio-img">
                                        <a href="{{ route('single-casestudy') }}"><img
                                                src="{{ asset('images/port2.jpg') }}" alt="Portfolio"></a>
                                    </div>
                                    <div class="portfolio-info">
                                        <span>Wirehouse</span>
                                        <h3 class="display-4"><a href="{{ route('single-casestudy') }}">TransHub
                                                Company</a></h3>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <div class="portfolio-img">
                                        <a href="{{ route('single-casestudy') }}"><img
                                                src="{{ asset('images/port6.jpg') }}" alt="Portfolio"></a>
                                    </div>
                                    <div class="portfolio-info">
                                        <span>Wirehouse</span>
                                        <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Warehouse
                                                Inventory</a></h3>
                                    </div>
                                </div>
                            </div> <!-- Portfolio End -->
                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <div class="portfolio-img">
                                        <a href="{{ route('single-casestudy') }}"><img
                                                src="{{ asset('images/port1.jpg') }}" alt="Portfolio"></a>
                                    </div>
                                    <div class="portfolio-info">
                                        <span>Wirehouse</span>
                                        <h3 class="display-4"><a href="{{ route('single-casestudy') }}">TransHub
                                                Company</a></h3>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <div class="portfolio-img">
                                        <a href="{{ route('single-casestudy') }}"><img
                                                src="{{ asset('images/port2.jpg') }}" alt="Portfolio"></a>
                                    </div>
                                    <div class="portfolio-info">
                                        <span>Wirehouse</span>
                                        <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Air Freight
                                                Solution</a></h3>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <div class="portfolio-img">
                                        <a href="{{ route('single-casestudy') }}"><img
                                                src="{{ asset('images/port3.jpg') }}" alt="Portfolio"></a>
                                    </div>
                                    <div class="portfolio-info">
                                        <span>Transport</span>
                                        <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Security For
                                                Cargo</a></h3>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->
                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <div class="portfolio-img">
                                        <a href="{{ route('single-casestudy') }}"><img
                                                src="{{ asset('images/port4.jpg') }}" alt="Portfolio"></a>
                                    </div>
                                    <div class="portfolio-info">
                                        <span>Wirehouse</span>
                                        <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Warehouse
                                                Inventory</a></h3>
                                    </div>
                                </div>
                            </div> <!-- Slide End -->

                            <div class="swiper-slide">
                                <div class="portfolio-card">
                                    <div class="portfolio-img">
                                        <a href="{{ route('single-casestudy') }}"><img
                                                src="{{ asset('images/port8.jpg') }}" alt="Portfolio"></a>
                                    </div>
                                    <div class="portfolio-info">
                                        <span>Wirehouse</span>
                                        <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Warehouse
                                                Inventory</a></h3>
                                    </div>
                                </div>
                            </div> <!-- Portfolio End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    <!-- Tracking Section Start -->
    <section class="tracking-cta-sec jarallax" data-jarallax data-speed=".2">
        <img src="{{ asset('images/tracking-bg.jpg') }}" alt="" class="jarallax-img">
        <div class="parallax-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tracking-wrapper text-center text-info">
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
                            tracking</span>
                        <h2 class="sec-title text-info">Track the Status of Your Shipment Instantly</h2>
                        <div class="tracking-form2 fadeInUp">
                            <p>Enter your tracking number to get real-time updates on your shipment’s location and delivery
                                status.</p>
                            <form action="#"
                                class="tracking-form d-sm-flex justify-content-between align-items-center">
                                @csrf

                                <input type="text" placeholder="Enter your tracking number">
                                <button class="btn btn-primary">Track Now <i
                                        class="fa fa-arrow-right"></i><span></span></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tracking Section End -->

    <div class="tracking-form-sec">
        <div class="container">
            <div class="row trackign-form-wrapper">
                <div class="col-lg-12">
                    <div class="tracking-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="request-quote-tab" data-bs-toggle="tab"
                                    data-bs-target="#request-quote-tab-pane" type="button" role="tab"
                                    aria-controls="request-quote-tab-pane" aria-selected="true">
                                    Request Quote
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="shipment-tab" data-bs-toggle="tab"
                                    data-bs-target="#shipment-tab-pane" type="button" role="tab"
                                    aria-controls="shipment-tab-pane" aria-selected="false" tabindex="-1">
                                    Traking Shipment</button>
                            </li>


                        </ul>
                    </div> <!-- Event Tabs End -->
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade show active" id="request-quote-tab-pane" role="tabpanel"
                            aria-labelledby="request-quote-tab" tabindex="0">
                            <form action="#" class="request-form">
                                @csrf
                                <h3 class="h5">Select Your Services Type*</h3>
                                <div class="d-flex gap-3 mt-3">
                                    <div class="form-group">
                                        <input class="form-check-input" type="radio" name="freightType" id="air"
                                            value="air" checked>
                                        <label class="form-check-label" for="air">Air Freight</label>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-check-input" type="radio" name="freightType" id="ocean"
                                            value="ocean">
                                        <label class="form-check-label" for="ocean">Ocean Freight</label>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-check-input" type="radio" name="freightType" id="land"
                                            value="land">
                                        <label class="form-check-label" for="land">Land Freight</label>
                                    </div>
                                </div>
                                <div class="row form-inner">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="fname">Full Name*</label>
                                            <input id="fname" type="text" placeholder="John Doe">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="remail">Email*</label>
                                            <input id="remail" type="email" placeholder="info@transhub.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone No*</label>
                                            <input id="phone" type="text" placeholder="+986- 4459 **** ****">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="goods">Type Of Goods</label>
                                            <select name="goods" id="goods" class="tv-select">
                                                <option value="1">Heavy Goods</option>
                                                <option value="1">Light Goods</option>
                                                <option value="1">Standard</option>
                                                <option value="1">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="Dimensions">Dimensions</label>
                                            <input id="Dimensions" type="text"
                                                placeholder="Length x Width x Height x Unit">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="ship_date">Date of Shipment</label>
                                            <input type="text" value="Date" data-date-format="mm/dd/yy"
                                                id="ship_date" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3 mt-lg-5">
                                        <div class="d-sm-flex justify-content-between align-items-center contact-submit">
                                            <button class="btn btn-primary mb-4 mb-sm-0">Request A Quote <i
                                                    class="fa fa-arrow-right"></i><span></span></button>
                                            <p class="m-0">Note: Face any trouble? We wil contact with You as soon as
                                                possible ||
                                                <a href="{{ route('contact') }}" class="text-primary">Contact Our
                                                    Expert</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="shipment-tab-pane" role="tabpanel" aria-labelledby="shipment-tab"
                            tabindex="0">
                            <div class="position-relative">
                                <div class="shipment-content">
                                    <h3 class="display-4 mb-4">Tracking Shipment</h3>
                                    <p>Shipment tracking is the backbone of modern logistics. Today’s customers expect
                                        real-time
                                        visibility—knowing exactly where their cargo is, when it will arrive, and whether
                                        any
                                        delays
                                        might occur.</p>
                                    <ul class="check">
                                        <li>24/7 real-time location updates</li>
                                        <li>Interactive tracking dashboard</li>
                                        <li>Enter your tracking ID and Verify</li>
                                    </ul>
                                    <!-- Shipment tracking form or instructions -->
                                    <form action="#" class="tracking-form my-5 d-flex  gap-3">
                                        @csrf
                                        <input type="text" class="form-control"
                                            placeholder="Enter your tracking number" required>
                                        <button class="btn btn-primary" type="submit">Track Now <i
                                                class="fa fa-arrow-right"></i><span></span></button>
                                    </form>
                                    <p>Note: Face any trouble? We wil contact with You as soon as possible ||
                                        <a href="{{ route('contact') }}" class="text-primary">Contact Our Expert</a>
                                    </p>
                                </div>
                                <div class="img-end">
                                    <img class="img-fluid " src="{{ asset('images/booking.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div> <!-- Tab Content End -->
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section Start -->
    <section class="review-sec sec-padding position-relative overflow-hidden">
        <img src="{{ asset('images/plane-sh.png') }}" alt="" class="anim-img left-bottom">
        <img src="{{ asset('images/trolly-sh.png') }}" alt="" class="anim-img moveXS right-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="review-thumb">
                        <img class="img-fluid" src="{{ asset('images/testimonial-ft.jpg') }}" alt="review">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="review-wrapper">
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
                            Testimonial</span>
                        <h2 class="sec-title">Our Customers Share Their Success Stories</h2>
                        <div class="review-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <p>TransHub has transformed our supply chain with their reliable and efficient
                                            Logistics
                                            solutions. Their team is responsive and always goes the extra mile to ensure
                                            timely
                                            deliveries. Highly recommended!</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <p>Arki features minimal and stylish design. The theme is well crafted for all the
                                            modern
                                            architect and interior design website. With Arki, it makes your logistic
                                            website look even more attractive and impressive to</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="review-card">
                                        <p>TransHub has transformed our supply chain with their reliable and efficient
                                            Logistics
                                            solutions. Their team is responsive and always goes the extra mile to ensure
                                            timely
                                            deliveries. Highly recommended!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- Custom Pagination -->
                            <div class="swiper-pagination custom-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Pricing Section Start -->
    <section class="pricing-sec position-relative bg-shade sec-padding">
        <img src="{{ asset('images/pricing-sh1.png') }}" alt="" class="abs-img moveY bottom-0 start-0">
        <div class="parallax-overly"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="pricing-content">
                        <div class="mb-4">
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
                                Pricing Plan</span>
                            <h2 class="sec-title">Leading global logistic and transport agency</h2>
                            <p>With over four decades of experience providing solutions to large-scale enterprises
                                throughout
                                the
                                globe, we offer end-to-end logistics tailored for specific markets.</p>
                        </div>
                        <ul class="check">
                            <li>We will never compromise the safety of our people</li>
                            <li>With over four decades of experience providing solution</li>
                        </ul>
                        <div class="quick-call d-flex align-items-center">
                            <img src="{{ asset('images/agent.png') }}" alt="agent">
                            <div class="conn-txt ms-3">
                                <p class="m-0">Call Us for any Inquiry</p>
                                <a class="h6 text-primary" href="tel:148359505285">148 359 505 285</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="pricing-options ">
                        <div class="single-plan round border">
                            <div class="plan-head">
                                <span class="h5"> Starter</span>
                                <h3 class="display-3">$249 <sub>/Month</sub></h3>
                                <a href="#" class="pricing-btn">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                            <div class="plan-body">
                                <ul>
                                    <li>Domestic ground shipping</li>
                                    <li>Up to 100 shipments/month</li>
                                    <li>Basic analytics dashboard</li>
                                    <li class="cross">Real-time tracking</li>
                                </ul>
                            </div>
                        </div> <!-- Single Plan End -->
                        <div class="single-plan featured round border">
                            <div class="plan-head">
                                <span class="h5"> Standard</span>
                                <h3 class="display-3">$249 <sub>/Month</sub></h3>
                                <a href="#" class="pricing-btn">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                            <div class="plan-body">
                                <ul>
                                    <li>Domestic ground shipping</li>
                                    <li>Up to 100 shipments/month</li>
                                    <li>Basic analytics dashboard</li>
                                    <li class="cross">Real-time tracking</li>
                                </ul>
                            </div>
                        </div> <!-- Single Plan End -->
                        <div class="single-plan round border">
                            <div class="plan-head">
                                <span class="h5"> Premium</span>
                                <h3 class="display-3">$249 <sub>/Month</sub></h3>
                                <a href="#" class="pricing-btn">Get Started <i class="fa fa-arrow-right"></i></a>
                            </div>
                            <div class="plan-body">
                                <ul>
                                    <li>Domestic ground shipping</li>
                                    <li>Up to 100 shipments/month</li>
                                    <li>Basic analytics dashboard</li>
                                    <li class="cross">Real-time tracking</li>
                                </ul>
                            </div>
                        </div> <!-- Single Plan End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Blog Section Start -->
    <section class="blog-sec sec-padding">
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
                    </svg>
                    Latest News</span>
                <h2 class="sec-title">Read Our Latest News & Articles</h2>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-entry fadeInUp" data-delay=".2">
                        <div class="entry-thumb">
                            <a href="{{ route('single-post') }}"><img src="{{ asset('images/blog1.jpg') }}"
                                    alt="Blog"></a>
                        </div>
                        <div class="entry-meta">
                            <span><a href="#"><i class="fa-regular fa-user"></i> Adam Smith</a></span>
                            <span><i class="fa-regular fa-calendar-days"></i> 05 Dec 2025</span>
                        </div>
                        <h3 class="display-4"><a href="{{ route('single-post') }}">TranHub Named a Finalist For Year’ 25
                                Best Choice
                                Award</a></h3>
                        <a href="{{ route('single-post') }}" class="link-btn">Learn more <i
                                class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div><!--  Blog Entry End -->
                <div class="col-xl-4 col-md-6">
                    <div class="blog-entry fadeInUp" data-delay=".4">
                        <div class="entry-thumb">
                            <a href="{{ route('single-post') }}"><img src="{{ asset('images/blog2.jpg') }}"
                                    alt="Blog"></a>
                        </div>
                        <div class="entry-meta">
                            <span><a href="#"><i class="fa-regular fa-user"></i> Adam Smith</a></span>
                            <span><i class="fa-regular fa-calendar-days"></i> 05 Dec 2025</span>
                        </div>
                        <h3 class="display-4"><a href="{{ route('single-post') }}">Creating innovative strategies for
                                secured
                                Transport</a></h3>
                        <a href="{{ route('single-post') }}" class="link-btn">Learn more <i
                                class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div><!--  Blog Entry End -->
                <div class="col-xl-4 col-md-6">
                    <div class="blog-entry fadeInUp" data-delay=".6">
                        <div class="entry-thumb">
                            <a href="{{ route('single-post') }}"><img src="{{ asset('images/blog3.jpg') }}"
                                    alt="Blog"></a>
                        </div>
                        <div class="entry-meta">
                            <span><a href="#"><i class="fa-regular fa-user"></i> Adam Smith</a></span>
                            <span><i class="fa-regular fa-calendar-days"></i> 05 Dec 2025</span>
                        </div>
                        <h3 class="display-4"><a href="{{ route('single-post') }}">Innovations Shaping the Future of
                                Freight and
                                Logistics</a></h3>
                        <a href="{{ route('single-post') }}" class="link-btn">Learn more <i
                                class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                </div><!--  Blog Entry End -->
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
