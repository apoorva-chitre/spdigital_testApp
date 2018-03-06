<div class="col-md-4">

  <div class="card mb-4 box-shadow">

  

     <img class="card-img-top" src="/thumbnails/{{$video->thumbURL }}" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">

    <div class="card-body">

      <p class="card-text"><a href="/videos/{{ $video->id }}">{{ $video->title }}</a></p>

      <div class="d-flex justify-content-between align-items-center">

        <!--<div class="btn-group">

          <button type="button" class="btn btn-sm btn-outline-secondary">View</button>

          <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>

        </div>-->
        
        <small class="text-muted">Uploaded by {{ $video->user->name }}</small>

      </div>

    </div>
           
  </div>

</div>