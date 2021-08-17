<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponnobazar | Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('images/logo1.webp')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/vendors/chartjs/Chart.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>
<body>
<div id="app">
    <div id="sidebar" class='active'>
        @include('backend.partials.sidebar')
    </div>
    <div id="main">
        @include('backend.partials.navbar')
        @yield('content')
        @include('backend.partials.footer')
    </div>
    <script>
        $(document).ready(function() {
            var dataTable = $('#table1').DataTable();
            dataTable.on('click', '#edit', function (){
                $tr = $(this).closest('tr');
                if ($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                }

                var data = dataTable.row($tr).data();
                console.log(data[0])

                $('#edit_from').val(data[1]);
                $('#edit_to').val(data[2]);
                $('#edit_route').val(data[3]);
                $('#edit_bus_service_name').val(data[4]);
                $('#edit_bus_type').val(data[5]);
                $('#edit_bus_number').val(data[6]);
                $('#edit_bus_model').val(data[7]);
                $('#edit_departure_time').val(data[8]);
                $('#edit_arrival_time').val(data[9]);
                $('#edit_date_from').val(data[10]);
                $('#edit_date_to').val(data[11]);
                $('#edit_total_seat').val(data[12]);
                $('#edit_seat_fare').val(data[13]);

                $('#editForm').attr('action', '/admin/bus_service_update/'+data[0]);
                $("#editModal").modal('show');
            })
        });
    </script>
</div>
<script src="{{asset('assets/js/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/vendors/chartjs/Chart.min.js')}}"></script>
<script src="{{asset('assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
</body>
</html>
