@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Faq' subtitle='Faq' />

    <!-- FAQ Section Start -->
    <section class="faq-sec overflow-hidden sec-padding position-relative">
        <img src="{{ asset('images/red-container.png') }}" alt="container" class="anim-img right-top moveXS">
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
