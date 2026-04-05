<header class="header header-default">
    <div class="sticky-height"></div>
    <div class="header-wrapper">
        <!-- Navigation Menu Start -->
        <div class="header-nav-wrapper header-sticky">
            <nav class="navbar navbar-expand-xl">
                <div class="container">
                    <a href="{{ route('index') }}" class="navbar-brand">
                        <img src="{{ asset('images/logo.svg') }}" alt="logo" class="img-fluid">
                    </a>
                    <button class="navbar-toggler offcanvas-nav-btn" type="button">
                        Menu <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" fill="none"
                            viewBox="0 0 14 12">
                            <path fill="#020e28"
                                d="M0 .75Q.063.063.75 0h12.5q.687.063.75.75-.063.687-.75.75H.75Q.063 1.437 0 .75m0 5Q.063 5.063.75 5h12.5q.687.063.75.75-.063.687-.75.75H.75Q.063 6.437 0 5.75m13.25 5.75H.75q-.687-.063-.75-.75.063-.687.75-.75h12.5q.687.063.75.75-.063.687-.75.75" />
                        </svg>
                    </button>
                    <div class="nav-cta d-none d-md-flex order-lg-3">
                        <div class="d-flex align-items-center justify-content-between gap-2">
                            <a href="{{ route('cart') }}" class="icon-lg position-relative bg-light rounded-circle"><i
                                    class="fa fa-shopping-cart"></i><sup>2</sup></a>
                            <a href="#" class="icon-lg bg-light rounded-circle" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvas-search"><i class="fa fa-search"></i></a>
                            <button class="burger-menu icon-lg bg-light rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" fill="none"
                                    viewBox="0 0 14 12">
                                    <path fill="#020e28"
                                        d="M0 .75Q.063.063.75 0h12.5q.687.063.75.75-.063.687-.75.75H.75Q.063 1.437 0 .75m0 5Q.063 5.063.75 5h12.5q.687.063.75.75-.063.687-.75.75H.75Q.063 6.437 0 5.75m13.25 5.75H.75q-.687-.063-.75-.75.063-.687.75-.75h12.5q.687.063.75.75-.063.687-.75.75" />
                                </svg>
                            </button>
                            <a href="{{ route('quote') }}" class="btn btn-primary"> Free Quote <i
                                    class="fa fa-arrow-right"></i><span></span>
                            </a>

                        </div>
                    </div>
                    <div class="offcanvas offcanvas-start offcanvas-nav">
                        <div class="offcanvas-header">
                            <a href="{{ route('index') }}" class="text-inverse"><img
                                    src="{{ asset('images/logo.svg') }}" alt="Logo"></a>
                            <button type="button" class="btn-close bg-primary" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body pt-0 align-items-center justify-content-between">
                            {{-- import menu --}}
                            <x-menu-list />
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
