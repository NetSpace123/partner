<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/dash/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/dash/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dash/dist/css/adminlte.min.css">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="/dash/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="/dash/plugins/toastr/toastr.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/2ee71598ac.js" crossorigin="anonymous"></script>

    {{--    select 2 dropdown--}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    @if(auth('partner')->user()->unreadNotifications()->count() > 0)
                        <span class="badge badge-warning navbar-badge">
                                {{auth('partner')->user()->unreadNotifications()->count()}}
                        </span>
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">
                        @if(auth('partner')->user()->unreadNotifications()->count() > 0)
                            {{auth('partner')->user()->unreadNotifications()->count()}} Notifications
                        @endif
                    </span>
                    <div class="dropdown-divider"></div>

                    @if(auth('partner')->user() && auth('partner')->user()->unreadNotifications()->count() > 0)
                        @foreach(auth('partner')->user()->unreadNotifications as $notification)
                        <a href="{{route('partner.notifications.single.read',$notification->id)}}" class="dropdown-item">
                            <p style="max-width: 100%;word-wrap:break-word;">
                                <i class="fas fa-bell mr-2"></i>
                                Congratulations !!! on your {{$notification->data['name']}} advertisement.
                            </p>
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                            <br>
                        @endforeach
                    @endif
                    @if(auth('partner')->user()->unreadNotifications()->count() > 0)
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('partner.notifications.read')}}" class="dropdown-item dropdown-footer">
                            Mark All as Readed
                        </a>
                    @endif
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li>
                <form action="{{route('addadvertisement')}}">
                    <button type="submit"
                            class="btn btn-warning me-3  heder-btn-item btn-square mobile-nav-btn"> &nbsp;
                        Post your Ad Free
                        <i class="fas fa-expand-arrows-alt"></i>
                    </button>
                </form>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="/assets/img/logo.png" alt="LankaParnter. Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">LankaParnter.</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="images/{{auth('partner')->user()->image}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block"> {{auth('partner')->user()->firstName}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="{{route('partner-dashboard')}}" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Advertisement
                                <i class="fas fa-angle-left right"></i>
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('viewadvertisement')}}" class="nav-link">
                                    <i class="far fa-eye nav-icon"></i>
                                    <p>View Advertisement</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('addadvertisement')}}" class="nav-link">
                                    <i class="far fa-plus nav-icon"></i>
                                    <p>Add Advertisement</p>
                                </a>
                            </li>
                        </ul>
                    </li>

            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2023 Lanka Partner.</strong>
        All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/dash/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/dash/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/dash/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dash/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/dash/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/dash/plugins/raphael/raphael.min.js"></script>
<script src="/dash/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/dash/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="/dash/plugins/select2/js/select2.full.min.js"></script>
<!-- ChartJS -->
<script src="/dash/plugins/chart.js/Chart.min.js"></script>
<!-- SweetAlert2 -->
<script src="/dash/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/dash/plugins/toastr/toastr.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/dash/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dash/dist/js/pages/dashboard2.js"></script>

</body>
</html>

