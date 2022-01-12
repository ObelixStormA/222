<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('master.links')

<body>

<!-- ======= Header ======= -->
@include('master.header')

<!-- ======= Hero Section ======= -->

    @yield('content')



<!-- ======= Footer ======= -->
@include('master.footer')

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

@include('master.jslinks')

</body>

</html>
