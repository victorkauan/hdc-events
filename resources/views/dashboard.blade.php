@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>My events</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-event-container">
        @if (count($events))
        @else
            <p>You have no events yet, <a href="/events/create">create event</a></p>
        @endif
    </div>
@endsection
