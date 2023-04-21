@extends('layouts.master-email')

@section('main-content')

	<p>
		<b>Interested In:</b> Digital Ebook<br/><br/>

		{{ $product }}<br/>

		<b>Email:</b> {{ $email }}<br/>
		<b>Name:</b> {{ $name }}<br/>
		<b>Occupation:</b> {{ $occupation }}<br/>
		<b>Company:</b> {{ $company }}<br/>
		<b>Country:</b> {{ $country }}<br/>
		<b>City:</b> {{ $city }}<br/>

	</p>

@endsection