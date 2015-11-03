<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller 
{
	public function showAll() {
		$products = Product::allProductsDetails();
		return view('order', ['products' => $products]);
	}
	
}