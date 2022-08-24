@extends('layouts.main')

@section('title', 'Product')

@section('content')
    @if ($id)
        <p>Product ID: {{ $id }}</p>
    @endif
@endsection
