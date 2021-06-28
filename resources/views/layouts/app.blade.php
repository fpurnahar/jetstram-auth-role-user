<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('') }}plugins/fontawesome-free/css/all.min.css">
    <!-- pace-progress -->
    <link rel="stylesheet" href="{{ asset('') }}plugins/pace-progress/themes/black/pace-theme-flat-top.css">
    <!-- adminlte-->
    <link rel="stylesheet" href="{{ asset('') }}dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini pace-primary">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <x-navbar />
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <x-menu />
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <x-content-header-page />
            <!-- Main content -->
            <section class="content">
                {{ $slot }}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <x-footer />

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('') }}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- pace-progress -->
    <script src="{{ asset('') }}plugins/pace-progress/pace.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('') }}dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('') }}dist/js/demo.js"></script>
</body>

</html>
