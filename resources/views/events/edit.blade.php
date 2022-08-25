@extends('layouts.main')

@section('title', "Editing: $event->title")

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editing: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Event image:</label>
                <input type="file" class="form-control-file" id="image" name="image" />
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            </div>
            <div class="form-group">
                <label for="title">Event:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Event name" value="{{ $event->title }}" />
            </div>
            <div class="form-group">
                <label for="date">Date event:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ date('Y-m-d', strtotime($event->date)) }}" />
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Event's place" value="{{ $event->city }}" />
            </div>
            <div class="form-group">
                <label for="private">Is the event private?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">No</option>
                    <option value="1" {{ $event->private ? "selected='selected'" : "" }}>Yes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" placeholder="What will happen at the event?">{{ $event->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="description">Add infrastucture items:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Chairs" /> Chairs
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Stage" /> Stage
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Free beer" /> Free beer
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open food" /> Open food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Gifts" /> Gifts
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Edit Event" />
        </form>
    </div>
@endsection
