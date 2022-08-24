@extends('layouts.main')

@section('title', 'Products')

@section('content')
    <h1>Product screen</h1>

    @if ($search)
        <p>User searching for: {{ $search }}</p>
    @endif
@endsection
