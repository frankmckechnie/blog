@extends('layout')

@section ('content')


    <div class="blog-header">
        <h1 class="blog-title">{{$post->title}}</h1>
              <p class="blog-post-meta">{{$post->created_at}} by <a href="#">Mark</a></p>

        <p class="lead blog-description">{{$post->body}}</p>
    </div>

     <div class="comments">
		  	
		  <ul class="list-group">

		  	@foreach($post->comments as $comment)

		  		<li class="list-group-item">
		  			<strong>{{$comment->created_at->diffForHumans()}}</strong>

		  			<hr>

		  			<p>{{$comment->body}}</p>
		  		</li>

		  	@endforeach

	  	  </ul>

	  </div>

	  <div class="card">
	  	<div class="card-block">

	  		<form method="POST" action="/posts/{{$post->id}}/comments">

	  			{{csrf_field()}}
	  			
				<div class="form-group">
	  				<textarea name="body" placeholder="your comment here" class="form-control"></textarea>
				</div>
				<div class="form-group">
				  <button type="submit" class="btn btn-primary">Publish</button>	  	
				</div>
				
		@include('partials.error')
	  		</form>
	  		
	  	</div>
	  </div>

@endsection

@section ('footer')
<script type="text/javascript" src="js/app.js"></script>
@endsection