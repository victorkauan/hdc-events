@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Search for an event</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Search..." />
        </form>
    </div>
    <div id="event-container" class="col-md-12">
        <h2>Next Events</h2>
        <p class="subtitle">See upcoming events</p>
        <div id="card-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" />
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X participants</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">See more</a>
                    </div>
                </div>
            @endforeach
            @if (!count($events))
                <p>No events available</p>
            @endif
        </div>
    </div>
@endsection
