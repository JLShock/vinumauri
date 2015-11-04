@extends('home-master')

@section('title', 'Vinum Auri')

@section('content')
	
	<div class="home-background"></div>

    <section class="hero-panel">
    	<div class="home-actions">
            <a href="/order">
        		<div class="home-action">
        			Order Vinum Auri
        		</div>
            </a>
            <a href="/membership">
        		<div class="home-action">
        			Join the Wine Club
        		</div>
            </a>
            <a href="/contact">
                <div class="home-action">
                    Contact
                </div>
            </a>
    	</div>
    </section>

@endsection