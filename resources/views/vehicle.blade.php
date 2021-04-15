@extends('tracker')

@section('testy title','title son!')
{{ Log::error("Vehicle page loaded") }}

<form action="/vehicle/create" method="post">
    <label for="make">Make</label>
    <input id="make" name="make" type="text">
    
    <label for="model">Model</label>
    <input id="model" name="model" type="text">

    <label for="year">Year</label>
    <input id="year" name="year" type="text">
    {{ csrf_field() }}
    <button type="submit">Send</button>
</form>

@section('contents')
<ul>
    <li>Item</li>
    <li>Item</li>
</ul>
@endsection

@if (isset($vehicles))
    @foreach ($vehicles as $vehicle)
    <ul>    
        <li>{{$vehicle->id . ' - ' . $vehicle->make . ' - ' . $vehicle->model . ' - ' . $vehicle->year}}</li>
    </ul>
    @endforeach
@endif

<h1>I got {{$id ?? 'an empty id'}} as well as 
    @if (isset($vehicles))
        <h2>vehicles is set</h2>
    @endif
    @json($request ?? '', JSON_PRETTY_PRINT)
</h1>