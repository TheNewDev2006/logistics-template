@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Case Study Details' subtitle='Case Study Details' />

    <!-- Portfolio Details Section Start -->
    <section class="case-details-page sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 pe-lg-4">
                    <article class="single-case">
                        <div class="pt-thumb">
                            <img class="img-fluid round" src="{{ asset('images/single-pt.jpg') }}" alt="Case Study">
                        </div>
                        <h3 class="display-3">Air Freight Services</h3>
                        <p>Our Ocean Freight Services offer comprehensive solutions for all your shipping needs, ensuring
                            your
                            cargo is transported efficiently and safely across the seas, giving you peace of mind and the
                            best
                            results for your business.With our Ocean Freight Services, we handle all aspects of your sea
                            shipping needs, documentation to delivery,With our Ocean Freight Services, we handle all aspects
                            of
                            your sea shipping needs.

                        </p>
                        <p>With our Ocean Freight Services, we handle all aspects of your sea shipping needs, from
                            documentation to delivery, ensuring your goods arrive on time and in excellent condition,
                            allowing
                            you to focus on your core business operations.helping you navigate the complexities of
                            international trade.</p>
                        <h3 class="display-3">
                            Project details
                        </h3>
                        <p>With our Ocean Freight Services, we handle all aspects of your sea shipping needs, from
                            documentation to delivery, ensuring your goods arrive on time and in excellent condition,
                            allowing
                            you to focus on your core business operations.helping you navigate the complexities of
                            international trade.</p>
                        <div class="d-sm-flex justify-content-between align-items-center my-5">
                            <div class="case-video position-relative">
                                <img class="round img-fluid" src="{{ asset('images/case-video.jpg') }}" alt="Video">
                                <a class="play-btn bg-primary rounded-circle text-info icon-lg"
                                    data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=wQMx7wc4jh8">
                                    <span><i class="fa fa-play"></i></span>
                                </a>
                            </div>
                            <div class="case-feature">
                                <h4>Transigo Around the World</h4>
                                <p>Three core values define the spirit of our culture </p>
                                <ul class="ct-list">
                                    <li>Ocean freight offers predictable transit times.</li>
                                    <li>It remains one of the most economical.</li>
                                    <li>Despite its scale, modern shipping companies </li>
                                    <li>We are all about quality transport company</li>
                                </ul>
                            </div>
                        </div>
                        <p>Freight forwarders often offer consolidated cargo services, which combine smaller shipments from
                            multiple companies into full containers for specific destinations. This offers cost advantages
                            similar to FCL but without needing a full container yourself.
                        </p>
                        <p>This is a cost-effective option for smaller shipments. Your goods are consolidated with other
                            shippers' cargo to fill a container. This can take longer as it involves additional han</p>
                    </article>
                </div><!-- Article  End -->
                <div class="col-lg-4">
                    <aside class="sidebar case-sidebar">
                        <div class="widget">
                            <h3 class="widget-title">Project Information</h3>
                            <div class="project-info">
                                <div class="single-pi d-flex align-items-center gap-3 bg-info border">
                                    <span class="icon bg-dark text-info rounded-circle"><i class="fa fa-user"></i></span>
                                    <div class="pi-inner">
                                        <h6>Client:</h6>
                                        <span>MSK Logistics</span>
                                    </div>
                                </div> <!-- single pi end -->
                                <div class="single-pi d-flex align-items-center gap-3 bg-info border">
                                    <span class="icon bg-dark text-info rounded-circle"><i
                                            class="fa-solid fa-location-dot"></i></span>
                                    <div class="pi-inner">
                                        <h6>Location:</h6>
                                        <span>4832 Max Street,Stamford</span>
                                    </div>
                                </div> <!-- single pi end -->
                                <div class="single-pi d-flex align-items-center gap-3 bg-info border">
                                    <span class="icon bg-dark text-info rounded-circle"><i
                                            class="fa-regular fa-calendar-days"></i></span>
                                    <div class="pi-inner">
                                        <h6>Project Date:</h6>
                                        <span>10 August, 2024</span>
                                    </div>
                                </div> <!-- single pi end -->
                                <div class="single-pi d-flex align-items-center gap-3 bg-info border">
                                    <span class="icon bg-dark text-info rounded-circle"><i
                                            class="fa fa-layer-group"></i></span>
                                    <div class="pi-inner">
                                        <h6>Catagory:</h6>
                                        <span>MKS Logistics</span>
                                    </div>
                                </div> <!-- single pi end -->
                                <div class="single-pi d-flex align-items-center gap-3 bg-info border">
                                    <span class="icon bg-dark text-info rounded-circle"><i
                                            class="fa fa-dollar-sign"></i></span>
                                    <div class="pi-inner">
                                        <h6>Cost:</h6>
                                        <span>125, 2000, 500</span>
                                    </div>
                                </div> <!-- single pi end -->
                            </div>
                        </div> <!-- Widget End -->
                        <div class="widget">
                            <h3 class="widget-title">Contact Info</h3>
                            <div class="social-contact">
                                <p><i class="me-2 fa fa-location-dot"></i>1234 King Street, Australia</p>
                                <p><i class="me-2 fa fa-phone"></i> <a href="tel://1-800-915-6270">1-800-915-6270</a></p>
                                <p><i class="me-2 fa fa-envelope-open"></i><a
                                        href="mailto://consulpro@mail.com">consulpro@mail.com</a>
                                </p>
                            </div>
                        </div>
                        <div class="widget broucher-widget">
                            <h3 class="widget-title">Brochures</h3>

                            <a href="#" class="btn btn-primary w-100"> Download Doc <i class="fa fa-download"></i></a>
                            <a href="#" class="btn btn-outline w-100">Company Profile <i
                                    class="fa fa-download"></i></a>
                        </div>
                    </aside>
                </div> <!-- Sidebar End -->
            </div>
        </div>
    </section>
    <!-- Portfolio Details Section End -->

@endsection
