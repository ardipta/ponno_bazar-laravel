@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach($data as $pep)
            <h2 style="text-align: center">Available Buses For {{ $pep->date_range_from }}</h2>
            <div class="table col-md-8">
                <table class="table table-striped">
                    <tr class="thead-dark">
                        <th>From</th>
                        <th>To</th>
                        <th>Date of Journey</th>
                        <th>Bus Service Name</th>
                        <th>Bus Model</th>
                        <th>Bus Type</th>
                        <th>Bus Number</th>
                    </tr>

                        <tr>
                            <td>{{ $pep->from }}</td>
                            <td>{{ $pep->to }}</td>
                            <td>{{ $pep->date_range_from }}</td>
                            <td>{{ $pep->bus_service_name }}</td>
                            <td>{{ $pep->bus_model }}</td>
                            <td>{{ $pep->bus_type }}</td>
                            <td>{{ $pep->bus_number }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
