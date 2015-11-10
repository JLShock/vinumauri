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

@section('title', 'Vinum Auri: Membership')

@section('content')
	
	<div class="background-mask"></div>
	<div class="membership-background"></div>

	<section class="hero-panel">

		<div class="main-title">
			<h1>Wine Club Membership</h1>
		</div>

        <div class="membership-wrap">

            <div class="membership-info-wrap">

                <div class="membership-image"></div>

                <div class="membership-info">
                    <div class="membership-content">
                        <p>Classic Wines share one common thread together worldwide - an intimate relationship witht the place they originate from. Our Vinum Auri proudly shares this unique style, coming from the Rutherford appellation on the west side of Napa Valley.</p><br>
                        <p>Your are invited to be a preferred member of the Vinum Auri Gold Wine Club and enjoy quarterly newsletters, industry events, tasting notes, special pre-released vintage allocation offers and pricing, invitations to various member-only events and access to private winery tastings.</p>
                    </div>
                    <div class="membership-highlights">
                        <span>• Special pre-released vintage allocation offers and pricing</span><br>
                        <span>• Invitations to various member-only events</span><br>
                        <span>• Access to private winery tastings</span><br>
                        <span>• Industry events</span><br>
                        <span>• Tasting notes &amp; Quarterly newsletters</span>
                    </div>
                </div>

            </div>

        </div>

	</section>

@endsection