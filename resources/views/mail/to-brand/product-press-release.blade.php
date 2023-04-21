@extends('layouts.master-email')

@section('main-content')

	<p>
		<b>Interested In:</b> Press Release {{$product_name}}<br/><br/>

		<b>Email:</b> {{ $email }}<br/>
		<b>Name:</b> {{ $name }}<br/>
		<b>Occupation:</b> {{ $occupation }}<br/>
		<b>Country:</b> {{ $country }}<br/>

	</p>

@endsection