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
            <a href="/">Index</a>
            <a href="/comics">Comics</a>
            <a href="/comics/create">Create</a>
            <a href="/comics/show">Show</a>
        </nav>
    </header>

    <main id="site_main">
        @yield('content')
    </main>
    <footer id="site_footer"></footer>
</body>

</html>
