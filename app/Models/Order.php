<?php
namespace App\Models;
use DB;

class Order {

	public static function allProductsDetails() {
 
        $sql = " SELECT * 
        	FROM products";

		$allProductsDetails = DB::select($sql);
		return $allProductsDetails;

    }
}