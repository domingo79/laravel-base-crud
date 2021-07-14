@extends("layout.app")
@section('title', 'Comics Page')

@section('content')
    <div class="container">
        <h1>Comics Index page</h1>

        @foreach ($comics as $comic)
            <h3>{{ $comic->title }}</h3>
            <div>{{ $comic->series }}</div>
            <div>{{ $comic->price }}</div>
            <img src="{{ $comic->url }}" alt="">
        @endforeach
    </div>
@endsection
