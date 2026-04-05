@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Blog Grid' subtitle='Blog Grid' />

    <!-- Blog Section Start -->
    <section class="blog-page sec-padding">
        <div class="container">
            <div class="row gy-xl-5">
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
                <div class="col-xl-4 col-md-6">
                    <div class="blog-entry fadeInUp" data-delay=".2">
                        <div class="entry-thumb">
                            <a href="{{ route('single-post') }}"><img src="{{ asset('images/blog-n1.jpg') }}"
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
                            <a href="{{ route('single-post') }}"><img src="{{ asset('images/blog-n2.jpg') }}"
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
                            <a href="{{ route('single-post') }}"><img src="{{ asset('images/blog-n3.jpg') }}"
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
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
