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

	public function showCart() {

		if (Session::has('cart')) {
			$cart = Session::get('cart');
			$products = Product::allProductsDetails();
		} else {
			$cart = [];
			$products = [];
		}

		return view('cart', ['cart' => $cart, 'products' => $products]);

	}

	public function removeProductFromCart() {

		if (Session::has('cart')) {
			$cart = Session::get('cart');
		}
		
		$productID = Request::input('productID');

		unset($cart[$productID]);

		Session::set('cart', $cart);
		
		return $cart;
		
	}

}