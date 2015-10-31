<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Request;
use Session;

class CartController extends Controller 
{

	public function addProductToCart() {
		$cart = [];

		if (Session::has('cart')) {
			$cart = Session::get('cart');
		}
 
		$productID = Request::input('productID');
		$quantity = Request::input('quantity');

		$cart[$productID] = $quantity;

		Session::put('cart', $cart);

		return $cart;
	}

	public function removeProductFromCart() {	

	}

	public function updateQuantity() {	

	}
}