@extends("layout.app")
@section('title', 'Create a comics page')

@section('content')
    <div class="container">

        <h1>Create a comic</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="add title"
                    aria-describedby="helpId">
                <small id="titleHelp" class="text-muted">Add your comic title</small>
            </div>
            <div class="form-group">
                <label for="series">Serie</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="add serie"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted">Add your comic serie</small>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="any" name="price" id="price" class="form-control" placeholder="enter price"
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted">Enter Price</small>
            </div>
            <div class="form-group">
                <label for="url">Image url</label>
                <input type="text" name="url" id="url" class="form-control" placeholder="url" aria-describedby="helpId">
                <small id="coverHelper" class="text-muted">url for a cover image</small>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>

        </form>
    </div>

@endsection
