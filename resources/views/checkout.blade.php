<?php

$dates = array(
	1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31
);

$months = array(
	'1'=>'January',
	'2'=>'February',
	'3'=>'March',
	'4'=>'April',
	'5'=>'May',
	'6'=>'June',
	'7'=>'July',
	'8'=>'August',
	'9'=>'September',
	'10'=>'October',
	'11'=>'November',
	'12'=>'December',
);

$states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
);

?>

@extends('master')

@section('title', 'Vinum Auri: Checkout')

@section('content')
	
	<div class="background-mask"></div>
	<div class="order-background"></div>

	<section class="hero-panel">

		<div class="main-title">
			<h1>Checkout</h1>
		</div>

		<form class="checkout-form" method="GET" action="/confirmation">
			{!! csrf_field() !!}

			<div class="personal-info-wrap">

				<h3>&nbsp;Personal Information:</h3>

				<div class="same-as-billing"><input class="shippingtoo" type="checkbox" name="shippingtoo"> Shipping Is Different Than Billing</div>

				<div class="personal-info">

					<div class="billing-info">
						<h4>Billing Information</h4>
						<table>
							<tr>
								<td class="form-title">Birth Date:</td>
								<td class="form-fill">
									<select name="billing_dob_month" required>
										<option value="-">-</option>
										@foreach($months as $month_key => $month_val)
											<option value="{{$month_key}}">{{$month_val}}</option>
										@endforeach
									</select>
									<select name="billing_dob_day" required>
										<option value="-">-</option>
										@foreach($dates as $date)
											<option value="{{$date}}">{{$date}}</option>
										@endforeach
									</select>
									<select name="billing_dob_year" required>
										<option value="-">-</option>
										@for ($i = (date("Y") - 21); $i > 1914; $i--)
    										<option>{{ $i }}</option>
										@endfor
									</select>
								</td>
							</tr>
							<tr>
								<td class="form-title">First Name:</td>
								<td class="form-fill">
									<input type="text" name="billing_firstname" required>
								</td>
							</tr>
							<tr>
								<td class="form-title">Last Name:</td>
								<td class="form-fill">
									<input type="text" name="billing_lastname" required>
								</td>
							</tr>
							<tr>
								<td class="form-title">Address 1:</td>
								<td class="form-fill">
									<input type="text" name="billing_address1" required>
								</td>
							</tr>
							<tr>
								<td class="form-title">Address 2:</td>
								<td class="form-fill">
									<input type="text" name="billing_address2">
								</td>
							</tr>
							<tr>
								<td class="form-title">City:</td>
								<td class="form-fill">
									<input type="text" name="billing_city" required>
								</td>
							</tr>
							<tr>
								<td class="form-title">State:</td>
								<td class="form-fill">
									<select name="billing_state" required>
										<option value="-">-</option>
										@foreach($states as $state_key => $state_val)
											<option value="{{$state_key}}">{{$state_val}}</option>
										@endforeach
									</select>
								</td>
							</tr>
							<tr>
								<td class="form-title">Zip Code:</td>
								<td class="form-fill">
									<input type="text" name="billing_zipcode" required>
								</td>
							</tr>
							<tr>
								<td class="form-title">Phone:</td>
								<td class="form-fill">
									<input type="tel" name="billing_phone" required>
								</td>
							</tr>
							<tr>
								<td class="form-title">Email:</td>
								<td class="form-fill">
									<input type="email" name="billing_email" required>
								</td>
							</tr>
						</table>
					</div>

					<div class="shipping-info hidden">
						<h4>Shipping Information</h4>
						<table>
							<tr>
								<td class="form-title">Birth Date:</td>
								<td class="form-fill">
									<select name="shipping_dob_month">
										<option value="-">-</option>
										@foreach($months as $month_key => $month_val)
											<option value="{{$month_key}}">{{$month_val}}</option>
										@endforeach
									</select>
									<select name="shipping_dob_day">
										<option value="-">-</option>
										@foreach($dates as $date)
											<option value="{{$date}}">{{$date}}</option>
										@endforeach
									</select>
									<select name="shipping_dob_year">
										<option value="-">-</option>
										@for ($i = (date("Y") - 21); $i > 1914; $i--)
    										<option>{{ $i }}</option>
										@endfor
									</select>
								</td>
							</tr>
							<tr>
								<td class="form-title">First Name:</td>
								<td class="form-fill">
									<input type="text" name="shipping_firstname">
								</td>
							</tr>
							<tr>
								<td class="form-title">Last Name:</td>
								<td class="form-fill">
									<input type="text" name="shipping_lastname">
								</td>
							</tr>
							<tr>
								<td class="form-title">Address 1:</td>
								<td class="form-fill">
									<input type="text" name="shipping_address1">
								</td>
							</tr>
							<tr>
								<td class="form-title">Address 2:</td>
								<td class="form-fill">
									<input type="text" name="shipping_address2">
								</td>
							</tr>
							<tr>
								<td class="form-title">City:</td>
								<td class="form-fill">
									<input type="text" name="shipping_city">
								</td>
							</tr>
							<tr>
								<td class="form-title">State:</td>
								<td class="form-fill">
									<select name="shipping_state">
										<option value="-">-</option>
										@foreach($states as $state_key => $state_val)
											<option value="{{$state_key}}">{{$state_val}}</option>
										@endforeach
									</select>
								</td>
							</tr>
							<tr>
								<td class="form-title">Zip Code:</td>
								<td class="form-fill">
									<input type="text" name="shipping_zipcode">
								</td>
							</tr>
							<tr>
								<td class="form-title">Phone:</td>
								<td class="form-fill">
									<input type="tel" name="shipping_phone">
								</td>
							</tr>
							<tr>
								<td class="form-title">Email:</td>
								<td class="form-fill">
									<input type="email" name="shipping_email">
								</td>
							</tr>
						</table>
					</div>

				</div>

			</div>

			<div class="payment-info-wrap">

				<h3>&nbsp;Payment Information:</h3>

				<div class="payment-info">

					<h4>Credit Card Information</h4>

					<table>
						<tr>
							<td class="form-title">Card Number:</td>
							<td class="form-fill">
								<input type="text" name="cc_number" maxlength="16" required>
								<span class="form-comment">* No dashes or spaces</span>
							</td>
						</tr>
						<tr>
							<td class="form-title">Card Expiration:</td>
							<td class="form-fill">
								<select name="ccexp_month" required>
									<option value="-">-</option>
									@foreach($months as $month_key => $month_val)
										<option value="{{$month_key}}">{{$month_key}}</option>
									@endforeach
								</select>
								<select class="exp-year" name="ccexp_year" required>
									<option value="-">-</option>
									@for ($i = (date("Y")); $i < 2042; $i++)
    									<option>{{ $i }}</option>
									@endfor
								</select>
							</td>
						</tr>
						<tr>
							<td class="form-title">CVV:</td>
							<td class="form-fill">
								<input class="cvv" type="text" name="cc_ccv" maxlength="4" required>
							</td>
						</tr>
						<tr>
							<td class="form-title">Name On Card:</td>
							<td class="form-fill">
								<input type="text" name="cc_nameoncard" required>
							</td>
						</tr>
					</table>

				</div>

			</div>

			<button class="place-order">Place Order</button>

		</form>
		
	</section>

@endsection