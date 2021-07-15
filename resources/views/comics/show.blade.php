@extends("layout.app")
@section('title', 'Show Page')

@section('content')
    <h1>Show Page</h1>
    <h2>{{ $comic->title }}</h2>
    <div>{{ $comic->series }}</div>
    <div>$ {{ $comic->price }}</div>
    <img src="{{ $comic->url }}" alt="">
@endsection
