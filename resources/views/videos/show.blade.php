@extends ('layouts.master')


@section('content') 

	<div class="container">
		
		<h2>{{ $video->title }}</h2>

		<div class="likes">

			<button  class="btn" v-text = "text" v-class="btn-primary:  liked" v-on="click: toggleLike">Like this video</button>

			<p><b>{{ $video->likes->count() }} likes</b></p>
		</div>

	</div>

@endsection