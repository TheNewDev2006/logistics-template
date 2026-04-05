<!DOCTYPE html>
<html lang="en">
<x-head />

<body>

    <x-loader />
    <x-sidebar />

    <x-headers.header-3 />

    @yield('content')

    <x-footers.footer />

    <x-scroll-to-top />
    <x-search-popup />

    <x-scripts />
</body>

</html>
