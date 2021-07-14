@extends("layout.app")
@section('title', 'Show Page')

@section('content')
    <h1>Show Page</h1>
    <h1>{{ $comic->title }}</h1>

    <div>Series: {{ $comic->series }}</div>
    <div>Price: {{ $comic->price }}</div>
@endsection
