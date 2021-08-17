@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <i class="fa fa-check-circle"></i><strong> {{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <i class="fa fa-exclamation-triangle"></i><strong> {{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block">
        <i class="fa fa-exclamation-triangle"></i> <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <i class="fa fa-exclamation-triangle"></i>Check the following errors below!!
    </div>
@endif
