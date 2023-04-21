@extends('layouts.master-email')

@section('main-content')
@php 
$first_name =  $request['first_name']; 
$last_name =  $request['last_name']; 
$name_ebook = $request['product_name'];
$email = $request['email'];
$country = $request['country'];
$state = '';
$city = $request['city'];
$company = $request['company'];
$company = $request['company'];
$occupation = $request['occupation'];

<!-- $origin = $request['origin'];
$referrer = $request['referrer']; -->
@endphp
<p>
	<b>Download:</b> {{$name_ebook}}<br /><br />

	<b>Name:</b> {{ $first_name }} {{ $last_name }}<br />
	<b>Email:</b> {{ $email }}<br />
	<b>Country:</b> {{ $country }}<br />
	@if($state != '')
		<b>State:</b> {{ $state }}<br /><br />
	@endif
	<b>City:</b> {{ $city }}<br />
	<b>Company:</b> {{ $company }}<br />
	<b>Occupation:</b> {{ $occupation }}<br />
	@if($details != '')
		<b>More Info:</b> {{ $details }}<br /><br />
	@endif
	<b>Converted:</b> {{ $url_converted }}<br />

	{{--<b>Origin:</b> {{ $origin }}<br />
	<b>Referrer:</b> {{ $referrer }}<br /> --}}
</p>

@endsection