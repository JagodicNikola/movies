@extends('layouts.app')
@section('content')


<form method="POST" action="">

 <div class="form-group">
  <label for="exampleInputTitle1">Title</label>
  <input type="text" class="form-control" id="exampleInputTitle1" aria-describedby="titleHelp" placeholder="Enter title">
  <small id="titleHelp" class="form-text text-muted"></small>
</div>

<div class="form-group">
 <label for="exampleInputGenre">Genre</label>
 <input type="text" class="form-control" id="exampleInputGenre" aria-describedby="genreHelp" placeholder="Enter genre">
 <small id="genreHelp" class="form-text text-muted"></small>
</div>

<div class="form-group">
 <label for="exampleInputDirector1">Director</label>
 <input type="text" class="form-control" id="exampleInputDirector1" aria-describedby="directorHelp" placeholder="Enter director">
 <small id="directorHelp" class="form-text text-muted"></small>
</div>

<div class="form-group">
 <label for="exampleInputYear1">Year</label>
 <input type="text" class="form-control" id="exampleInputYear1" aria-describedby="yearHelp" placeholder="Enter year">
 <small id="yearHelp" class="form-text text-muted"></small>
</div>

 <div class="form-group">
  <label for="exampleFormControlTextarea1">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

 
 <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
