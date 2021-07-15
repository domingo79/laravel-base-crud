@extends("layout.app")
@section('title', 'Show Page')

@section('content')
    <div class="container">
        <h1>Comic: {{ $comic->title }}</h1>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{ $comic->url }}" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $comic->series }}</h5>
                        <p class="card-text">sommario da aggiungere This is a wider card with supporting text below as a
                            natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted"> $ {{ $comic->price }}</small></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger btn-sm d-block mt-3" data-toggle="modal"
            data-target="#comic-{{ $comic->id }}">
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
