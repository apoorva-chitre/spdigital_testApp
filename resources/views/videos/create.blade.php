@extends('layouts.master')


@section('content')

	<div class="container upload">

		<center><h2>Upload and save a video</h2></center>

	<form method="POST" action="/videos" enctype="multipart/form-data">

		{{ csrf_field() }}

	  <div class="form-group">

	    <input type="text" class="form-control" id="video_title" name="video_title" placeholder="Enter a title for the video">

	  </div>

	  <div class="form-group">

	  	<label for="video_file">Choose a video to upload</label>
	  	<input type="file" id="video_file" name="video_file">

	  </div>

		<div class="form-group">
			<label for="thumb_img">Choose a Thumbnail Image</label>
			<input type="file" id="thumb_img" name="thumb_img">
		</div>

  		<div class="form-group">

	  		<button type="submit" class="btn btn-primary">Save to Videos</button>

	  	</div>

	  	@include('layouts.errors')

	</form>

	</div>

@endsection

