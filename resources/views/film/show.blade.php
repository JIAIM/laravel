@extends('layout.main')
@section('content')
    <div>
        <div>{{$film->id}}. {{$film->title}} {{$film->year}}</div>
        <div>Director: {{$film->director}}</div>
        <div>Genres:
            @foreach($film->genres as $genre)
                {{$genre->title}}
            @endforeach
        </div>
        <div>Studio: {{$film->studio->title}}</div>
    </div>
    <div>
        <a href="{{route('film.edit', $film->id)}}" class="btn btn-primary">Edit</a>
    </div>
    <div>
        <form action="{{route('film.delete', $film->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{route('film.index')}}" class="btn btn-success">Back</a>
    </div>
@endsection
