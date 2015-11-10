@extends('master')

@section('title', 'Vinum Auri: Contact')

@section('content')
	
	<div class="background-mask"></div>
	<div class="contact-background"></div>

	<section class="hero-panel">

		<div class="main-title">
			<h1>Contact</h1>
		</div>

		<div class="contact-wrap">
			<div id="map"></div>
			<div class="contact-info-wrap">
				<div>
					<h2>Phone:</h2>
				</div>
				<div>888-888-8888</div>
				<div>
					<h2>Email:</h2>
				</div>
				<div>sales@vinumauri.com</div>
			</div>
		</div>

		<div class="contact-form-wrap">
			<div class="contact-form">
				<form action="">
					{!! csrf_field() !!}
					<div class="form-msg">Please fill out the form below and we will respond to your inquiry as soon as possible:</div>
					<label>First Name:</label>
					<input type="text" name="firstname">
					<label>Last Name:</label>
					<input type="text" name="lastname">
					<label>Email:</label><br>
					<input type="email" name="email"><br>
					<label>Phone:</label><br>
					<input type="tel" name="phone"><br>
					<label>Message:</label><br>
					<textarea name="message"></textarea><br>
					<button>Submit</button>
				</form>
			</div>
		</div>

	</section>
	
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="/bower_components/gmaps/gmaps.js"></script>
	<script src="/js/g_maps.js"></script>
	
@endsection