@extends ('layout')

@section ('content')

<div class="row">

	<div class="col-sm-8 blog-main">
		<h1>Sign in</h1>

		<form method="POST" action="/login">

			{{csrf_field()}}

			<div class="form-group">
				<label>Email:</label>		
				<input class="form-control" type="text" name="email" required>
			</div>

			<div class="form-group">
				<label>Password:</label>		
				<input class="form-control" type="password" name="password" required>
			</div>

			<div class="form-group">
			  <button type="submit" class="btn btn-primary">login</button>	  	
			</div>	


		@include('partials.error')	

		</form>
	</div>
</div>

@endsection