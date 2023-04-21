@extends('layouts.master-email')

@section('main-content')

<p>
    <b>Interested In:</b> Deals - {{ $more_info }} <br /><br />

    <b>Email:</b> {{ $email }}<br />

</p>

@endsection