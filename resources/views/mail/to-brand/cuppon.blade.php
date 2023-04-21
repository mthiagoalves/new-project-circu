@extends('layouts.master-email')

@section('main-content')

<p>
    <b>Interested In:</b> Deals - {{ $more_info }} <br /><br />

    <b>Email:</b> {{ $email }}<br />
    <b>Name:</b> {{ $name }}<br />
    <b>Occupation:</b> {{ $occupation }}<br />
    <b>Company:</b> {{ $company }}<br />
    <b>Country:</b> {{ $country }}<br />
    <b>Phone number:</b> {{ $phone }}<br />

</p>

@endsection