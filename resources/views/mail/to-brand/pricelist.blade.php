@extends('layouts.master-email')

@section('main-content')
@php 
$first_name =  $request['first_name']; 
$last_name =  $request['last_name']; 
$email = $request['email'];
$country = $request['country'];
$state = $request['state'];
$city = $request['city'];
$company = $request['company'];
$occupation = $request['occupation'];
$hear_about = $request['hear_about'];

$origin = $request['origin'];
$referrer = $request['referrer'];
@endphp
<p>
	<b>Interested In:</b> Pricelist<br /><br />

	<b>Name:</b> {{ $first_name }} {{ $last_name }}<br />
	<b>Email:</b> {{ $email }}<br />
	<b>Country:</b> {{ $country }}<br />
	@if($state != '')
		<b>State:</b> {{ $state }}<br />
	@endif
	<b>City:</b> {{ $city }}<br />
	<b>Company:</b> {{ $company }}<br />
	<b>Occupation:</b> {{ $occupation }}<br />
	<b>Hear About:</b> {{ $hear_about }}<br />
	@if($details != '')
		<b>More Info:</b> {{ $details }}<br /><br />
	@endif
	
	<b>Origin:</b> {{ $origin }}<br />
	<b>Converted:</b> {{ $url_converted }}<br />
	<b>Referrer:</b> {{ $referrer }}<br />
</p>

@endsection