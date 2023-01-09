@extends('layouts.app')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Create a new ComicBook</h1>
    @include('partials.errors')
    <form action="{{route('comics.store')}}" method="post" class="card p-3">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Batman 3"
                aria-describedby="titleHlper" value="{{'title'}}" required>
            <small id="titleHlper" class="text-muted">Add the ComicBook title here, min 10 characters, max 100
                characters</small>
        </div>
        <div class="mb-3">
            <label for="src" class="form-label">ComicBook Image</label>
            <input type="text" name="src" id="src" class="form-control" placeholder="batman 3"
                aria-describedby="srcHlper" value="{{'src'}}">
            <small id="srcHlper" class="text-muted">Add the ComicBook src here</small>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{'description'}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>

@endsection