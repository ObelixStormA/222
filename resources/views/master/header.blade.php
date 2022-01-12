<header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

        <h1 class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/img/22.png')}}"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->


        <nav class="nav-menu d-none d-lg-block">
            <ul>
                @yield('menu')
            </ul>
        </nav><!-- .nav-menu -->
        <h1 class="logo float-right"><a href="{{route('home')}}"><img src="{{asset('assets/img/33.png')}}"></a></h1>

    </div>

</header><!-- End Header -->
