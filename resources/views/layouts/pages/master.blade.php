<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ponnobazar</title>
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="{{asset('js/jquery-1.12.0.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--animate-->
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" media="all">
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
</head>
<body>
    @include('layouts.partials._topbar')
    @include('layouts.partials._header')
    @include('layouts.partials._navbar')
    @include('layouts.partials._banner')
    @yield('content')
    @include('layouts.partials._footer')
</body>
</html>
