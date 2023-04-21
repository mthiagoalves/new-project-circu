@extends('layouts.master-email')

@section('main-content')
	<p>
		Circu <b>Download <i>{{ $prod_name }} {{ $prod_type }}</i></b><br/><br/>

        <b>Name:</b> {{ $first_name }} {{ $last_name }}<br/>
		<b>Email:</b> {{ $email }}<br/>
        <b>Phone:</b> {{ $phone }}<br/>
        <b>Country:</b> {{ $country }}<br/>
        @if($state != '')
        <b>State:</b> {{ $state }}<br/>
        @endif
        @if($occupation != '')
        <b>Industry:</b> {{ $occupation }}<br/>
        @endif
        @if($occupation != '')
        <b>Company:</b> {{ $company }}<br/>
        @endif
        <b>Product:</b> {{ $prod_name }}<br/>
		<b>Type:</b> {{ $prod_type }}<br/><br/><br/>

		<b>Referrer:</b> {{$referrer}}<br/>
		<b>Origin:</b> {{$origin}}<br/>
		<b>Conversion:</b> {{$_SERVER['HTTP_REFERER']}}<br/><br/>
        
	</p>

@endsection
