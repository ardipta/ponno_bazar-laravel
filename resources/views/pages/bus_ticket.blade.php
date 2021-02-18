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
                            <input type="text" class="form-control" placeholder="Enter From Point" name="from" list="from" autocomplete="off">
                            <datalist class="form-control" id="from" style="display: none" >
                                @foreach ($buses as $bus)
                                <option value="{{$bus->from}}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>To</label>
                            <input type="text" class="form-control" placeholder="Enter To Point" name="to" list="to" autocomplete="off">
                            <datalist class="form-control" id="to" style="display: none" >
                                @foreach ($buses as $bus)
                                    <option value="{{$bus->to}}"></option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of journey</label>
                            <input name="date_range_from" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of return<small>(optional)</small></label>
                            <input type="date" name="return_of_journey" class="form-control">
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
                    <img src="{{asset('images/bus.jpeg')}}" class="img-fluid img-thumbnail" style="max-width: 100%;" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
@endsection
