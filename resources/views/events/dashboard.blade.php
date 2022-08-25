@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>My events</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-event-container">
        @if (count($events))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Participants</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td>0</td>
                            <td><a href="#">Edit</a> <a href="#">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>You have no events yet, <a href="/events/create">create event</a></p>
        @endif
    </div>
@endsection
