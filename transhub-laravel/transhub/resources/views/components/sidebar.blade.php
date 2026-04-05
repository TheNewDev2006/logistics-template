<!-- Canvas Menu Start -->
<div class="canvas-menu d-flex flex-column">
    <div class="d-flex justify-content-between w-100 mb-4">
        <!-- Logo Here -->
        <div class="logo">
            <img src="{{ asset('images/logo.svg') }}" alt="Logo">
        </div>
        <!-- Close Button -->
        <button type="button" class="canvas-close" aria-label="Close">
            <svg width="33" height="34" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.19141 9.80762L27.5762 28.1924" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M9.19141 28.1924L27.5762 9.80761" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>
    <p>We are a reliable transport agency providing safe and timely logistics solutions.
        Our services cover local and long-distance transportation needs.</p>
    <!-- Vertical Menu Start-->

    <div class="mt-3">
        <h5>Our Services</h5>
        <nav class="mt-4">
            <ul class="vertical-menu">
                <li><a href="{{ route('single-service') }}">Air Fright</a></li>
                <li><a href="{{ route('single-service') }}">Warehousing</a></li>
                <li><a href="{{ route('single-service') }}">Sea Fright</a></li>
                <li><a href="{{ route('single-service') }}">Road Fright</a></li>
                <li><a href="{{ route('single-service') }}">Customs Brokerage</a></li>
            </ul>
        </nav>
    </div>

    <!-- social icons -->
    <div class="social-share null mt-3">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <a href="{{ route('quote') }}" class="btn btn-primary mt-5"> Get a Quote <i
            class="fa fa-arrow-right"></i><span></span></a>
</div>
<!-- Canvas Menu End -->
