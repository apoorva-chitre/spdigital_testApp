@extends ('layouts.master')


@section('content') 

	<div class="container">

		<br>

		<div class="col-md-12" style="margin: 0 auto;">
		
			<h2>{{ $video->title }}</h2>
			
			<video width="640" height="480" controls autoplay>
				 <source src="/videos/{{ $video->videoURL }}" type="video/mp4" >
				Your browser does not support the video tag.
			</video>

		</div>

		<div class="likes">

			<button  class="btn">Like this video</button>

			<p><b>{{ $video->likes->count() }} likes</b></p>

			<p>uploaded by {{ $video->user->name }}</p>

			
		</div>

	</div>

@endsection