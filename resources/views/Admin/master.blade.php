<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, Ample lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Ample admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
          content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Custom CSS -->
    <link href="{{asset('admin/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css')}}">
    <!-- Custom CSS -->
    <link href="{{asset('admin/css/style.min.css')}}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">

</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    @include('Admin.partials.header')
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    @include('Admin.partials.sidebar')
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    @yield('content')
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    @include('Admin.partials.footer')
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
{{--<script src="{{asset('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>--}}
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('admin/plugins/bower_components/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('admin/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/app-style-switcher.js')}}"></script>
<script src="{{asset('admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('admin/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('admin/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('admin/js/custom.js')}}"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="{{asset('admin/plugins/bower_components/chartist/dist/chartist.min.js')}}"></script>
<script src="{{asset('admin/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{asset('admin/js/pages/dashboards/dashboard1.js')}}"></script>
</body>

</html>
