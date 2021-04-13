<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB - Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    @yield('assets')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a class="nav-link">SMK MUHAMMADIYAH 1 PURBALINGGA</a>
            </li>
        </ul>


        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <!-- Notifications Dropdown Menu -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
            @endguest
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('admin.dashboard')}}" class="brand-link">
            <img src="{{ asset('adminlte')}}/dist/img/SMKMUH1.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin - PPDB</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('adminlte')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{route('admin.dashboard')}}" class="d-block">Admin</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('admin.jeniskelamin.index')}}" class="nav-link {{Request::is('admin/jeniskelamin*')?'active':''}}">
                            <i class="nav-icon fas fa-venus-mars"></i>
                            <p>
                                Jenis Kelamin
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.jurusan.index')}}" class="nav-link {{Request::is('admin/jurusan*')?'active':''}}">
                            <i class="nav-icon fas fa-chalkboard-teacher"></i>
                            <p>
                                Jurusan
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.statuscalonsiswa.index')}}" class="nav-link {{Request::is('admin/statuscalonsiswa*')?'active':''}}">
                            <i class="nav-icon fas fa-user-check"></i>
                            <p>
                                Status Calon Siswa
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.pendaftaran.index')}}" class="nav-link {{Request::is('admin/pendaftaran*')?'active':''}}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Pendaftaran
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @if ($message = Session::get('status'))
            <div class="alert alert-default-success alert-dismissible fade show" role="alert">
                <strong>{{$message}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>SMK MUHAMMADIYAH 1 PURBALINGGA</strong>
        <div class="float-right d-none d-sm-block">
            Jalan Let. Jend. S. Parman Po Box 125
            Telp./Fax. (0281) 895768 Purbalingga
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('adminlte')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('adminlte')}}/dist/js/demo.js"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('adminlte')}}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- DataTables -->


@yield('script')

</body>
</html>
