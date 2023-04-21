@extends('layouts.master-email')

@section('main-content')

	<p>
		<b>From:</b> Contact Page <br/><br/>

		<b>Email:</b> {{ $email }}<br/>
		<b>Name:</b> {{ $name }}<br/>
		<b>Occupation:</b> {{ $occupation }}<br/>
		<b>Company:</b> {{ $company }}<br/>
		<b>Country:</b> {{ $country }}<br/>
		<b>City:</b> {{ $city }}<br/>
		<b>Phone number:</b> {{ $phone }}<br/>
		<b>Hear About:</b> {{ $hear_about }}<br/><br/>

		<b>Details:</b> {{ $details }} <br/>



	</p>

@endsection