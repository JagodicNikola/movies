@extends('layouts.app')
@section('title', $movie->title)


@section('content')

<h3>{{$movie->title}}</h3>
<h3>{{$movie->genre}}</h3>
<h3>{{$movie->director}}</h3>
<h3>{{$movie->year}}</h3>
<p>{{$movie->storyline}}</p>
 
<div>
 <h4>Comments</h4>
 @foreach($movie->comments as $comment)
 <div>
  <p>{{$comment->content}}</p>
  <small>Commented at: {{$comment->created_at}}</small>
 </div>
 @endforeach

</div>

@endsection