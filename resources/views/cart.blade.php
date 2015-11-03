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
			<?php $cartTotal = 0;?>
			@foreach($products as $product)
				@if(isset($cart[$product->id]))
					<?php $cartTotal += ($product->price * $cart[$product->id]);?>
					<tr class="cart-item" data-productID="{{$product->id}}">
						<td>
							<div class="cart-product-image">
								<img src="/products/{{ $product->productImg }}">
							</div>
						</td>
						@if($product->productType == 'club')
							<td>
								{{ $product->name }}
							</td>
							<td class="cart-item-price">
								{{ $product->price}}
							</td>
							<td class="cart-item-quantity">
								# <input class="item-quantity" type="number" name="quantity" value="1" readonly>
							</td>
						@else
							@if($product->productType == 'wine')
								<td>
									{{ $product->name }}:
									{{ $product->vintage }}
									{{ $product->wineType }}
								</td>
							@else
								<td>
									{{ $product->name }}
								</td>
							@endif
							<td class="cart-item-price">
								{{ $product->price }}
							</td>
							<td class="cart-item-quantity">
								# <input class="item-quantity" type="number" name="quantity" min="1" value="{{$cart[$product->id]}}">
							</td>
						@endif
						<td>
							<a href="/api/cart/remove" class="cart-delete">X</a>
						</td>
					</tr>
				@endif
			@endforeach
		</table>
		<div class="cart-total">
			( <span class="cart-total-count">{{ count($cart) }}</span> ) Total: <span class="cart-total-price">{{ money_format('$%i', $cartTotal) }}</span>
		</div>
		<div class="cart-checkout">
			<button class="checkout-button"><a href="/checkout">Checkout</a></button>
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