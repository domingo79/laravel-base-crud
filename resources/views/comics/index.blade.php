@extends("layout.app")
@section('title', 'Comics Page')

@section('content')
    <div class="container">
        <h1>Comics & Graphic novel</h1>

        @foreach ($comics as $comic)
            <h3>{{ $comic->title }}</h3>
            <div>{{ $comic->series }}</div>
            <div>{{ $comic->price }}</div>
            <a href="{{ route('comics.show', $comic->id) }}"><img src="{{ $comic->url }}" alt=""> </a>
        @endforeach
    </div>
@endsection
