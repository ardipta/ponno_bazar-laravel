<div class="col-md-8">
    <h3>List of People</h3>
    <table class="table table-striped">
        <tr>
            <th>From</th>
            <th>To</th>
            <th>Date of Journey</th>
        </tr>
        @foreach($data as $pep)
            <tr>
                <td>{{ $pep->from }}</td>
                <td>{{ $pep->to }}</td>
                <td>{{ $pep->date_of_journey }}</td>
            </tr>
        @endforeach
    </table>
{{--    {{ $data->appends(request()->except('page'))->links() }}--}}
</div>
</div>
</div>
