@extends("layout.app")
@section('title', 'Create a comics page')

@section('content')
    <div class="container">

        <h1>Edit</h1>
        @include('partials.errors')

        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="add title" aria-describedby="helpId" value="{{ $comic->title }}" required>
                <small id="titleHelp" class="text-muted">Add your comic title</small>
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"
                    placeholder="add serie" aria-describedby="helpId" value="{{ $comic->series }}" required>
                <small id="helpId" class="text-muted">Add your comic serie</small>
            </div>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="summary">Content</label>
                <textarea class="form-control @error('summary') is-invalid @enderror" name="summary" id="summary" rows="3"
                    placeholder="Text here..">{{ $comic->summary }}</textarea>
            </div>
            @error('summary')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="any" name="price" id="price"
                    class="form-control @error('price') is-invalid @enderror" placeholder="enter price"
                    aria-describedby="helpId" value="{{ $comic->price }}" required>
                <small id="helpId" class="text-muted">Enter Price</small>
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="url">Image url</label>
                <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror"
                    placeholder="url" aria-describedby="helpId" value="{{ $comic->url }}" required>
                <small id="coverHelper" class="text-muted">url for a cover image</small>
            </div>
            @error('url')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
    </div>

@endsection
