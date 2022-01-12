<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('kafedraboshligi.home')}}" class="brand-link p-3">
        <i class="fas fa-user-tie"></i>
        <span class="brand-text font-weight-light">Kafedra boshligi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('kafedraboshligi.KafedraTeacher.index')}}" class="nav-link">
                        <i class="fas fa-user-edit"></i>
                        <p>
                            O'qituvchilar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('kafedraboshligi.fanlar.index')}}" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <p>
                            Fanlar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('kafedraboshligi.fanbiriktirish.index')}}" class="nav-link">
                        <i class="fas fa-book-reader"></i>
                        <p>
                            Fanlarni biriktirish
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open"></i>
                        <p>
                            Jurnal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-edit"></i>
                        <p>
                            O'qituvchi
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('kafedraboshligi.myfanlarim.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mening fanlarim</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('kafedraboshligi.task.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mening topshiriqlarim</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('kafedraboshligi.kafteacher.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mening statistikam</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mening maqolalarim</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('kafedraboshligi.davomat.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Davomat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('kafedraboshligi.davomat.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Davomatni belgilash</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{route('kafedraboshligi.kafteacher.index')}}" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <p>
                            Statistika
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
