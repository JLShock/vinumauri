<?php

namespace App\Http\Controllers;
use App\Models\Order;

class CartController extends Controller 
{

	public function addProductToCart() {
		
		$cart = session('cart');

		if(!$cart){
			$cart = [];
			session(['cart' => $cart];
		}

	}

	public function deleteProductFromCart() {
		
		$product = Cart::deleteItem($invoice_id,$item_id);
		return redirect("invoice/{$invoice_id}");

	}
}