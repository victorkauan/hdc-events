<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Title</h1>

        <img src="/img/banner.jpg" alt="Banner" />

        @if (10 > 15)
            <p>The condition is true</p>
        @endif

        <p>{{ $name }}</p>

        @if ($name == "Matheus")
            <p>The name is Matheus</p>
        @elseif ($name == "Victor")
            <p>The name is {{ $name }}, he's {{ $age }} years old and work as {{ $occupation }}</p>
        @else
            <p>The name isn't Matheus</p>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if ($i == 2)
                <p>i is 2</p>
            @endif
        @endfor

        @foreach ($names as $name)
            <p>{{ $loop->index }}</p>
            <p>{{ $name }}</p>
        @endforeach

        @php
            $name = "João";
            echo $name;    
        @endphp

        <!-- HTML comment -->
        {{-- This is a Blade comment --}}
    </body>
</html>
