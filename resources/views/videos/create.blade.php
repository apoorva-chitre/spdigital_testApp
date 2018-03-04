@extends('layouts.master')


@section('content')

	<div class="container upload">

		<center><h2>Upload and save a video</h2></center>

	<form method="POST" action="/videos" enctype="multipart/form-data">

		{{ csrf_field() }}

	  <div class="form-group">

	    <input type="text" class="form-control" id="video-title" name="video-title" placeholder="Enter a title for the video">

	  </div>



  		<div class="form-group">

	  		<button type="submit" class="btn btn-primary">Save to Videos</button>

	  	</div>

	  	@include('layouts.errors')

	</form>

	</div>

@endsection

