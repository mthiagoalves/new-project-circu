@extends('layouts.master-email')

@section('main-content')

	<p>
		<b>Interested In:</b> Campaign | {{ $interested_in }}<br/><br/>

		<b>Email:</b> {{ $email }}<br/>
		<b>Name:</b> {{ $first_name }} {{ $last_name }}<br/>
		<b>Country:</b> {{ $country }}<br/>
		<b>Company:</b> {{ $company }}<br/>
		<b>Phone number:</b> {{ $phone }}<br/>

	</p>

@endsection
