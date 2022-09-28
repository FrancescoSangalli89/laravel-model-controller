@extends('layout.app')

@section('page-title','list')

@section('content')
    
        @foreach($movies as $movie)
        <div>
            <h3>{{$movie['title']}}</h3>
            <div>{{$movie['original_title']}}</div>
            <div>{{$movie['nationality']}}</div>
            <div>{{$movie['date']}}</div>
            <div>{{$movie['vote']}}</div>
        </div>
        @endforeach
@endsection