<?php

namespace App\Http\Controllers;
use App\Models\Order;

class OrderController extends Controller 
{
	public function showAll() {
		$products = Order::allProductsDetails();
		return view('order', ['products'=>$products]);
	}
}