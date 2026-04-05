@extends('layouts.default')
@section('title', 'TransHub - Transport & Logistics')


@section('content')

    <x-page-header title='Single Product' subtitle='Single Product' />

    <!-- Tips Section Start -->
    <section class="product-details sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="product-media d-sm-flex align-items-start py-3">
                        <div class="product-media-left position-relative">
                            <div class="swiper product-thumb">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('images/shop1.jpg') }}" alt="ProductImage">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('images/shop2.jpg') }}" alt="ProductImage">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('images/shop3.jpg') }}" alt="ProductImage">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('images/shop4.jpg') }}" alt="ProductImage">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('images/shop5.jpg') }}" alt="ProductImage">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-fluid" src="{{ asset('images/shop6.jpg') }}" alt="ProductImage">
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- Product Thumbs -->
                        </div>
                        <!-- Swiper -->
                        <div class="swiper coverItem">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('images/shop1.jpg') }}" alt="ProductMainImage">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('images/shop2.jpg') }}" alt="ProductMainImage">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('images/shop3.jpg') }}" alt="ProductMainImage">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('images/shop4.jpg') }}" alt="ProductMainImage">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('images/shop1.jpg') }}" alt="ProductMainImage">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('images/shop2.jpg') }}" alt="ProductMainImage">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid" src="{{ asset('images/shop3.jpg') }}" alt="ProductMainImage">
                                </div>
                            </div>
                        </div>
                        <!-- Product Cover End -->
                    </div>
                </div> <!-- col end -->
                <div class="col-xl-6 mt-5 mt-xl-0">
                    <div class="product-info ps-lg-4">
                        <h2 class="display-3">Le Skinny De Jeanne Crop</h2>
                        <div class="d-flex justify-content-between my-3">
                            <h3 class="product-price display-5"><span class="currency">$</span>329.99</h3>
                            <div class="reviews">
                                <div class="d-flex">

                                    <div class="ratings">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <span class="text-body-alt">(0 Reviews)</span>
                                </div>
                            </div>
                        </div>
                        <p>Over the past decade, e-sports have exploded in popularity, reaching a massive global audience.
                            Major tournaments are
                            held in arenas that rival those of traditional sports, attracting thousands of spectators in
                            person
                            and millions</p>


                        <div class="d-sm-flex my-4 align-items-end cart-number gap-3">
                            <div class="quantity d-flex align-items-center">
                                <input type="button" value="-" class="qty_button minus">
                                <input type="number" class="input-text qty text" step="1" placeholder="1"
                                    name="quantity">
                                <input type="button" value="+" class="qty_button plus">
                            </div>
                            <button class="btn btn-primary">Add to Cart</button>
                        </div>
                        <div class="product-meta mt-4">
                            <p class="sku"><strong>SKU:</strong> GJGH578KHL</p>
                            <p class="sku"><strong>Category:</strong> Sports Fashion</p>
                            <p class="sku"><strong>Tags:</strong> Jersy, Sports</p>
                            <p class="sku"><i class="fa-regular fa-clock"></i><strong class="ms-3">Estimate
                                    Delivery:</strong> 21-28 Nov, 2023</p>
                            <p class="sku"><i class="fa-regular fa-calendar"></i><strong class="ms-3">Delivers
                                    In:</strong> 3-7 Working Days</p>
                        </div>
                        <div class="payment-method d-sm-flex bg-shade p-3 border rounded-2 mt-4">
                            <span class="display-6">Checkout with :</span>
                            <div class="pay-options ms-3 d-sm-flex justify-content-between w-100">
                                <a href="#"><img class="img-fluid" src="{{ asset('images/jcb.png') }}"
                                        alt=""></a>
                                <a href="#"><img class="img-fluid" src="{{ asset('images/stripe.png') }}"
                                        alt=""></a>
                                <a href="#"><img class="img-fluid" src="{{ asset('images/mastercard.png') }}"
                                        alt=""></a>
                                <a href="#"><img class="img-fluid" src="{{ asset('images/gpay.png') }}"
                                        alt=""></a>
                                <a href="#"><img class="img-fluid" src="{{ asset('images/skrill.png') }}"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div><!-- col end -->
            </div>
        </div>
    </section>
    <!-- Tips Section End -->

    <!-- Product Details Section Start -->
    <section class="product-details pb-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-tab">
                        <ul class="nav nav-tabs border-0 rounded-pill justify-content-center" id="myTab"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" type="button" role="tab"
                                    aria-controls="description" aria-selected="true">description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="additional-info-tab" data-bs-toggle="tab"
                                    data-bs-target="#additional-info" type="button" role="tab"
                                    aria-controls="additional-info" aria-selected="false">additional info</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                                    type="button" role="tab" aria-controls="reviews"
                                    aria-selected="false">reviews</button>
                            </li>

                        </ul>
                        <div class="tab-content  mt-5" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                            ut
                                            aliquip ex ea commodo consequat. Duis
                                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla
                                            pariatur. Excepteur sint
                                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                            id est
                                            laborum.</p>

                                        <h3 class="mt-5 display-5 mb-4">Main features</h3>
                                        <ul>
                                            <li>Nemo enim ipsam voluptatem quia voluptas sit</li>
                                            <li>Ut enim ad minima veniam, quis nostrum exercitationem</li>
                                            <li>We duis aute irure dolor in reprehenderit in voluptate</li>
                                            <li>At vero eos et accusamus et iusto odio dignissimos</li>
                                            <li>Omnis voluptas assumenda est omnis dolor</li>
                                            <li>Quis autem vel eum iure reprehenderit qui in ea voluptate</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-5 text-end">
                                        <img class="img-fluid" src="{{ asset('images/tab-image.jpg') }}"
                                            alt="Tab Image">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="additional-info" role="tabpanel"
                                aria-labelledby="additional-info-tab">
                                <div class="product-additional-info">
                                    <div class="item">
                                        <label class="h5">Weight</label>
                                        <span>1.25 kg</span>
                                    </div>
                                    <div class="item">
                                        <label class="h5">Dimensions</label>
                                        <span>90 x 60 x 90 cm</span>
                                    </div>
                                    <div class="item">
                                        <label class="h5">Size</label>
                                        <span>XS, S, M, L, XL</span>
                                    </div>
                                    <div class="item">
                                        <label class="h5">Color</label>
                                        <span>Black, Orange, White</span>
                                    </div>
                                    <div class="item">
                                        <label class="h5">Storage</label>
                                        <span>Relaxed fit shirt-style dress with a rugged</span>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <h6>There are no reviews yet.</h6>
                                <p>Be The First To Review <a class="fw-5" href="{{ route('single-product') }}">“Le
                                        Skinny De Jeanne
                                        Crop”</a></p>
                                <p>Your email address will not be published. Required fields are marked *</p>

                                <div class="ratings">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                </div>
                                <div class="ratings-form contact-form2 mt-5">
                                    <form action="#">
                                        @csrf
                                        <div class="form-group half-form">
                                            <label for="name">Name*</label>
                                            <input id="name" placeholder="John Doe" type="text" required>
                                        </div>
                                        <div class="form-group half-form">
                                            <label for="email">Name*</label>
                                            <input id="email" placeholder="example@gmail.com" type="email"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="comments">Write Your Review*</label>
                                            <textarea name="comments" id="comments" cols="30" rows="6" placeholder="your comments here..."></textarea>
                                        </div>
                                        <div class="form-group checkbox-group">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Save my name, email, and
                                                website in
                                                this browser for the next time I comment.</label>
                                        </div>
                                        <button class="btn btn-dark text-primary">Submit Now</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

@endsection
