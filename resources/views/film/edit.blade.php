@extends('layout.main')
@section('content')
    <div>
        <form action="{{route('film.update', $film->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="title" value="{{$film->title}}">
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" name="director" class="form-control" id="exampleInputEmail1" placeholder="director" value="{{$film->director}}">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="exampleInputEmail1" placeholder="image" value="{{$film->image}}">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" name="year" class="form-control" id="exampleInputEmail1" placeholder="year" value="{{$film->year}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
