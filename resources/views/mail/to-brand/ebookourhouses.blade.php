@extends('layouts.master-email')

@section('main-content')

<p>
    <b>Interested In:</b> Ebook Our Houses<br /><br />

    <b>Email:</b> {{ $email }}<br />
    <b>Name:</b> {{ $name }}<br />
    <b>Company:</b> {{ $company }}<br />
    <b>Country:</b> {{ $country }}<br />

</p>

@endsectioneb