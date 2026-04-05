<section class="promo-sec bg-cover jarallax" data-jarallax data-speed=".4">
    <img src="{{ asset('images/promo.jpg') }}" alt="" class="jarallax-img">
    <div class="parallax-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="promo-wrap">
                    <h1 class="display-2 text-info">{!! $title ?? 'Welcome' !!}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $subtitle ?? 'Go to home' }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
