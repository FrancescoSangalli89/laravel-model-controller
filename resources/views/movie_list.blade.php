@extends('layout.app')

@section('page-title','list')

@section('content')
    <main class="container">
    @foreach($movies as $movie)
        <div class="card">
            <h3>{{$movie['title']}}</h3>
            <div>Titolo originale - {{$movie['original_title']}}</div>
            <div>{{$movie['nationality']}}</div>
            <div>Data di uscita: {{$movie['date']}}</div>
            <div>Voto: {{$movie['vote']}}</div>
        </div>
    @endforeach
    </main>
        
@endsection