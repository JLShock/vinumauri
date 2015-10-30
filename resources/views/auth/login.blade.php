@extends('master')

@section('title', 'Vinum Auri: Sign In')

@section('content')
	
	<div class="background-mask"></div>
	<div class="membership-background"></div>

	<section class="hero-panel">

		<div class="main-title">
			<h1>Login</h1>
		</div>
			
		<div class="login-wrap">
			<form method="POST" action="/auth/login">
			    {!! csrf_field() !!}

				<table>
				    <tr>
				    	<td><strong>Email:</strong></td>
				        <td><input type="email" name="email" value="{{ old('email') }}"></td>
				    </tr>
				    <tr>
				        <td><strong>Password:</strong></td>
				        <td><input type="password" name="password" id="password"></td>
				    </tr>
				</table>
				
			    <div class="remember-wrap">
			        <input type="checkbox" name="remember"> <span class="remember">Remember Me</span>
			        <button class="login-button" type="submit">Login</button>
			    </div>
{{-- 				    @if( count($errors) > 0 )
			    <div>
			    	<h2>Form Errors:</h2>
			    	<ul>
			    	@foreach($errors->all() as $error)
			    		<li>{{ $error }}</li>
			    	@endforeach
			    	</ul>
			    </div>
			    @endif --}}
			</form>
		</div>
		<div>
			<a href="/auth/register">
				<div class="register-button">
					Register Now!
				</div>
			</a>
		</div>

	</section>

@endsection