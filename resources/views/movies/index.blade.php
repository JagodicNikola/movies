@extends('layouts.app')
@section('title', 'MOVIES')


@section('content')

@foreach($movies as $movie)
 <div>
  <h3><a href="/movies/{{$movie->id}}"> {{$movie->title}} </a></h3>
   
  <p>{{$movie->storyline}} </p>
 </div>
 
@endforeach
@endsection