@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Shop' subtitle='Shop' />


    <!-- Promo Section End -->

    <section class="shop-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pe-4">
                    <div class="shop-wrapper">
                        <div class="shop-filters d-sm-flex justify-content-between">
                            <div class="result d-sm-flex align-items-center">
                                <p class="m-0">Showing Result:</p>
                                <select class="tv-select" name="shop-result" id="result-select">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>

                            </div>
                            <div class="filter d-flex">
                                <select name="shop-result" class="tv-select" id="result-sort">
                                    <option value="latest">Sort by Latest</option>
                                    <option value="popular">Sort by Popular</option>
                                    <option value="rated">Sort by Rated</option>
                                    <option value="low-price">Sort by low Price</option>
                                    <option value="high-price">Sort by high Price</option>
                                </select>
                                <div class="d-none d-sm-flex ms-3">
                                    <a href="#" class="icon border rounded-1 bg-primary me-3"><i
                                            class="fa-solid fa-border-all"></i></a>
                                    <a href="#" class="icon border rounded-1 bg-shade"><i
                                            class="fa-solid fa-bars"></i></a>
                                </div>
                            </div>
                        </div> <!-- Shop Header End -->
                        <div class="row products mt-5">
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <div class="badge text-uppercase">New</div>
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop1.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">A Design
                                                Manifesto</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop8.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Clean Water safe
                                                life</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop2.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">3d Dinning Table
                                                Pro</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop5.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Vintage Canvas
                                                Travel Backpack</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <div class="badge text-uppercase">Top</div>
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop4.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Turf Shoe Nike
                                                Mercurial Vapor</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop6.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Ultra-Soft
                                                Knitted Throw Blanket</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <div class="badge text-uppercase">New</div>
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop7.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Elegant Stainless
                                                Steel
                                                Wristwatch</a></h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <div class="badge text-uppercase">New</div>
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop9.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Natural Glow
                                                Hydrating Face
                                                Cream</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop1.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Handmade Ceramic
                                                Coffee Mug</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop2.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Wireless
                                                Noise-Cancelling
                                                Headphones</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <div class="badge text-uppercase">Popular</div>
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop3.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Modern Minimalist
                                                Leather Wallet</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-xl-4 col-md-6 col-sm-6">
                                <div class="product-entry shadow-sm">
                                    <div
                                        class="product-thumb position-relative swiper-initialized swiper-vertical swiper-pointer-events swiper-free-mode swiper-watch-progress swiper-backface-hidden">
                                        <div class="badge text-uppercase">New</div>
                                        <a href="{{ route('single-product') }}"><img class="img-fluid"
                                                src="{{ asset('images/shop4.jpg') }}" alt="Product"></a>
                                        <div class="product-cta">
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Wishlist"><i class="fa-regular fa-heart"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Compare"><i class="fa-regular fa-eye"></i></a>
                                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="left"
                                                title="Add to Cart"><i class="fa-solid fa-basket-shopping"></i></a>
                                        </div>
                                        <span class="swiper-notification" aria-live="assertive"
                                            aria-atomic="true"></span>
                                    </div>
                                    <div class="product-txt">
                                        <h3 class="text-nowrap"><a href="{{ route('single-product') }}">Classic Cotton
                                                Crewneck T-Shirt</a>
                                        </h3>
                                        <div class="d-flex justify-content-between">
                                            <div class="price">$27.00 <del>$45.24</del></div>
                                            <div class="ratings">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Product End -->
                            <div class="col-lg-12">
                                <div class="pager text-center mt-4">
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
                </div>
                <div class="col-lg-3">
                    <aside class="sidebar product-sidebar">
                        <div class="widget search-widget">
                            <form action="#" class="position-relative">
                                @csrf
                                <input type="search" placeholder="Enter keyword">
                                <button class="btn btn-dark position-absolute"><i class="fa fa-search"></i></button>
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
                            <h3 class="widget-title">Popular Products</h3>
                            <div class="widget-inner">
                                <div class="ls-entry d-flex">
                                    <img width="80" src="{{ asset('images/sh-s1.jpg') }}" alt=""
                                        class="img-fluid rounded-2">
                                    <div class="ls-info ms-3">
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <h6><a href="{{ route('single-product') }}">Tshirt for young</a></h6>
                                        <span>$99.00</span>
                                    </div>
                                </div> <!-- Recent Product End -->
                                <div class="ls-entry d-flex">
                                    <img width="80" src="{{ asset('images/sh-s2.jpg') }}" alt=""
                                        class="img-fluid rounded-2">
                                    <div class="ls-info ms-3">
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <h6><a href="{{ route('single-product') }}">Jute Bag for style</a></h6>
                                        <span>$99.00</span>
                                    </div>
                                </div> <!-- Recent Product End -->
                                <div class="ls-entry d-flex">
                                    <img width="80" src="{{ asset('images/sh-s3.jpg') }}" alt=""
                                        class="img-fluid rounded-2">
                                    <div class="ls-info ms-3">
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                        <h6><a href="{{ route('single-product') }}">Winter Jacket for style</a></h6>
                                        <span>$99.00</span>
                                    </div>
                                </div> <!-- Recent Product End -->
                            </div>
                        </div><!-- Widget End -->
                    </aside> <!-- Sidebar End -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->

@endsection
