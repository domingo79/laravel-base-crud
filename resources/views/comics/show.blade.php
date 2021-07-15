@extends("layout.app")
@section('title', 'Show Page')

@section('content')
    <div class="container">

        <h1>Show Page</h1>
        <h2>{{ $comic->title }}</h2>
        <div>{{ $comic->series }}</div>
        <div>$ {{ $comic->price }}</div>
        <img src="{{ $comic->url }}" alt="">

        <form action="{{ route('comics.create') }}">
            @csrf
            <button class="btn btn-success">Add Comic</button>
        </form>
        <form action="{{ route('comics.edit', $comic->id) }}">
            @csrf
            <button class="btn btn-warning">Edit Comic</button>
        </form>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

@endsection
