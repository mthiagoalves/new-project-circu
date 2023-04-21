@extends('layouts.master-email')

@section('main-content')

	<p>
		<b>Interested In:</b> Book a Meeting at {{ $fair_name }}<br/><br/>
		
		<b>Brand Ambassador:</b> {{ $brand_ambassador }}<br/>
		<b>Choosen Date:</b> {{ $choosen_date }}<br/>

		<b>Email:</b> {{ $email }}<br/>
		<b>Name:</b> {{ $name }}<br/>
		<b>Occupation:</b> {{ $occupation }}<br/>
		<b>Company:</b> {{ $company }}<br/>
		<b>Country:</b> {{ $country }}<br/>
		<b>Phone number:</b> {{ $phone }}<br/>

	</p>

@endsection