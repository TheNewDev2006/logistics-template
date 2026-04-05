<ul class="navbar-nav mx-auto align-items-lg-center">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">Home</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('index') }}">Home 1</a></li>
            <li><a class="dropdown-item" href="{{ route('index-2') }}">Home 2</a></li>
            <li><a class="dropdown-item" href="{{ route('index-3') }}">Home 3
                    <span class="badge bg-dark ms-2">New</span>
                </a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('services') }}" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">Services</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('services') }}">Services</a></li>
            <li><a class="dropdown-item" href="{{ route('services-2') }}">Services 2</a></li>
            <li><a class="dropdown-item" href="{{ route('single-service') }}">Services Details</a></li>

        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">Pages</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('about') }}">About Us</a></li>
            <li><a class="dropdown-item" href="{{ route('quote') }}">Request Quote</a></li>
            <li><a class="dropdown-item" href="{{ route('tracking') }}">Tracking </a></li>
            <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="{{ route('team') }}">Team</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Our Team</li>
                    <li>
                        <a class="dropdown-item" href="{{ route('team') }}">Our Team</a>
                        <a class="dropdown-item" href="{{ route('single-team') }}">Team Details</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#">Shop</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Shop Pages</li>
                    <li>
                        <a class="dropdown-item" href="{{ route('shop') }}">Shop</a>
                        <a class="dropdown-item" href="{{ route('single-product') }}">Product Details</a>
                        <a class="dropdown-item" href="{{ route('cart') }}">Cart</a>
                        <a class="dropdown-item" href="{{ route('checkout') }}">Checkout</a>
                        <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                        <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="{{ route('pricing') }}">Pricing</a></li>
            <li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
            <li><a class="dropdown-item" href="{{ route('404') }}">404 Error</a></li>

        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('case-studies') }}" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">Projects</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('case-studies') }}">Projects</a></li>
            <li><a class="dropdown-item" href="{{ route('case-studies-2') }}">Projects 2</a></li>
            <li><a class="dropdown-item" href="{{ route('single-casestudy') }}">Project Details</a></li>

        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('blog') }}" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">Blog</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('blog') }}">Blog Grid 01</a></li>
            <li><a class="dropdown-item" href="{{ route('blog-2') }}">Blog Grid 02</a></li>
            <li><a class="dropdown-item" href="{{ route('blog-classic') }}">Blog Classic</a></li>
            <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle" href="#">Blog Details</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-header">Blog Single</li>
                    <li>
                        <a class="dropdown-item" href="{{ route('single-post') }}">Single Post 01</a>
                        <a class="dropdown-item" href="{{ route('single-post-2') }}">Single Post 02</a>

                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
    </li>
</ul>
