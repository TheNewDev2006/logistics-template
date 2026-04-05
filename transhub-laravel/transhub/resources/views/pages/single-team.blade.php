@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Team Details' subtitle='Team Details' />

    <!-- Team Section Start -->

    <section class="team-details-page main sec-padding">
        <div class="container">
            <div class="row gx-lg-5">
                <div class="col-lg-4 mb-5 mb-md-0">
                    <aside class="team-sidebar round overflow-hidden">
                        <div class="team-media">
                            <img src="{{ asset('images/single-team.jpg') }}" class="img-fluid" alt="Team">
                        </div>

                        <div class="team-info-wrap">
                            <div class="team-head border-bottom">
                                <span>Technical Lead</span>
                                <h3 class="display-4 mb-0">Brooklyn Simmons</h3>
                            </div>
                            <div class="team-info">
                                <div class="ts-single">
                                    <h4 class="display-5">Phone Number</h4>
                                    <span><a href="tel:+12318005678990">+ (123) 1800-567-8990</a></span>
                                </div>
                                <div class="ts-single">
                                    <h4 class="display-5">Email Address</h4>
                                    <span><a href="mailto:no-reply@transhub.com">no-reply@transhub.com</a></span>
                                </div>
                                <div class="ts-single">
                                    <h4 class="display-5">Experience</h4>
                                    <span>12 Years</span>
                                </div>
                            </div>
                            <div class="ts-share">
                                <h6>Social Media:</h6>
                                <div class="social-share mt-3">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="team-p-details">
                        <h3 class="display-3">Personal Information</h3>
                        <p>Logistics team member supports the supply chain process by coordinating deliveries, managing
                            Logistic shipping documentation, ensuringtimely deliveries. They may also perform other tasks
                            such
                            as Logistics professionals typically work in warehouse, but they may as



                        </p>
                        <p>Many companies rely on the transport of goods for the day-to-day operation of their business.
                            Logistic should integrate a the supply chainfunctions, and bridge the gap businesses within the
                            logistics arena need to hire employees as with the right skill sets Here a the key skillsin
                            highest
                            demand right now. between locations which will then be a catalyst job creation. Globally, the
                            industry has seen immense growth in recent times, but to ensure these growth areas remain
                            efficient, logistics professionals need to be well trained and experienced.</p>


                        <h3 class="display-3">Professional skills</h3>
                        <p>Bring to the table win-win at survival strategies win to ensure with proactiv other domination
                            going with forward, a new normal that has evolved from generation X is on the runway heading.
                        </p>
                        <div class="skill">
                            <!-- progress start -->
                            <div class="progress">
                                <div class="meta">Quality Control
                                    System</div>
                                <div class="progress-bar" data-progress="95%" style="width: 95%;"><span>95%</span>
                                </div>
                            </div>
                            <!-- progress end -->

                            <!-- progress start -->
                            <div class="progress">
                                <div class="meta">Professional Staff</div>
                                <div class="progress-bar" data-progress="75%" style="width: 75%;"><span>75%</span>
                                </div>
                            </div>
                            <!-- progress end -->

                            <!-- progress start -->
                            <div class="progress">
                                <div class="meta">Efficiency
                                    delivery</div>
                                <div class="progress-bar" data-progress="98%" style="width: 98%;"><span>98%</span>
                                </div>
                            </div>
                            <!-- progress end -->
                        </div>
                        <!--Skill End-->
                        <h3 class="display-3">Markable points of our work</h3>
                        <p>Your warehouse management team is expected to be proficient in utilising the various layout
                            options
                            to optimise workflows, enabling the development of warehouse processes and standard operating
                        </p>
                        <ul class="ct-list">
                            <li>Performance based logistics Defense acquisition strategy for cost-effective weapon system
                                support</li>
                            <li>Legal demand by a shipper or consignee against a carrier in respect of damage or loss to a
                                shipment</li>
                            <li>Function of understanding stock mix of a company and the different demands on that stock
                            </li>
                        </ul>
                        <div class="contact-form round mt-5">
                            <h3 class="display-3">Contact Us</h3>
                            <form action="#">
                                @csrf
                                <div class="d-sm-flex gap-4 justify-content-between">
                                    <div class="form-group half-group">
                                        <input type="text" placeholder="Your Name" required="">
                                    </div>
                                    <div class="form-group half-group">
                                        <input type="text" placeholder="Your Phone" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Your Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Your Subject" required="">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" name="message" id="message" placeholder="How can we help you? feel free to get in touch!*"></textarea>
                                </div>
                                <button class="btn btn-primary">Send a message <i class="fa fa-arrow-right"></i>
                                    <span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section End -->

@endsection
