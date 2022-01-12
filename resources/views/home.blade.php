@extends('master.template')
@section('menu')


@endsection

@section('content')

    <section id="hero"  class="align-items-center d-flex" style="text-align: center" >
        <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">



            <h1> Axborot-kommunikatsiya texnologiyalari va aloqa harbiy instituti <b style="color: red">e-dekanat kredit tizimiga</b> xush kelibsiz</h1>
            <b><p id="demo" style="color: green;
                        text-align: center;
                        font-size: 60px;
                        margin-top: 0px;"
>
                @guest
                    @if (Route::has('login'))
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Kirish') }}</a>
                    @else

                    @endif

                @endguest
                    @if(!is_null(auth()->user()) && auth()->user()->role_id == 1)
                        <a class="nav-link" href="{{ route('kafedraboshligi.home') }}">Boshqaruv paneliga o'tish</a>
                    @endif
                    @if(!is_null(auth()->user()) && auth()->user()->role_id == 2)
                        <a class="nav-link" href="{{ route('teacher.home') }}">Boshqaruv paneliga o'tish</a>
                    @endif
                    @if(!is_null(auth()->user()) && auth()->user()->role_id == 3)
                        <a class="nav-link" href="{{ route('kursant.home') }}">Boshqaruv paneliga o'tish</a>
                    @endif
                    </p></b>




        </div>
    </section><!-- End Hero -->








@endsection
