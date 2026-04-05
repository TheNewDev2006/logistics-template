@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Services 2' subtitle='Services 2' />

    <!-- Services Section Start -->
    <div class="services-sec bg-shade sec-padding">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="service-card bg-white round">
                        <div class="service-head d-flex gap-3 align-items-center">
                            <img src="{{ asset('images/icons/serv1.png') }}" alt="Icon">
                            <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">Multimodal Transport</a></h3>
                        </div>
                        <div class="service-thumb">
                            <img class="img-fluid" src="{{ asset('images/serv1.png') }}" alt="">
                        </div>
                        <p>For over two decades, been the backbone of seamless global logistics delivering goods
                            across continents with unwavering</p>
                        <div class="service-footer border-top">
                            <a class="custom-btn" href="{{ route('single-service') }}"><span class="icon rounded-3"><i
                                        class="fa fa-arrow-right"></i></span>View Details</a>
                        </div>
                    </div>
                </div> <!-- Service End -->
                <div class="col-lg-4">
                    <div class="service-card bg-white round">
                        <div class="service-head d-flex gap-3 align-items-center">
                            <img src="{{ asset('images/icons/serv2.png') }}" alt="Icon">
                            <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">E-commerce Logistics</a></h3>
                        </div>
                        <div class="service-thumb">
                            <img class="img-fluid" src="{{ asset('images/serv2.png') }}" alt="">
                        </div>
                        <p>For over two decades, been the backbone of seamless global logistics delivering goods
                            across continents with unwavering</p>
                        <div class="service-footer border-top">
                            <a class="custom-btn" href="{{ route('single-service') }}"><span class="icon rounded-3"><i
                                        class="fa fa-arrow-right"></i></span>View Details</a>
                        </div>
                    </div>
                </div> <!-- Service End -->
                <div class="col-lg-4">
                    <div class="service-card bg-white round">
                        <div class="service-head d-flex gap-3 align-items-center">
                            <img src="{{ asset('images/icons/serv3.png') }}" alt="Icon">
                            <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">Warehousing</a></h3>
                        </div>
                        <div class="service-thumb">
                            <img class="img-fluid" src="{{ asset('images/serv3.png') }}" alt="">
                        </div>
                        <p>For over two decades, been the backbone of seamless global logistics delivering goods
                            across continents with unwavering</p>
                        <div class="service-footer border-top">
                            <a class="custom-btn" href="{{ route('single-service') }}"><span class="icon rounded-3"><i
                                        class="fa fa-arrow-right"></i></span>View Details</a>
                        </div>
                    </div>
                </div> <!-- Service End -->
                <div class="col-lg-4">
                    <div class="service-card bg-white round">
                        <div class="service-head d-flex gap-3 align-items-center">
                            <img src="{{ asset('images/icons/serv4.png') }}" alt="Icon">
                            <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">Courier Services</a></h3>
                        </div>
                        <div class="service-thumb">
                            <img class="img-fluid" src="{{ asset('images/serv4.png') }}" alt="">
                        </div>
                        <p>For over two decades, been the backbone of seamless global logistics delivering goods
                            across continents with unwavering</p>
                        <div class="service-footer border-top">
                            <a class="custom-btn" href="{{ route('single-service') }}"><span class="icon rounded-3"><i
                                        class="fa fa-arrow-right"></i></span>View Details</a>
                        </div>
                    </div>
                </div> <!-- Service End -->
                <div class="col-lg-4">
                    <div class="service-card bg-white round">
                        <div class="service-head d-flex gap-3 align-items-center">
                            <img src="{{ asset('images/icons/serv1.png') }}" alt="Icon">
                            <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">E-commerce Logistics</a></h3>
                        </div>
                        <div class="service-thumb">
                            <img class="img-fluid" src="{{ asset('images/serv1.png') }}" alt="">
                        </div>
                        <p>For over two decades, been the backbone of seamless global logistics delivering goods
                            across continents with unwavering</p>
                        <div class="service-footer border-top">
                            <a class="custom-btn" href="{{ route('single-service') }}"><span class="icon rounded-3"><i
                                        class="fa fa-arrow-right"></i></span>View Details</a>
                        </div>
                    </div>
                </div> <!-- Service End -->
                <div class="col-lg-4">
                    <div class="service-card bg-white round">
                        <div class="service-head d-flex gap-3 align-items-center">
                            <img src="{{ asset('images/icons/serv2.png') }}" alt="Icon">
                            <h3 class="display-4 m-0"><a href="{{ route('single-service') }}">E-commerce Logistics</a></h3>
                        </div>
                        <div class="service-thumb">
                            <img class="img-fluid" src="{{ asset('images/serv2.png') }}" alt="">
                        </div>
                        <p>For over two decades, been the backbone of seamless global logistics delivering goods
                            across continents with unwavering</p>
                        <div class="service-footer border-top">
                            <a class="custom-btn" href="{{ route('single-service') }}"><span class="icon rounded-3"><i
                                        class="fa fa-arrow-right"></i></span>View Details</a>
                        </div>
                    </div>
                </div> <!-- Service End -->
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- About Section Start -->
    <section class="why-us3 sec-padding jarallax" data-jarallax data-speed=".4">
        <img src="{{ asset('images/whu-us-bg.jpg') }}" class="jarallax-img" alt="">
        <img src="{{ asset('images/slide-anim.png') }}" class="abs-img  bottom-0" alt="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-txt">
                        <div class="sec-intro">
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
                                Why We Special</span>
                            <h2 class="sec-title text-white">We Want to Make a Good Impact on Your Business</h2>
                            <p>At Transhub, we are committed to revolutionizing the transportation industry through
                                innovative
                                solutions and unparalleled service.</p>
                        </div>
                        <div class="success-stat">
                            <div class="progress">
                                <div class="meta">Shipping</div>
                                <div class="progress-bar" data-progress="90%" style="width: 90%;">
                                    <span>90%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="meta">Successful Delivery</div>
                                <div class="progress-bar" data-progress="95%" style="width: 95%;">
                                    <span>95%</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="meta">Managment</div>
                                <div class="progress-bar" data-progress="91%" style="width: 91%;">
                                    <span>91%</span>
                                </div>
                            </div>
                        </div>
                        <div class="quick-call d-flex align-items-center">
                            <span class="bg-info icon-lg rounded-circle text-primary"><i
                                    class="fa-solid fa-phone-volume"></i></span>
                            <div class="conn-txt ms-3">
                                <p class="m-0">Call Us Any Time:</p>
                                <a class="h6 text-info" href="tel:148359505285">+148 359 505 285</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-form rounded-4 fadeInUp">
                        <h3>Request Quote Form</h3>
                        <form action="#">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label for="name">Full Name</label>
                                    <input id="name" type="text" placeholder="Full Name">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="email">Email Address</label>
                                    <input id="email" type="email" placeholder="Email">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="phone">Phone</label>
                                    <input id="phone" type="text" placeholder="+554 6487 244">
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="name">Delivery City</label>
                                    <select class="tv-select" name="City" id="city">
                                        <option value="1">Denvar</option>
                                        <option value="2">Sydney</option>
                                        <option value="3">London</option>
                                        <option value="4">Korachi</option>
                                        <option value="5">Chittagong</option>
                                        <option value="6">Denvar</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="name">Freight</label>
                                    <select class="tv-select" name="City" id="city">
                                        <option value="1">Air Freight</option>
                                        <option value="2">General Cargo</option>
                                        <option value="3">Bulk Cargo</option>
                                        <option value="4">Oversized Cargo</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="name">Weight</label>
                                    <select class="tv-select" name="City" id="city">
                                        <option value="1">Weight</option>
                                        <option value="2">Sydney</option>
                                        <option value="3">London</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary">Submit Request <i class="fa fa-arrow-right"></i>
                                        <span></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    <!-- FAQ Section Start -->
    <section class="faq-sec sec-padding position-relative">
        <div class="container">
            <div class="sec-intro mx-auto text-center">
                <span class="sub-title2 fadeInUp">our Expert Team Members</span>
                <h2 class="sec-title">What Details Are Required for a Quote?</h2>
            </div>
            <div class="row gy-4">
                <div class="col-lg-7">
                    <div class="faq-accordion rounded-4" id="tv-accordion">
                        <div class="accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button display-5" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How can I track my shipment?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#tv-accordion">
                                <div class="accordion-body">
                                    <p>You can easily track your shipment by entering your Tracking ID into our online
                                        tracking
                                        tool. Once submitted, you’ll receive real‑time updates on your shipment’s location,
                                        delivery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button display-5 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    How do I get in touch with customer support?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#tv-accordion">
                                <div class="accordion-body">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of timely
                                        delivery and have established a comprehensive approach to ensure that all projects
                                        are
                                        completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button display-5 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    What if my shipment is delayed or lost?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#tv-accordion">
                                <div class="accordion-body">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of timely
                                        delivery and have established a comprehensive approach to ensure that all projects
                                        are
                                        completed</p>
                                </div>
                            </div>
                        </div> <!-- Item End -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button display-5 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Can I schedule recurring shipments?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#tv-accordion">
                                <div class="accordion-body">
                                    <p>Meeting project deadlines is a top priority. We understand the importance of timely
                                        delivery and have established a comprehensive approach to ensure that all projects
                                        are
                                        completed</p>
                                </div>
                            </div>
                        </div> <!-- Item End -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button display-5 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                    aria-controls="collapseFive">
                                    What is your pricing model?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#tv-accordion">
                                <div class="accordion-body">
                                    <p>Teachers play a central role in education. They impart knowledge, facilitate
                                        learning, and
                                        help students develop
                                        critical thinking skills. Teachers also contribute to the social and emotional
                                        development
                                        of
                                        students.</p>
                                </div>
                            </div>
                        </div> <!-- Item End -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form rounded-4 position-relative">
                        <h3 class="display-4">Make An Appointment</h3>
                        <div class="form-group">
                            <input type="text" placeholder="Your name">
                            <i class="fa-regular fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Your email">
                            <i class="fa-regular fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone Number">
                            <i class="fa-regular fa-headphones"></i>
                        </div>
                        <div class="form-group">
                            <select name="Frieght" id="Frieght">
                                <option value="1">Frieght Sky</option>
                                <option value="1">Frieght Ship</option>
                                <option value="1">Frieght Road</option>
                                <option value="1">Frieght Sky</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Total Unit">
                            <i class="fa-regular fa-clipboard"></i>
                        </div>
                        <button class="btn btn-primary btn-lg w-100 mt-2">Book an Appointment <i
                                class="fa fa-arrow-right"></i>
                            <span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ Section End -->

@endsection
