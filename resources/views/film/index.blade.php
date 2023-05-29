@extends('layout.main')
@section('content')
    <div>
        <div>
            <a href="{{route('film.create')}}" class="btn btn-primary mb-3" style="margin-top: 10px;">Add one</a>
         </div>
        @foreach($films as $film)
            <div><a href="{{route('film.show', $film->id)}}"> {{$film->id}}. {{$film->title}}</a></div>
        @endforeach
    </div>
@endsection
