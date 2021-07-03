<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('users/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css">
    <title>User Dashboard | Ponnobazar</title>
</head>
<body>
@include('Users.partials.user_header')

<main class="cd-main-content">
    @include('Users.partials.user_sidebar')
    @yield('content')
     <!-- .content-wrapper -->
</main> <!-- .cd-main-content -->
<script src="{{asset('users/assets/js/util.js')}}"></script> <!-- util functions included in the CodyHouse framework -->
<script src="{{asset('users/assets/js/menu-aim.js')}}"></script>
<script src="{{asset('users/assets/js/main.js')}}"></script>
<script src="{{asset('assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/js/vendors.js')}}"></script>
</body>
</html>
