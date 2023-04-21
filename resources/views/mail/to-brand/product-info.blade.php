@extends('layouts.master-email')

@section('main-content')

	<p>
		<b>Interested In:</b> Info about {{$product_name}}<br/><br/>

		<b>Email:</b> {{ $email }}<br/>
		<b>Name:</b> {{ $name }}<br/>
		<b>Occupation:</b> {{ $occupation }}<br/>
		<b>Company:</b> {{ $company }}<br/>
		<b>Country:</b> {{ $country }}<br/>
		<b>City:</b> {{ $city }}<br/>
		<b>Phone number:</b> {{ $phone }}<br/>
		<b>Hear About:</b> {{ $hear_about }}<br/>

	</p>

@endsection