<!DOCTYPE html>
<html>
    <head>
        @include('layouts_partials.adminlte_head')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                @include('layouts_partials.adminlte_header')
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                @include('layouts_partials.adminlte_sidebar')
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                @include('layouts_partials.adminlte_content_header')

                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            @include('layouts_partials.adminlte_footer')

            <!-- Control Sidebar -->
            @include('layouts_partials.adminlte_control_sidebar')
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        @include('layouts_partials.adminlte_scripts')
    </body>
</html>
