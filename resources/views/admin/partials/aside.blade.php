<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.home')}}" class="brand-link p-3">
        <i class="fas fa-user-tie"></i>
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-edit"></i>
                        <p>
                            Foydalanuvchilar
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('admin.kafedrabosh.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kafedra boshlig'i</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.teach.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>O'qituvchi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.kursant.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kursant</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a href="{{route('admin.kafedra.index')}}" class="nav-link">
                        <i class="fas fa-book-reader"></i>
                        <p>
                            Kafedralar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.home')}}" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <p>
                            Statistika
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.kurs.index')}}" class="nav-link">
                        <i class="fas fa-angle-double-up"></i>
                        <p>
                            Kurs
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.guruh.index')}}" class="nav-link">
                        <i class="fas fa-layer-group"></i>
                        <p>
                            Guruh
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.daraja.index')}}" class="nav-link">
                        <i class="fas fa-medal"></i>
                        <p>
                            Daraja
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.unvon.index')}}" class="nav-link">
                        <i class="fas fa-graduation-cap"></i>
                        <p>
                            Unvon
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.yonalish.index')}}" class="nav-link">
                        <i class="fas fa-medal"></i>
                        <p>
                            Yo'nalishlar
                        </p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="fab fa-gg-circle"></i>--}}
{{--                        <p>--}}
{{--                            Foydalanuvchi turlari--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a href="{{route('admin.semestr.index')}}" class="nav-link">
                        <i class="fab fa-gg-circle"></i>
                        <p>
                            Semestr
                        </p>
                    </a>
                </li>
                <li class="nav-item">

                    <a class="dropdown-item nav-link" href="{{ route('logout') }}"

                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        {{ 'Chiqish' }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
