@extends('layouts.app')

@section('content')
    <h1>Train</h1>

    @forelse ($trains as $item)
        <div class="mb-5">
            <h1>{{ $item -> company}}</h1>
            <h1>{{ $item -> departure_station}}</h1>
            <h1>{{ $item -> arrival_station}}</h1>
            <h1>{{ $item -> train_code}}</h1>
            <h1>{{ $item -> delay_time}}</h1>
            <h1>{{ $item -> status}}</h1>
        </div>
    @empty

    @endforelse

@endsection