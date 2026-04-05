@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Pricing' subtitle='Pricing' />

    <!-- Pricing Section Start -->
    <section class="pricing-sec bg-shade sec-padding position-relative">
        <div class="container">
            <div class="sec-intro full mx-auto text-center">
                <span class="sub-title fadeInUp">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="18" fill="none" viewBox="0 0 30 18">
                        <path fill="#fd5523"
                            d="M8.125 15.429h-2.5a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h2.5c.166 0 .325.068.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.188m20.313 0h-1.563a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h1.044l.842-4.618c-.011-2.364-1.973-4.382-4.386-4.382h-4.104l-1.989 9h3.593c.166 0 .325.068.442.188a.653.653 0 0 1 0 .91.62.62 0 0 1-.442.188H17.5a.61.61 0 0 1-.488-.242.65.65 0 0 1-.122-.543L19.162 4.36a.65.65 0 0 1 .22-.361.6.6 0 0 1 .39-.14h4.603C27.476 3.857 30 6.452 30 9.642l-.949 5.261a.65.65 0 0 1-.214.377.6.6 0 0 1-.4.148" />
                        <path fill="#fd5523"
                            d="M24.375 18c-1.722 0-3.125-1.441-3.125-3.214s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S26.098 18 24.375 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928-.841-1.929-1.875-1.929M10.625 18C8.903 18 7.5 16.559 7.5 14.786s1.403-3.215 3.125-3.215c1.723 0 3.125 1.442 3.125 3.215S12.348 18 10.625 18m0-5.143c-1.034 0-1.875.866-1.875 1.929s.841 1.928 1.875 1.928 1.875-.865 1.875-1.928c0-1.064-.841-1.929-1.875-1.929m-2.5-9h-5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.188h5c.166 0 .325.068.442.189a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-6.25a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.91.62.62 0 0 1 .442-.187h6.25c.166 0 .325.067.442.188a.65.65 0 0 1 0 .909.62.62 0 0 1-.442.188m0 3.857h-7.5a.62.62 0 0 1-.442-.188.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188h7.5c.166 0 .325.067.442.188a.65.65 0 0 1 0 .91.62.62 0 0 1-.442.187" />
                        <path fill="#fd5523"
                            d="M17.5 15.429h-4.375a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909.62.62 0 0 1 .442-.188H17l2.84-12.857H5.625a.62.62 0 0 1-.442-.189.65.65 0 0 1 0-.909A.62.62 0 0 1 5.625 0h15a.61.61 0 0 1 .488.241.65.65 0 0 1 .122.543L18.11 14.927a.65.65 0 0 1-.22.36.6.6 0 0 1-.39.142" />
                    </svg>
                    Pricing Plan</span>
                <h2 class="sec-title">Choose The Right Plan
                    For Growth</h2>
            </div>
            <div class="tv-pricing-nav-wrapper position-relative">
                <label for="m" class="tv-toggler" id="tv-nav-monthly">
                    Monthly
                </label>
                <div class="tv-toggle-input-wrap">
                    <input type="checkbox" id="tv-switcher-input" class="tv-input-check">
                    <b class="tv-switch-toggle"></b>
                </div>
                <label for="year" class="tv-toggler is-active" id="tv-nav-yearly">
                    Yearly
                    <sup class="text-primary">Save 25%</sup>
                </label>
            </div>
            <div id="tv-tab-monthly" class="tv-pricing-tab-item tv-tab-hide">
                <div class="row gy-4 gy-lg-0 mt-5 justify-content-md-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card bg-info rounded-2">
                            <div class="pricing-head">
                                <h3 class="display-5">Basic Plan</h3>
                                <p>Perfect for startups needing features to get started smoothly.</p>
                                <span class="display-2">$20 <sub>/per month</sub></span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Branding and design Identity </li>
                                    <li>Web site Marketing Solutions</li>
                                    <li>Limited keyword analysis</li>
                                    <li>24/7 system Monitoring</li>
                                    <li>Dedicated IP Address</li>
                                </ul>

                                <a href="#" class="btn d-block mt-5 btn-dark">Get Started <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card bg-info rounded-2">
                            <div class="pricing-head">
                                <h3 class="display-5">Standard Plan</h3>
                                <p>Perfect for startups needing features to get started smoothly.</p>
                                <span class="display-2">$120 <sub>/per month</sub></span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Branding and design Identity </li>
                                    <li>Web site Marketing Solutions</li>
                                    <li>Limited keyword analysis</li>
                                    <li>24/7 system Monitoring</li>
                                    <li>Dedicated IP Address</li>
                                </ul>

                                <a href="#" class="btn d-block mt-5 btn-dark">Get Started <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card bg-info rounded-2">
                            <div class="pricing-head">
                                <h3 class="display-5">Premium Plan</h3>
                                <p>Perfect for startups needing features to get started smoothly.</p>
                                <span class="display-2">$220 <sub>/per month</sub></span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Branding and design Identity </li>
                                    <li>Web site Marketing Solutions</li>
                                    <li>Limited keyword analysis</li>
                                    <li>24/7 system Monitoring</li>
                                    <li>Dedicated IP Address</li>
                                </ul>

                                <a href="#" class="btn d-block mt-5 btn-dark">Get Started <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--  tab end -->
            <div id="tv-tab-yearly" class="tv-pricing-tab-item">
                <div class="row gy-4 gy-lg-0 mt-5 justify-content-md-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card bg-info rounded-2">
                            <div class="pricing-head">
                                <h3 class="display-5">Basic Plan</h3>
                                <p>Perfect for startups needing features to get started smoothly.</p>
                                <span class="display-2">$150 <sub>/per year</sub></span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Branding and design Identity </li>
                                    <li>Web site Marketing Solutions</li>
                                    <li>Limited keyword analysis</li>
                                    <li>24/7 system Monitoring</li>
                                    <li>Dedicated IP Address</li>
                                </ul>

                                <a href="#" class="btn d-block mt-5 btn-dark">Get Started <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card bg-info rounded-2">
                            <div class="pricing-head">
                                <h3 class="display-5">Standard Plan</h3>
                                <p>Perfect for startups needing features to get started smoothly.</p>
                                <span class="display-2">$250 <sub>/per year</sub></span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Branding and design Identity </li>
                                    <li>Web site Marketing Solutions</li>
                                    <li>Limited keyword analysis</li>
                                    <li>24/7 system Monitoring</li>
                                    <li>Dedicated IP Address</li>
                                </ul>

                                <a href="#" class="btn d-block mt-5 btn-dark">Get Started <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="pricing-card bg-info rounded-2">
                            <div class="pricing-head">
                                <h3 class="display-5">Premium Plan</h3>
                                <p>Perfect for startups needing features to get started smoothly.</p>
                                <span class="display-2">$450 <sub>/per year</sub></span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Branding and design Identity </li>
                                    <li>Web site Marketing Solutions</li>
                                    <li>Limited keyword analysis</li>
                                    <li>24/7 system Monitoring</li>
                                    <li>Dedicated IP Address</li>
                                </ul>

                                <a href="#" class="btn d-block mt-5 btn-dark">Get Started <i
                                        class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--  tab end -->
        </div>
    </section>
    <!-- Pricing Section End -->

@endsection
