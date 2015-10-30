<?php

class CheckoutController extends Controller 
{
	$diffship = Request::input();

	$order->billing_dob_month = Request::input('billing_dob_month');
	$order->billing_dob_day = Request::input('billing_dob_day');
	$order->billing_dob_year = Request::input('billing_dob_year');
	$order->billing_firstname = Request::input('billing_firstname');
	$order->billing_lastname = Request::input('billing_lastname');
	$order->billing_address1 = Request::input('billing_address1');
	$order->billing_address2 = Request::input('billing_address2');
	$order->billing_city = Request::input('billing_city');
	$order->billing_state = Request::input('billing_state');
	$order->billing_zipcode = Request::input('billing_zipcode');
	$order->billing_phone = Request::input('billing_phone');
	$order->billing_email = Request::input('billing_email');

	if($diffship) {
		$order->shipping_dob_month = Request::input('shipping_dob_month');
		$order->shipping_dob_day = Request::input('shipping_dob_day');
		$order->shipping_dob_year = Request::input('shipping_dob_year');
		$order->shipping_firstname = Request::input('shipping_firstname');
		$order->shipping_lastname = Request::input('shipping_lastname');
		$order->shipping_address1 = Request::input('shipping_address1');
		$order->shipping_address2 = Request::input('shipping_address2');
		$order->shipping_city = Request::input('shipping_city');
		$order->shipping_state = Request::input('shipping_state');
		$order->shipping_zipcode = Request::input('shipping_zipcode');
		$order->shipping_phone = Request::input('shipping_phone');
		$order->shipping_email = Request::input('shipping_email');
	} else {
		$order->shipping_dob_month = Request::input('billing_dob_month');
		$order->shipping_dob_day = Request::input('billing_dob_day');
		$order->shipping_dob_year = Request::input('billing_dob_year');
		$order->shipping_firstname = Request::input('billing_firstname');
		$order->shipping_lastname = Request::input('billing_lastname');
		$order->shipping_address1 = Request::input('billing_address1');
		$order->shipping_address2 = Request::input('billing_address2');
		$order->shipping_city = Request::input('billing_city');
		$order->shipping_state = Request::input('billing_state');
		$order->shipping_zipcode = Request::input('billing_zipcode');
		$order->shipping_phone = Request::input('billing_phone');
		$order->shipping_email = Request::input('billing_email');
	};
}