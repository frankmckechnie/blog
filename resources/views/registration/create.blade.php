@extends ('layout')

@section ('content')

<div class="row">

	<div class="col-sm-8 blog-main">
		<h1>Register</h1>

		<form method="POST" action="/register">

			{{csrf_field()}}

			<div class="form-group">
				<label>Name:</label>
				<input class="form-control" type="text" name="name" required>
			</div>

			<div class="form-group">
				<label>Email:</label>		
				<input class="form-control" type="text" name="email" required>
			</div>

			<div class="form-group">
				<label>Password:</label>		
				<input class="form-control" type="password" name="password" required>
			</div>

			<div class="form-group">
				<label>Password Confirmation:</label>		
				<input class="form-control" type="password" name="password_confirmation" required>
			</div>

			<div class="form-group">
			  <button type="submit" class="btn btn-primary">Publish</button>	  	
			</div>	


		@include('partials.error')	

		</form>
	</div>
</div>

@endsection