@extends('master')

@section('title', 'Vinum Auri: Account')

@section('content')
	
	<div class="background-mask"></div>
	<div class="thewine-background"></div>

	<section class="hero-panel">

		<div class="main-title">
			<h1>Welcome {{ $user->firstName }}</h1>
		</div>
		
	</section>

@endsection