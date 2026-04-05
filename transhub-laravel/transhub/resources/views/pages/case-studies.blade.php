@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Case Study' subtitle='Case Study' />


    <!-- Promo Section End -->


    <section class="project-sec project-masionary sec-padding">
        <div class="container ct-container">
            <div class="d-lg-flex align-items-center justify-content-between mb-5 pb-3">
                <div class="sec-intro2">
                    <span class="sub-title2 fadeInUp single">Case Study</span>
                    <h2 class="sec-title">Explore Our Portfolio</h2>
                </div>
                <div class="portfolio-menu" data-target=".filter-container">
                    <ul class="nav gap-2">
                        <li class="nav-item">
                            <a href="#" class="nav-link active" data-filter="*">All</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-filter=".ocean">Ocean Freight</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-filter=".air">Air Freight</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-filter=".warehouse">WareHouse</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-filter=".road">Road Freight</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row gy-4 gallery-grid" id="gallery-container">
                <div class="grid-sizer"></div>
                <div class="grid-item col-xl-3 col-md-6 warehouse">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <a href="{{ route('single-casestudy') }}"><img src="{{ asset('images/port2.jpg') }}"
                                    alt="Portfolio"></a>
                        </div>
                        <div class="portfolio-info">
                            <span>Wirehouse</span>
                            <h3 class="display-4"><a href="{{ route('single-casestudy') }}">TransHub Company</a></h3>
                        </div>
                    </div>
                </div> <!-- Portfolio End -->
                <div class="grid-item col-xl-3 col-md-6 ocean">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <a href="{{ route('single-casestudy') }}"><img src="{{ asset('images/port1.jpg') }}"
                                    alt="Portfolio"></a>
                        </div>
                        <div class="portfolio-info">
                            <span>Wirehouse</span>
                            <h3 class="display-4"><a href="{{ route('single-casestudy') }}">TransHub Company</a></h3>
                        </div>
                    </div>
                </div> <!-- Portfolio End -->
                <div class="grid-item col-xl-3 col-md-6 warehouse">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <a href="{{ route('single-casestudy') }}"><img src="{{ asset('images/port2.jpg') }}"
                                    alt="Portfolio"></a>
                        </div>
                        <div class="portfolio-info">
                            <span>Wirehouse</span>
                            <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Air Freight Solution</a></h3>
                        </div>
                    </div>
                </div> <!-- Portfolio End -->
                <div class="grid-item col-xl-3 col-md-6 road">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <a href="{{ route('single-casestudy') }}"><img src="{{ asset('images/port7.jpg') }}"
                                    alt="Portfolio"></a>
                        </div>
                        <div class="portfolio-info">
                            <span>Transport</span>
                            <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Security For Cargo</a></h3>
                        </div>
                    </div>
                </div> <!-- Portfolio End -->
                <div class="grid-item col-xl-3 col-md-6 warehouse">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <a href="{{ route('single-casestudy') }}"><img src="{{ asset('images/port4.jpg') }}"
                                    alt="Portfolio"></a>
                        </div>
                        <div class="portfolio-info">
                            <span>Wirehouse</span>
                            <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Warehouse Inventory</a></h3>
                        </div>
                    </div>
                </div> <!-- Portfolio End -->
                <div class="grid-item col-xl-3 col-md-6 ocean">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <a href="{{ route('single-casestudy') }}"><img src="{{ asset('images/port5.jpg') }}"
                                    alt="Portfolio"></a>
                        </div>
                        <div class="portfolio-info">
                            <span>Ocean</span>
                            <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Ocean Inventory</a></h3>
                        </div>
                    </div>
                </div> <!-- Portfolio End -->
                <div class="grid-item col-xl-3 col-md-6 air">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <a href="{{ route('single-casestudy') }}"><img src="{{ asset('images/port6.jpg') }}"
                                    alt="Portfolio"></a>
                        </div>
                        <div class="portfolio-info">
                            <span>Wirehouse</span>
                            <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Warehouse Inventory</a></h3>
                        </div>
                    </div>
                </div> <!-- Portfolio End -->
                <div class="grid-item col-xl-3 col-md-6 air">
                    <div class="portfolio-card">
                        <div class="portfolio-img">
                            <a href="{{ route('single-casestudy') }}"><img src="{{ asset('images/port8.jpg') }}"
                                    alt="Portfolio"></a>
                        </div>
                        <div class="portfolio-info">
                            <span>Wirehouse</span>
                            <h3 class="display-4"><a href="{{ route('single-casestudy') }}">Warehouse Inventory</a></h3>
                        </div>
                    </div>
                </div> <!-- Portfolio End -->

            </div>
        </div>

    </section>
    <!-- Project Section End -->

@endsection
