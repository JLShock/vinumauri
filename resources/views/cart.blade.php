@extends('master')

@section('title', 'Vinum Auri: Cart')

@section('content')
	
	<div class="background-mask"></div>
	<div class="order-background"></div>

	<section class="hero-panel">
		<div class="main-title">
			<h1>Shopping Cart</h1>
		</div>
		<table class="cart-items">
			<tr class="cart-item">
				<td>
					<div class="cart-product-image">
						<img src="">
					</div>
				</td>
				<td>Name</td>
				<td>$Price</td>
				<td># <input type="number" name="quantity" min="1" placeholder="1"></td>
				<td><a href="#" class="cart-delete">X</a></td>
			</tr>
			<tr class="cart-item">
				<td>
					<div class="cart-product-image">
						<img src="">
					</div>
				</td>
				<td>Name</td>
				<td>$Price</td>
				<td># <input type="number" name="quantity" min="1" placeholder="1"></td>
				<td><a href="#" class="cart-delete">X</a></td>
			</tr>
		</table>
		<div class="cart-total">
			Total (# items): $00.00
		</div>
		<div class="cart-checkout">
			<button class="checkout-button"><a href="/checkout">Checkout</a></button>
		</div>
	</section>

@endsection