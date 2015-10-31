<?php
namespace App\Models;
use DB;

class Product {

	public static function allProductsDetails() {
 
        $sql = " SELECT * 
        	FROM products";

		$allProductsDetails = DB::select($sql);
		return $allProductsDetails;

    }
}