@extends('layouts.app')
@section('title', $movie->title)


@section('content')

<h3>{{$movie->title}}</h3>
<h3>{{$movie->genre}}</h3>
<h3>{{$movie->director}}</h3>
<h3>{{$movie->year}}</h3>
<p>{{$movie->storyline}}</p>
 

@endsection