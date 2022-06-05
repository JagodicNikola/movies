@extends('layouts.app')
@section('content')

<h1>Create a movie</h1>
<form method="POST" action="/create">
  @csrf

 <div class="form-group">
  <label for="title">Title</label>
  <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title">
  @include('partials.error-message', ['field' => 'title'])
</div>

<div class="form-group">
 <label for="genre">Genre</label>
 <input type="text" name="genre" class="form-control" id="genre" aria-describedby="genreHelp" placeholder="Enter genre">
 @include('partials.error-message', ['field' => 'genre'])
</div>

<div class="form-group">
 <label for="director">Director</label>
 <input type="text" name="director" class="form-control" id="director" aria-describedby="directorHelp" placeholder="Enter director">
 @include('partials.error-message', ['field' => 'director'])
</div>

<div class="form-group">
 <label for="year">Year</label>
 <input type="integer" name="year" class="form-control" id="year" aria-describedby="yearHelp" placeholder="Enter year">
 @include('partials.error-message', ['field' => 'year'])
</div>

 <div class="form-group">
  <label for="storyline">Storyline</label>
  <textarea class="form-control" name="storyline" id="storyline" rows="3"></textarea>
  @include('partials.error-message', ['field' => 'storyline'])
</div>

 
 <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
