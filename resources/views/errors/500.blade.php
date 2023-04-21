
@extends('layouts.master')
<title>Error 500</title>
@section('main-content')

    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 error-page">
                <h2 class="highlight_blue">WE COULDN'T FIND WHAT YOU ARE LOOKING FOR..</h2>
                <h3>Want to play Pacman instead?</h3>
            </div>

             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="frame-holder">
                    <object type="application/x-shockwave-flash" name="name" data="/includes/swf/pacman.swf" width="977" height="500" id="flash-404" style="visibility: visible;"><param name="quality" value="high"><param name="wmode" value="transparent"></object>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 error-page">
                <a href="http://www.circu.net">Return to Homepage</a>
            </div>
        </div>
    </div>
    <!-- end container-inner -->

@endsection
