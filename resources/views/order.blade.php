@extends('master')

@section('title', 'Vinum Auri: Order')

@section('content')
	
	<div class="background-mask"></div>
	<div class="order-background"></div>

	<section class="hero-panel">
		<div class="main-title">
			<h1>Order Vinum Auri</h1>
		</div>
		
		<div class="order-products">
			<div class="order-product">
				<div class="product-image">
					<img src="/products/{{$products[1]->productImg}}">
				</div>
				<div class="product-detail">{{$products[1]->name}}<br> {{$products[1]->vintage}} {{$products[1]->wineType}}</div>
				<div class="product-price">${{$products[1]->price}}</div>
				<div class="product-purchase">
					<input class="item-quantity" type="number" name="quantity" min="1" value="1">
					<button class="add-button" data-productID="2">Add</button>
				</div>
			</div>
			<div class="order-product">
				<div class="product-image">
					<img src="/products/{{$products[2]->productImg}}">
				</div>
				<div class="product-detail">{{$products[2]->name}}<br> {{$products[2]->vintage}} {{$products[2]->wineType}}</div>
				<div class="product-price">${{$products[2]->price}}</div>
				<div class="product-purchase">
					<input class="item-quantity" type="number" name="quantity" min="1" value="1">
					<button class="add-button" data-productID="3">Add</button>
				</div>
			</div>
			<div class="order-product">
				<div class="product-image">
					<img src="/products/{{$products[3]->productImg}}">
				</div>
				<div class="product-detail">{{$products[3]->name}}<br> {{$products[3]->vintage}} {{$products[3]->wineType}}</div>
				<div class="product-price">${{$products[3]->price}}</div>
				<div class="product-purchase">
					<input class="item-quantity" type="number" name="quantity" min="1" value="1">
					<button class="add-button" data-productID="4">Add</button>
				</div>
			</div>
			<div class="order-product">
				<div class="product-image">
					<img src="/products/{{$products[4]->productImg}}">
				</div>
				<div class="product-detail">{{$products[4]->name}}</div>
				<div class="product-price">${{$products[4]->price}}</div>
				<div class="product-purchase">
					<input class="item-quantity" type="number" name="quantity" min="1" value="1">
					<button class="add-button" data-productID="5">Add</button>
				</div>
			</div>
			@if(!Auth::user())
				<div class="order-product">
					<div class="product-image">
						<img src="/products/{{$products[0]->productImg}}">
					</div>
					<div class="product-detail">{{$products[0]->name}}<br> 1 case/year @ 20% off</div>
					<div class="product-price">${{$products[0]->price}}</div>
					<div class="product-purchase">
						<input class="item-quantity" type="hidden" name="wineclub" value="1">
						<button class="add-button" data-productID="1">Join</button>
					</div>
				</div>
			@else
				@if($user->clubMember == 0)
					<div class="order-product">
					<div class="product-image">
						<img src="/products/{{$products[0]->productImg}}">
					</div>
					<div class="product-detail">{{$products[0]->name}}<br> 1 case/year @ 20% off</div>
					<div class="product-price">${{$products[0]->price}}</div>
					<div class="product-purchase">
						<input class="item-quantity" type="hidden" name="wineclub" value="1">
						<button class="add-button" data-productID="1">Join</button>
					</div>
				</div>
				@endif
			@endif
		</div>
		<div class="goto-cart">
			<a href="/cart">
				<div class="goto-cart">
					<img src="images/shoppingcart.png">
					<div>Go to cart</div>
				</div>
			</a>
		</div>
	</section>
	
	<script type=text/javascript>
		$(document).ready(function() {
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{!! csrf_token() !!}'
                }
            });
		});
	</script>
@endsection