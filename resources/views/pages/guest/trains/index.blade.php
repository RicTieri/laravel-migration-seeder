@extends('layouts.app')

@section('main-content')

<section class="trainCards mb-5">
  <div class="container">
    <table class="table  table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Date</th>
          <th scope="col">Departing at</th>
          <th scope="col">Departed from</th>
          <th scope="col">Arrival to</th>
          <th scope="col">Train</th>
          <th scope="col">Coaches</th>
        </tr>
      </thead>
      <tbody>
            @foreach ($trains as $train)
            <tr>
              <th scope="row">1</th>
              <td>{{ $train->travel_date }}</td>
              <td>{{ $train->departure_time }}</td>
              <td>{{ $train->departure_station }}</td>
              <td>{{ $train->arrival_station }}</td>
              <td>{{ $train->train_code }}</td>
              <td>{{ $train->number_of_coaches }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
</section>

@endsection