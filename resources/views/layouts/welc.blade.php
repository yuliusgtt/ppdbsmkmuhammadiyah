<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB - SMK MUHAMMADIYAH 1 PURBALINGGA</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte')}}/plugins/fontawesome-free/css/all.min.css">

    <style>
        #welcome {
            background-image: linear-gradient(white , lightskyblue);
        }
    </style>

    @yield('assets')
</head>
<body class="hold-transition layout-top-nav">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
        <a href="{{route('welcome')}}" class="navbar-brand">
            <img src="{{asset('adminlte')}}/dist/img/SMKMUH1.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">SMK Muhammadiyah 1 purbalingga</span>
        </a>
        <!-- Left navbar links -->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <!-- Notifications Dropdown Menu -->
            @guest

                @if (Route::has('register'))

                @endif
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" id="welcome">

        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <strong>SMK MUHAMMADIYAH 1 PURBALINGGA</strong>
        <div class="float-right d-none d-sm-block text-gray-dark">
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

@yield('script')

</body>
</html>
