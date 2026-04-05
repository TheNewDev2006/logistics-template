@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Single Service' subtitle='Single Service' />

    <!-- Services Section Start -->
    <div class="single-service bg-shade sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-thumb">
                        <img src="{{ asset('images/single-service.jpg') }}" alt="Service" class="img-fluid round">
                    </div>
                    <h2 class="display-3">International Transport Services</h2>
                    <p>Our Ocean Freight Services offer comprehensive solutions for all your shipping needs, ensuring your
                        cargo is transported efficiently and safely across the seas, giving you peace of mind and the best
                        results for your business.With our Ocean Freight Services, we handle all aspects of your sea
                        shipping
                        needs, documentation to delivery,With our Ocean Freight Services, we handle all aspects of your sea
                        shipping needs.

                    </p>
                    <p>With our Ocean Freight Services, we handle all aspects of your sea shipping needs, from documentation
                        to delivery, ensuring your goods arrive on time and in excellent condition, allowing you to focus on
                        your core business operations.helping you navigate the complexities of international trade.</p>
                    <h3 class="display-3">Why Choose Our Services</h3>
                    <p>Our Ocean Freight Services offer comprehensive solutions for all your shipping needs, ensuring your
                        cargo is transported efficiently and safely across the seas, giving you peace of mind and the best
                        results for your business.With our Ocean Freight Services, we handle all aspects of your sea
                        shipping
                        needs, documentation to</p>
                    <div class="d-sm-flex  list-single">
                        <ul class="ct-list">
                            <li>Ocean freight offers predictable transit times and schedules.</li>
                            <li>
                                It remains one of the most economical ways to transport. </li>
                            <li>Despite its scale, modern shipping companies are increasingly.</li>
                        </ul>
                        <ul class="ct-list">
                            <li>Sky freight offers predictable transit times and schedules.</li>
                            <li>It remains one of the most economical ways to transport. </li>
                            <li>We are doing scale, modern shipping companies are increasingly.</li>
                        </ul>
                    </div>
                    <div class="d-sm-flex gap-5 gallery-single mb-5 pt-2">
                        <img src="{{ asset('images/serv-g1.jpg') }}" alt="" class="img-fluid round">
                        <img src="{{ asset('images/serv-g2.jpg') }}" alt="" class="img-fluid round">
                    </div>
                    <p>Our Ocean Freight Services offer comprehensive solutions for all your shipping needs, ensuring your
                        cargo is transported efficiently and safely across the seas, giving you peace of mind and the best
                        results for your business.With our Ocean Freight Services, we handle all aspects of your sea
                        shipping
                        needs, documentation to delivery,With our Ocean Freight Services, we handle all aspects of your sea
                        shipping needs.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section End -->

    <!-- Brands Section End -->
    <section class="brands-sec bg-cover jarallax" data-jarallax data-speed=".4">
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
    </section>
    <!-- Brands Section Start -->


    <!-- FAQ Section Start -->
    <section class="faq-sec faq-sec4 sec-padding">
        <div class="container">
            <div class="sec-intro mx-auto text-center">
                <h2 class="sec-title">Frequently Asked Questions</h2>
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
