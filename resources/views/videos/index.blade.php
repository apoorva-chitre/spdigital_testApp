@extends('layouts.master')

@section('content')

      <main role="main">

      <div class="album py-5 bg-light">

        <div class="container">

          <a href="/videos/create"><button class="btn btn-primary add-btn">Add a video</button></a>

          <div class="row">


            @foreach($videos as $video)

                @include('videos.video')

            @endforeach

            </div>
          </div>
        </div>
      </div>

    </main>

@endsection



