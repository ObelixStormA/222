<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('teacher.home')}}" class="brand-link p-3">
        <i class="fas fa-user-tie"></i>
        <span class="brand-text font-weight-light">O'qituvchi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



                <li class="nav-item">
                    <a href="{{route('teacher.myfanlarim.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mening fanlarim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('teacher.task.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mening topshiriqlarim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Mening maqolalarim</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('teacher.davomat.index')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Davomat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('teacher.davomat.create')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Davomatni belgilash</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('teacher.kafteacher.index')}}" class="nav-link">
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
