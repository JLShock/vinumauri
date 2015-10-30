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
				<div class="product-detail">{{$products[1]->vintage}}<br> {{$products[1]->wineType}}</div>
				<div class="product-price">${{$products[1]->price}}</div>
				<div>
					<input type="number" name="quantity" min="1" placeholder="1">
					<button class="add">Add</button>
				</div>
			</div>
			<div class="order-product">
				<div class="product-image">
					<img src="/products/{{$products[2]->productImg}}">
				</div>
				<div class="product-detail">{{$products[2]->vintage}}<br> {{$products[2]->wineType}}</div>
				<div class="product-price">${{$products[2]->price}}</div>
				<div>
					<input type="number" name="quantity" min="1" placeholder="1">
					<button class="add">Add</button>
				</div>
			</div>
			<div class="order-product">
				<div class="product-image">
					<img src="/products/{{$products[3]->productImg}}">
				</div>
				<div class="product-detail">{{$products[3]->name}}<br> {{$products[2]->vintage}} {{$products[2]->wineType}}</div>
				<div class="product-price">${{$products[3]->price}}</div>
				<div>
					<input type="number" name="quantity" min="1" placeholder="1">
					<button class="add">Add</button>
				</div>
			</div>
			<div class="order-product">
				<div class="product-image">
					<img src="/products/{{$products[4]->productImg}}">
				</div>
				<div class="product-detail">{{$products[4]->name}}</div>
				<div class="product-price">${{$products[4]->price}}</div>
				<div>
					<input type="number" name="quantity" min="1" placeholder="1">
					<button class="add">Add</button>
				</div>
			</div>
			<div class="order-product">
				<div class="product-image">
					<img src="/products/{{$products[0]->productImg}}">
				</div>
				<div class="product-detail">{{$products[0]->name}}<br> 1 case/year @ 20% off</div>
				<div class="product-price">${{$products[0]->price}}</div>
				<div>
					<input type="number" name="quantity" min="1" placeholder="1">
					<button class="add">Add</button>
				</div>
			</div>
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
@endsection

<script>
	
</script>