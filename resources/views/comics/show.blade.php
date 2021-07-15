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
            <button class="btn btn-success btn-sm">Add Comic</button>
        </form>
        <form action="{{ route('comics.edit', $comic->id) }}">
            @csrf
            <button class="btn btn-warning btn-sm">Edit Comic</button>
        </form>

        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#comic-{{ $comic->id }}">
            Delete
        </button>
        <!-- Modal -->
        <div class="modal fade" id="comic-{{ $comic->id }}" role="dialog" tabindex="-1"
            aria-labelledby="comic-{{ $comic->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete Comic??🤔🤔 </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        You are going to remove the comic!!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
