@extends('layouts.master')


@section('content')

<div class="container">

<div class="col-sm-8">
	
	<h1>Register</h1>


	<form method="POST" action="/register">
		{{ csrf_field() }}

		<div class="form-group">
		
			<label for="name">Name: </label>
			<input type="text" class="form-control" id="name" name="name" required>

		</div>


		<div class="form-group">
		
			<label for="Email">Email: </label>
		<input type="text" class="form-control" id="email" name="email" required="">

		</div>

		<div class="form-group">
		
			<label for="password">Password: </label>
			<input type="password" class="form-control" id="password" name="password" required>

		</div>

		<div class="form-group">
		
			<label for="password_confirmation">Confirm Password: </label>
			<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

		</div>


		<div class="form-group">
		
			<button type="submit" class="form-control btn btn-primary">Register</button>

		</div>

		<a href="/login">Already a user? Sign In</a>

		@include('layouts.errors')

	</form>
</div>
</div>

@endsection