@extends('layouts.master-email')

@section('main-content')

	<p>
		<b>Interested In:</b> Subscribe Newsletter<br/><br/>

		<b>Email:</b> {{ $email }}<br/>

		<b>Country:</b> {{ $country }}<br/>

	</p>

@endsection