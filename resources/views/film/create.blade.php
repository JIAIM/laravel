@extends('layout.main')
@section('content')
    <div>
        <form action="{{route('film.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="title">
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" name="director" class="form-control" id="exampleInputEmail1" placeholder="director">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="exampleInputEmail1" placeholder="image">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" name="year" class="form-control" id="exampleInputEmail1" placeholder="year">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
