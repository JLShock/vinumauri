@extends('master')

@section('title', 'Vinum Auri: Register')

@section('content')
	
	<div class="background-mask"></div>
	<div class="membership-background"></div>

	<section class="hero-panel">

		<div class="main-title">
			<h1>Register</h1>
		</div>

		<div class="register-wrap">
			<form method="POST" action="/auth/register">
			    {!! csrf_field() !!}

			    <div>
			    	<strong>First Name:</strong><br>
			        <input type="text" name="firstname" value="{{ old('firstName') }}">
			    </div>
			    <div>
			    	<strong>Last Name:</strong><br>
			        <input type="text" name="lastname" value="{{ old('lastName') }}">
			    </div>
			    <div>
			    	<strong>Email:</strong><br>
			        <input type="email" name="email" value="{{ old('email') }}">
			    </div>
			    <div>
			        <strong>Password:</strong><br>
			        <input type="password" name="password">
			    </div>
			    <div>
			        <strong>Confirm Password:</strong><br>
			        <input type="password" name="password_confirmation">
			    </div><br>
			    <div>
			        <button class="login-button" type="submit">Register</button>
			    </div>
			</form>
		</div>

	</section>

@endsection