@extends('layout')

@section('content')
<div class="row">

	<div class="col-sm-8 blog-main">
		<h1>create a post</h1>

		<form method="POST" action="/posts">

		  {{ csrf_field() }}

		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" name="title" id="title" placeholder="title">
		  </div>
		  <div class="form-group">
		    <label for="Body">Body</label>
		    <textarea type="text" class="form-control" name="body" id="Body" placeholder="Body"></textarea>
		  </div>

		  <div class="form-group">
			  <button type="submit" class="btn btn-primary">Publish</button>	  	
		  </div>
		</form>

		@include('partials.error')
	</div>
</div>
@endsection