<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Comics')</title>
    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <header id="site_header">
        <nav>
            <a href="/"><img src="{{ asset('img/dc-logo.png') }}" alt=""></a>
            {{-- @foreach (config('navigazione.menu') as $item)
                <a href="{{ $item['href'] }}">{{ $item['text'] }}</a> --}}
                {{-- class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}"> {{ $item['text'] }} --}}
            {{-- @endforeach --}}
            <a href="/comics">Comics</a>
            {{-- <a href="/comics/create">Create</a>
            <a href="/comics/show">Show</a> --}}
        </nav>
    </header>

    <main id="site_main">
        @yield('content')
    </main>
    <footer id="site_footer"></footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>
