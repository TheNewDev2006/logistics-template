@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Contact Us' subtitle='Contact Us' />


    <!-- Promo Section End -->

    <section class="contact-widgets bg-shade sec-padding">
        <div class="container">
            <div class="sec-intro mx-auto text-center">
                <span class="sub-title fadeInUp">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                        <path fill="#fd5523"
                            d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                        <path fill="#fd5523"
                            d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                        <path fill="#fd5523"
                            d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                    </svg>
                    Contact Us</span>
                <h2 class="sec-title">Start Your Journey with Us</h2>
            </div>
            <div class="row pt-3">
                <div class="col-lg-4">
                    <div class="contact-card d-flex">
                        <span class="icon bg-shade rounded-3">
                            <img src="{{ asset('images/icons/headphone.svg') }}" alt="">
                        </span>
                        <div class="contact-info">
                            <ul>
                                <li><strong>Phone :</strong> <a href="tel:8292393838"> +66 58 256 978</a></li>
                                <li><strong>Email :</strong> <a
                                        href="mailto:transhubinfo@gmail.com">transhubinfo@gmail.com</a>
                                </li>
                            </ul>
                            <a href="#" class="ct-url">Send your mail <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <h4 class="card-meta"> REACH US</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-card d-flex">
                        <span class="icon bg-shade rounded-3">
                            <img src="{{ asset('images/icons/watch.svg') }}" alt="">
                        </span>
                        <div class="contact-info">
                            <ul>
                                <li><strong>Mon-Sat :</strong> 07:00 am to 10:00 pm</li>
                                <li><strong>Sunday : </strong>Closed
                                </li>
                            </ul>
                            <a href="#" class="ct-url">MAKE AN APPOINTMENT <i
                                    class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <h4 class="card-meta"> oFFICE Hours</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-card d-flex">
                        <span class="icon bg-shade rounded-3">
                            <img src="{{ asset('images/icons/watch.svg') }}" alt="">
                        </span>
                        <div class="contact-info">
                            <ul>
                                <li>Germany-</li>
                                <li>75 15h Street, Office 47 Berlin,
                                </li>
                            </ul>
                            <a href="#" class="ct-url">VIEW ON MAP <i class="fa-solid fa-angles-right"></i></a>
                        </div>
                        <h4 class="card-meta"> LOCATION</h4>
                    </div>
                </div>
                <div class="col-lg-12 mt-5 text-center">
                    <h6>Social Connect:</h6>
                    <div class="social-share mt-3">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-sec sec-padding">
        <div class="container">
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
                    Get In Touch</span>
                <h2 class="sec-title">Reach out anytime for help!</h2>
            </div>
            <div class="contact-tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="hongkong-tab" data-bs-toggle="tab"
                            data-bs-target="#hongkong-tab-pane" type="button" role="tab"
                            aria-controls="hongkong-tab-pane" aria-selected="true">
                            Hong Kong
                            <i class="fa fa-angle-right"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="singapur-tab" data-bs-toggle="tab" data-bs-target="#singapur-tab-pane"
                            type="button" role="tab" aria-controls="singapur-tab-pane" aria-selected="false"
                            tabindex="-1">
                            Singapur
                            <i class="fa fa-angle-right"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="swiz-tab" data-bs-toggle="tab" data-bs-target="#swiz-tab-pane"
                            type="button" role="tab" aria-controls="swiz-tab-pane" aria-selected="false"
                            tabindex="-1">
                            Switzerland <i class="fa fa-angle-right"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="nyork-tab" data-bs-toggle="tab" data-bs-target="#nyork-tab-pane"
                            type="button" role="tab" aria-controls="nyork-tab-pane" aria-selected="false"
                            tabindex="-1">
                            New York City <i class="fa fa-angle-right"></i></button>
                    </li>
                </ul>
            </div> <!-- Event Tabs End -->
        </div>
        <div class="container-fluid">
            <div class="row contact-form-wrap">
                <div class="col-lg-4">
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade show active" id="hongkong-tab-pane" role="tabpanel"
                            aria-labelledby="hongkong-tab" tabindex="0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49668.99316628675!2d113.91297436858135!3d22.290486893598978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403e2f3cc46c69d%3A0xf9f590821892369e!2sHong%20Kong%20International%20Airport!5e0!3m2!1sen!2sbd!4v1767538516269!5m2!1sen!2sbd"
                                width="100%" height="610" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="tab-pane fade" id="singapur-tab-pane" role="tabpanel" aria-labelledby="singapur-tab"
                            tabindex="0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.197876467761!2d103.85898731090441!3d1.2714550485641694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da191f449041ab%3A0x83979ff4e063d7f!2sMarina%20South%20Pier!5e0!3m2!1sen!2sbd!4v1767538796046!5m2!1sen!2sbd"
                                width="100%" height="610" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="tab-pane fade" id="swiz-tab-pane" role="tabpanel" aria-labelledby="swiz-tab"
                            tabindex="0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247374.53153833255!2d7.823580630710671!3d46.7623682313098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47856113b01253c7%3A0xfacffb1b2f2004e6!2sTitlis%20Cliff%20Walk!5e0!3m2!1sen!2sbd!4v1767538920296!5m2!1sen!2sbd"
                                width="100%" height="610" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="tab-pane fade" id="nyork-tab-pane" role="tabpanel" aria-labelledby="nyork-tab"
                            tabindex="0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96784.38802495299!2d-74.0665899273107!3d40.70674130541376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1767538842870!5m2!1sen!2sbd"
                                width="100%" height="610" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div> <!-- Tab Content End -->
                </div>
                <div class="col-lg-8">
                    <div class="contact-form round"
                        style="background: url({{ asset('images/form-bg2.jpg') }})no-repeat center center / cover;">
                        <div class="form-inner round">
                            <form action="#">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input type="text" placeholder="Your name">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" placeholder="Your email">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" placeholder="Phone no">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <select class="tv-select" name="" id="">
                                            <option selected>Frieght Type</option>
                                            <option value="1">Frieght Sky</option>
                                            <option value="2">Frieght Ship</option>
                                            <option value="3">Frieght Road</option>
                                            <option value="4">Frieght Sky</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <select class="tv-select" name="" id="">
                                            <option selected>Load</option>
                                            <option value="1">Light Load</option>
                                            <option value="1">Regular Load</option>
                                            <option value="1">Over Load</option>
                                        </select>
                                    </div>

                                    <div class="form-group top-0 col-lg-12">
                                        <textarea name="message" id="message" placeholder="Message" rows="6"></textarea>
                                        <i class="fa fa-pen"></i>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100">Submit Request <i
                                                class="fa fa-arrow-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->

@endsection
