@extends('layouts.master')
@section('content')
    {{$total_fare}}

    {{$seat_number}}
    @foreach($confirms as $confirm)
        {{$confirm -> id}}
    @endforeach
@endsection
