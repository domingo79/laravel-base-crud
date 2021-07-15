@extends("layout.app")
@section('title', 'Comics Page')

@section('content')
    <div class="container">
        <h1>Comics & Graphic novel</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>SERIES</th>
                    <th>SUMMARY da aggiunger</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td class="text-info" scope="row">#{{ $comic->id }}</td>
                        <td><a href="{{ route('comics.show', $comic->id) }}"><img width="100" src="{{ $comic->url }}"
                                    alt=""> </a> </td>
                        <td>{{ $comic->title }}</td>
                        <td>da aggiungere il sommario</td>
                        <td>
                            <a class="text-warning" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            <a class="text-success" href="{{ route('comics.create', $comic->id) }}">Create</a>
                            <a class="text-danger" href="{{ route('comics.show', $comic->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
