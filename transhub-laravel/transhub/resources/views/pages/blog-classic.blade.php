@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Blog Classic' subtitle='Blog Classic' />

    <!-- Blog Section Start -->
    <section class="blog-standard-sec sec-padding">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-8 pe-lg-4">
                    <div class="blog-wrap">
                        <article class="blog-standard round">
                            <div class="blog-thumb zoom-th round">
                                <a href="{{ route('single-post') }}"><img src="{{ asset('images/bl-lg1.jpg') }}"
                                        alt="Blog" class="img-fluid round"></a>
                                <div class="blog-meta">
                                    <span> <i class="fa-regular fa-user"></i><a href="#">By admin</a></span>
                                    <span> <i class="fa fa-calendar"></i> 08 October, 2025</span>
                                    <span> <i class="fa fa-tags"></i> <a href="#">Air Fright</a></span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="display-3"><a href="{{ route('single-post') }}">Focus logistics secure new
                                        landmark
                                        Contracts</a>
                                </h3>
                                <p>Air freight is the transportation of goods by aircraft. It's a mode of shipping that
                                    prioritizes speed and efficiency, making it ideal for time-sensitive and high-value
                                    cargo.
                                    While it is generally more expensive than ocean freight, the rapid delivery time often
                                    justifies the cost for many businesses.</p>
                                <a href="{{ route('single-post') }}" class="btn btn-primary">Free Quote <i
                                        class="fa fa-arrow-right"></i><span></span></a>
                            </div>
                        </article> <!-- article end -->
                        <article class="blog-standard round ">
                            <div class="blog-thumb zoom-th round">
                                <a href="{{ route('single-post') }}"><img src="{{ asset('images/bl-lg2.jpg') }}"
                                        alt="Blog" class="img-fluid round"></a>
                                <div class="blog-meta">
                                    <span> <i class="fa-regular fa-user"></i><a href="#">By admin</a></span>
                                    <span> <i class="fa fa-calendar"></i> 08 October, 2025</span>
                                    <span> <i class="fa fa-tags"></i> <a href="#">Air Fright</a></span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="display-3"><a href="{{ route('single-post') }}">Green Logistics Solutions for a
                                        Greener
                                        Future</a>
                                </h3>
                                <p>Air freight is the transportation of goods by aircraft. It's a mode of shipping that
                                    prioritizes speed and efficiency, making it ideal for time-sensitive and high-value
                                    cargo.
                                    While it is generally more expensive than ocean freight, the rapid delivery time often
                                    justifies the cost for many businesses.</p>
                                <a href="{{ route('single-post') }}" class="btn btn-primary">Free Quote <i
                                        class="fa fa-arrow-right"></i><span></span></a>
                            </div>
                        </article> <!-- article end -->

                        <article class="blog-standard round ">
                            <div class="blog-thumb zoom-th round">
                                <a href="{{ route('single-post') }}"><img src="{{ asset('images/bl-lg3.jpg') }}"
                                        alt="Blog" class="img-fluid round"></a>
                                <div class="blog-meta">
                                    <span> <i class="fa-regular fa-user"></i><a href="#">By admin</a></span>
                                    <span> <i class="fa fa-calendar"></i> 08 October, 2025</span>
                                    <span> <i class="fa fa-tags"></i> <a href="#">Air Fright</a></span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="display-3"><a href="{{ route('single-post') }}">The Future of Logistics Emb
                                        racing
                                        Technology</a>
                                </h3>
                                <p>Air freight is the transportation of goods by aircraft. It's a mode of shipping that
                                    prioritizes speed and efficiency, making it ideal for time-sensitive and high-value
                                    cargo.
                                    While it is generally more expensive than ocean freight, the rapid delivery time often
                                    justifies the cost for many businesses.</p>
                                <a href="{{ route('single-post') }}" class="btn btn-primary">Free Quote <i
                                        class="fa fa-arrow-right"></i>
                                    <span></span></a>
                            </div>
                        </article> <!-- article end -->
                    </div>
                    <div class="col-lg-12">
                        <div class="pager text-center mt-5">
                            <a href="#" class="next-btn"> <i class="fa fa-arrow-left"></i>
                            </a>
                            <span class="current">1</span>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#" class="prev-btn"> <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- Article End -->

                <div class="col-lg-4">
                    <aside class="sidebar">
                        <div class="widget search-widget">
                            <form action="#" class="position-relative">
                                @csrf
                                <input type="search" placeholder="Enter keyword">
                                <button class="btn btn-primary position-absolute"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget category-widget">
                            <h3 class="widget-title">Popular Categories</h3>
                            <div class="widget-inner">
                                <ul>
                                    <li><a href="#">Air Freight</a>(18)</li>
                                    <li><a href="#">Road Transport</a>(2)</li>
                                    <li><a href="#">Rail Transport</a>(12)</li>
                                    <li><a href="#">Cargo Services</a>(14)</li>
                                    <li><a href="#">Warehouse</a>(19)</li>
                                    <li><a href="#">Ocean Freight</a>(18)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget-title">Latest From Blog</h3>
                            <div class="widget-inner">
                                <div class="ls-entry d-flex">
                                    <img width="85" src="{{ asset('images/ls1.png') }}" alt="Course"
                                        class="img-fluid rounded-2">
                                    <div class="ls-info ms-3">
                                        <span class="entry-meta"><i class="fa-regular fa-calendar-days"></i>22 Oct,
                                            2025</span>
                                        <h6><a href="{{ route('single-post') }}">TranHub Embraces AI for Optimized
                                                Route</a></h6>
                                    </div>
                                </div> <!-- Recent Entry End -->
                                <div class="ls-entry d-flex">
                                    <img width="85" src="{{ asset('images/ls2.png') }}" alt="Course"
                                        class="img-fluid rounded-2">
                                    <div class="ls-info ms-3">
                                        <span class="entry-meta"><i class="fa-regular fa-calendar-days"></i>22 Oct,
                                            2025</span>
                                        <h6><a href="{{ route('single-post') }}">How is Adapting to Meet Growing
                                                Demand</a></h6>
                                    </div>
                                </div> <!-- Recent Entry End -->
                                <div class="ls-entry d-flex">
                                    <img width="85" src="{{ asset('images/ls3.png') }}" alt="Course"
                                        class="img-fluid rounded-2">
                                    <div class="ls-info ms-3">
                                        <span class="entry-meta"><i class="fa-regular fa-calendar-days"></i>22 Oct,
                                            2025</span>
                                        <h6><a href="{{ route('single-post') }}">TransHub Commitment to Eco-Friendly</a>
                                        </h6>
                                    </div>
                                </div> <!-- Recent Entry End -->
                            </div>
                        </div><!-- Widget End -->

                        <div class="widget tagcloud">
                            <h3 class="widget-title">Popular Keyword</h3>
                            <div class="widget-inner">
                                <a href="#">Logistics Services</a>
                                <a href="#">Warehouse</a>
                                <a href="#">air fright</a>
                                <a href="#">Ocean Freight</a>
                                <a href="#">Global</a>
                                <a href="#">community</a>
                            </div>
                        </div><!-- Widget End -->

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
