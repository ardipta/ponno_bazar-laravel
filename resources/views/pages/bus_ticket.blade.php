@extends('layouts.master')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bus_ticket_style.css') }}">

</head>
<body>
<form action="{{ route('search_result') }}" method="GET">
    <div class="container margin">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>From</label>
                            <input type="text" name="from" class="form-control" placeholder="Enter city name">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>To</label>
                            <input type="text" name="to" class="form-control" placeholder="Enter city name">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of journey</label>
                            <input name="date_of_journey" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of return<small>(optional)</small></label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="form-control" style="background-color: #212121; color: white"><i class="fa fa-search"> Search Bus</i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6">
                <div class="image_wrapper">
                    <img src="images/bus.jpeg" class="img-fluid img-thumbnail" style="max-width: 100%;" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
@endsection
