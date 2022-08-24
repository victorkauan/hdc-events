@extends('layouts.main')

@section('title', 'Create Event')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Create your event</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Event name" />
            </div>
            <div class="form-group">
                <label for="title">City:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Event's place" />
            </div>
            <div class="form-group">
                <label for="title">Is the event private?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Description:</label>
                <textarea class="form-control" name="description" id="description" placeholder="What will happen at the event?"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Create Event" />
        </form>
    </div>
@endsection
