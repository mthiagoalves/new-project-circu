@extends('layouts.master')
@section('meta')
<title>{{$meta_data->meta_title}}</title>
<meta name="description" content="{{$meta_data->meta_description}}" />
<meta name="keywords" content="{{$meta_data->key_words}}" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$meta_data->meta_title}}" />
<meta property="og:description" content="{{$meta_data->meta_description}}" />
<meta property="og:url" content="http://www.circu.net/contact" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection
@section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
    p {
        font-family: 'RalewayMedium', sans-serif;
    }

    .form-catlogue-r .form-catalogue-middle-banner {
        top: unset !important;
        transform: unset !important;
    }

    .product-caption {
        font-size: 0.7rem !important;
    }

    .btn-view-more a {
        font-size: 0.70rem;
        letter-spacing: 1px;
        font-weight: 600;
        width: 80%;
    }

    .owl-nav {
        font-size: 1.6rem;
        color: #cccccc;
    }

    .input-block {
        margin: 0px 0px 10px;
    }

    .hotspot {
        position: absolute;
        display: block;
        z-index: 999999;
    }

    .hotspot--title {
        position: absolute;
        margin: 0;
        background-color: #FFFFFF;
        padding: 14px;
        width: 20em;
        max-width: 50vw;
        z-index: 1;
        opacity: 0;
        display: none;
        padding-right: 10px;
        color: #413e3e;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
        transition: all cubic-bezier(.8, 0, .2, 1) .4s;
    }

    .owl-carousel .owl-item img,
    .owl-slide_animated .owl-item img {
        display: block;
        width: 100% !important;
        margin: 0 auto;
    }

    .close-hotspot {
        right: 0.4rem;
        top: 0.3rem;
        text-align: right;
        font-size: 1.1rem;
        position: absolute;
        cursor: pointer;
    }

    .hotspot-img {
        max-height: 180px;
        width: auto;
    }

    .hotspot-name {
        text-align: center;
        color: #7d7d7d;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 1px;
    }

    a .hotspot-description {
        font-size: 0.6rem;
        line-height: 15px;
        color: #7d7d7d;
        text-transform: capitalize;
    }

    .hotspot-get-price {
        background-color: #94b7b3;
        color: #FFFFFF;
        padding: 4px 20px;
        margin: 5px 0px;
        display: inline-block;
    }

    .hotspot--title__right .hotspot--cta {
        float: right;
    }

    .hotspot--title__left .hotspot--cta {
        float: left;
    }

    .hotspot--cta {
        position: relative;
        float: right;
        display: inline-block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        z-index: 9;
        background: transparent;
        border: 1px solid #fff;
        cursor: pointer;
        transition: all cubic-bezier(.8, 0, .2, 1) .4s;
        z-index: 999999;
    }

    .hotspot--cta::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #fff;
        z-index: 2;
        transition: opacity .6s;
        animation: pulse 1.5s cubic-bezier(.8, 0, .2, 1) 0s infinite;
    }

    .hotspot:hover .hotspot--cta {
        transform: scale(.6);
    }

    /*.hotspot:hover .hotspot--cta:after {
              opacity: 0;
            }*/
    /*.hotspot--cta:hover + .hotspot--title{
              opacity: 1;
            }*/
    .lg-hotspot--selected {
        z-index: 999;
    }

    .lg-hotspot--selected .hotspot--title {
        opacity: 1;
        display: inline-block;
    }

    @keyframes pulse {
        0% {
            transform: scale(0.4);
        }

        33% {
            transform: scale(1);
        }

        66% {
            transform: scale(0.4);
        }

        100% {
            transform: scale(0.4);
        }
    }

    /*** ***/
    .hotspot--sky-nightstand {
        top: 60%;
        right: 31%;
    }

    .hotspot--sky-nightstand .hotspot--title {
        bottom: -15%;
        right: 105%;
    }

    .hotspot--stellar-round-rug {
        bottom: 12%;
        left: 27%
    }

    .hotspot--stellar-round-rug .hotspot--title {
        bottom: -15%;
        right: 105%;
    }

    .hotspot--atomic-wall-lamp {
        top: 17%;
        left: 33%;
    }

    .hotspot--atomic-wall-lamp .hotspot--title {
        top: 18%;
        left: 105%;
    }

    .hotspot--cloud-6-drawers {
        top: 5%;
        left: 9%;
    }

    .hotspot--cloud-6-drawers .hotspot--title {
        top: 18%;
        left: 105%;
    }

    .hotspot--cloud-bed {
        top: 21%;
        right: 59%;
    }

    .hotspot--cloud-bed .hotspot--title {
        top: 0%;
        right: 105%;
    }

    .hotspot--cloud-3-drawers {
        top: 26%;
        left: 73%;
    }

    .hotspot--cloud-3-drawers .hotspot--title {
        top: 9%;
        right: 105%;
    }

    .hotspot--animal-stool-shark {
        top: 60%;
        right: 8%;
    }

    .hotspot--animal-stool-shark .hotspot--title {
        bottom: -15%;
        right: 105%;
    }

    .hotspot--little-cloud-nightstand {
        top: 60%;
        right: 31%;
    }

    .hotspot--little-cloud-nightstand .hotspot--title {
        bottom: -15%;
        right: 105%;
    }

    .hotspot--cloud-nightstand {
        top: 64%;
        left: 23%;
    }

    .hotspot--cloud-nightstand .hotspot--title {
        bottom: -15%;
        left: 105%;
    }

    .hotspot--gold-box {}

    .hotspot--gold-box .hotspot--title {
        bottom: -15%;
        right: 105%;
    }

    .hotspot--cloud-bench-2-seat {
        top: 74%;
        left: 40%;
    }

    .hotspot--cloud-bench-2-seat .hotspot--title {
        bottom: -15%;
        left: 105%;
    }

    .hotspot--cloud-nightstand-girl {
        top: 54%;
        left: 15%;
    }

    .hotspot--cloud-nightstand-girl .hotspot--title {
        bottom: -15%;
        left: 105%;
    }



    /*** ***/
    .hotspot--kings-and-queens {
        top: 18%;
        right: 40%;
    }

    .hotspot--kings-and-queens .hotspot--title {
        top: 0%;
        left: 105%;
    }

    /*** ***/
    .hotspot--fantasy-air-balloon {
        top: 20%;
        right: 37%;
    }

    .hotspot--fantasy-air-balloon .hotspot--title {
        top: 0%;
        right: 105%;
    }


    /*** ***/

    .hotspot--cloud-shelf-big {
        top: 4%;
        right: 33%;
    }

    .hotspot--cloud-shelf-big .hotspot--title {
        top: 0%;
        left: 105%;
    }

    .hotspot--letter-a {
        top: 33%;
        left: 20%;
    }

    .hotspot--letter-a .hotspot--title {
        top: -142%;
        left: 118%;
    }

    .hotspot---swing {
        bottom: 16%;
        right: 24%;
    }

    .hotspot--booboo-swing .hotspot--title {
        bottom: 0%;
        right: 105%;
    }


    @media screen and (max-width: 640px) {
        .hotspot--title {
            line-height: 40px;
            font-size: 10px;
        }

        .hotspot--cta {
            width: 40px;
            height: 40px;
        }
    }

    @media screen and (max-width: 420px) {
        .hotspot--title {
            line-height: 30px;
            font-size: 9px;
        }

        .hotspot--cta {
            width: 30px;
            height: 30px;
        }
    }

    @media screen and (max-width: 320px) {
        .hotspot--title {
            display: none;
        }

        .hotspot--cta {
            width: 20px;
            height: 20px;
        }

        .hotspot--cta::after {
            width: 5px;
            height: 5px;
        }
    }

    /* --------------- linha de produtos --------------- */
    .slider-button-prev.prev-item {
        left: 1%;
        right: auto;
        font-size: 18px;
    }

    .slider-button-next.next-item {
        right: 1%;
        left: auto;
        font-size: 18px;
    }

    .slider-button-prev.prev-item,
    .slider-button-next.next-item {
        padding: 8px;
        cursor: pointer;
        position: absolute;
        top: 50%;
        z-index: 9999;
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent;
    }

    .slick-no-slide .slick-slide {
        float: none;
        display: inline-block !important;
    }

    .slick-no-slide .slick-track {
        width: 100% !important;
        text-align: center;
        transform: inherit !important;
    }

    .product-box {
        padding: 0.09rem;
        margin: 0;
    }

    .product_thumb {
        width: 100%;
        background-color: #F7F7F7;
        margin: 0;
        float: left;
        text-align: center;
    }

    .product--title {
        font-family: 'Raleway', sans-serif;
        text-align: center;
        color: #666666;
        font-size: 0.74rem;
    }

    .product--title .name {
        font-weight: bold;
        text-transform: uppercase;
    }

    .product--title .sub_category {
        text-transform: lowercase;
    }

    .clearfix {
        content: "";
        display: table;
        /* float: none; */
        clear: both;
    }

    .product-box--content {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        visibility: hidden;
        display: block;
        width: 100%;
        height: 100%;
        background-color: #FFFFFF;
        z-index: 3;
        padding: 12px;
        -webkit-transition: all 100ms ease 0ms;
        -o-transition: all 100ms ease 0ms;
        transition: all 100ms ease 0ms;
    }

    .product-box--share {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 12px;
    }

    .slideToggle a,
    .slideToggle a:hover {
        font-size: 12px;
        letter-spacing: 1px;
        padding: 5px 20px 4px;
        margin: 12px auto 0px;
        z-index: 2;
        background-color: #98b9b5;
        color: #FFFFFF;
        border: 1px solid #98b9b5;
        display: inline-block;
    }

    .product-box:hover .product-box--hover,
    .product-box:hover .product-box--content {
        visibility: visible;
        -webkit-box-shadow: 0px 0px 22px 0px rgb(0 0 0 / 30%);
        -moz-box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 22px 0px rgb(0 0 0 / 30%);
    }

    .product-box--share {
        position: absolute;
        bottom: 0;
        left: 0;
        padding: 12px;
    }

    .slick-slide {
        padding: 0px 3px;
        cursor: pointer;
    }

    .line {
        height: 1px;
        flex: 1;
        background-color: #89bab6;
    }

    /* --------------- linha de produtos --------------- */

    .ambients-form .owl-stage-outer,
    .ambients-form .owl-stage,
    .ambients-form .owl-item {
        height: 100% !important;
    }
</style>
@endsection
@section('main-content')
<div class="container-fluid my-3">
    <div class="row">
        <div class="col-12 col-xl-10 offset-xl-1">
            <div class="row">
                <div class="col-6 ambients-form product-slide text-center d-none d-lg-block pl-0">
                    <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme p-0 position-relative h-100">
                        <div class="item h-100">
                            <div class="col-12 product-slide text-center h-100" style="background-image: url(/img/contact/ambient-1-circu-magical-furniture.jpg);background-position: center center;background-size: cover;">
                            </div>
                        </div>
                        <div class="item h-100">
                            <div class="col-12 product-slide text-center h-100" style="background-image: url(/img/contact/ambient-2-circu-magical-furniture.jpg);background-position: center center;background-size: cover;">
                            </div>
                        </div>
                        <div class="item h-100">
                            <div class="col-12 product-slide text-center h-100" style="background-image: url(/img/contact/ambient-3-circu-magical-furniture.jpg);background-position: center center;background-size: cover;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 ambients-form product-slide text-center d-block d-lg-none pb-3">
                    <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme p-0 position-relative h-100">
                        <div class="item h-100">
                            <div class="col-12 product-slide text-center h-100 p-0">
                                <img src="/img/contact/ambient-1-circu-magical-furniture.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="item h-100">
                            <div class="col-12 product-slide text-center h-100 p-0">
                                <img src="/img/contact/ambient-2-circu-magical-furniture.jpg" class="img-fluid">
                            </div>
                        </div>
                        <div class="item h-100">
                            <div class="col-12 product-slide text-center h-100 p-0">
                                <img src="/img/contact/ambient-3-circu-magical-furniture.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 product-details">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-details__intro clearfix col mb-2 p-0">
                                <div class="float-left">
                                    <h1 class="product-details__name">WELCOME TO CIRCU MAGICAL FURNITURE!</h1>
                                    <h2 class="product-details__category" style="color:#8bb9b6;">
                                        it's a pleasure to meet you.
                                    </h2>
                                </div>
                            </div>
                            <div class="product-details__description mb-3">
                                <div class="col col-xl-12 text-justify p-0">
                                    <p>Please leave your contact information below as well your questions so that our
                                        magical team can enter, as soon as possible, in contact with you.</p>
                                </div>
                            </div>
                            <form method="post" class="col-xl-12  p-0 form-popup form-parsley" action="{{ route('process.contact') }}">
                                <div class="row">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="more_info" value="Contact" />
                                    <input type="hidden" name="origin" class="origin" />
                                    <input type="hidden" name="referrer" class="referrer" />
                                    <input type="hidden" name="lead_path" class="lead_path" />
                                    <input type="text" name="interested" class="interested">

                                    <div class="col-sm-6">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <span class="txt-request">Name:*</span>
                                            <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                                            <span class="txt-request">Last Name:*</span>
                                            <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <span class="txt-request">Email:*</span>
                                            <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                                            <span class="txt-request">Phone:*</span>
                                            <input type="text" name="phone" class="form-control phone" data-parsley-required="true" data-parsley-type="phone" data-parsley-trigger="change" value="{{ old('phone') }}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                                            <span class="txt-request">Occupation:*</span>
                                            <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                                                @include('includes.options-occupation')
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                                            <span class="txt-request">Company:*</span>
                                            <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
                                            <span class="txt-request">Country:*</span>
                                            <select name="country" class="custom-select country country-ebook" data-parsley-required="true" value="{{ old('country') }}">
                                                @include('includes.options-country')
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
                                            <span class="txt-request">City:*</span>
                                            <input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}" />
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('email') ? 'has-error' : '' }} d-none state-ebook">
                                            <span class="txt-request">State:*</span>
                                            <select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}">
                                                @include('includes.options-state')
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <span class="txt-request">How did you hear about us?*</span>
                                            <select name="hear_about" class="custom-select state" data-parsley-required="true" value="{{ old('hear_about') }}">
                                                @include( 'includes.options-hear-about')
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <span class="txt-request">Message:*</span>
                                            <textarea rows="3" name="message" class="form-control city" data-parsley-required="true" value="{{ old('city') }}"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting">
                                        <label for="virtual_meeting" class="label_left"></label>
                                        <span class="blue">BOOK A MEETING WITH OUR MAGICAL TEAM</span>
                                    </div>

                                    <div class="col-12 mb-3">
                                        <input type="checkbox" name="news" value="yes" id="news">
                                        <label for="news" class="label_left"></label>
                                        <span class="blue">JOIN OUR NEWSLETTER</span>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" id="request-price-tag" class="btn-request-piece" style="color: #FFFFFF;font-size: 0.75rem;letter-spacing: 0.1rem;font-weight: bold;border: 1px solid transparent;padding: .375rem 1.75rem;">
                                            SUBMIT REQUEST <i class="fas fa-caret-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-12 marg_top_big py-4 px-0">
                    <div class="d-flex align-items-center">
                        <div class="line"></div>
                        <h5 class="px-5 text-uppercase m-0" style="color:#89bab6 !important;">enter in contact with our
                            team</h5>
                        <div class="line"></div>
                    </div>
                    <div class="col-12 py-4">
                        <div class="row justify-content-center align-items-center">
                            <i><img src="/img/contact/email.png" style="width:33px" class="img-fluid"></i>
                            <i class="px-3"><img src="/img/contact/phone.png" style="width:28px" class="img-fluid"></i>
                            <i><img src="/img/contact/whatsapp.png" style="width:28px" class="img-fluid"></i>
                        </div>
                    </div>
                    <div class="col-12 col-md-11 offset-md-2 p-0">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="row justify-content-center">
                                    <p style="color:#6c757d;">
                                        <b style="color:#2d2d2d;">PORTUGAL OFFICE</b><br>
                                        Travessa Marques de Sá, Nº 68 <br>
                                        4435 - 324 Rio Tinto . Portugal <br>
                                        <i class="fas fa-envelope"></i> <a href="mailto:info@circu.net" style="color:#89bab6;"> info@circu.net</a> <br>
                                        <i class="fas fa-phone"></i> T. +351 911 780 428 <br>
                                    </p>
                                </div>
                            </div>

                            {{-- <div class="col-md-3">
                                <p style="color:#6c757d;">
                                    <b style="color:#2d2d2d;">SALES DIRECTOR</b><br>
                                    Maria Simão<br>
                                    <i class="fas fa-envelope"></i> <a href="mailto:msimao@circu.net" style="color:#89bab6;">msimao@circu.net</a><br>
                                    <i class="fas fa-phone"></i> T. +351 914 929 073 <br>
                                </p>
                            </div> --}}

                            <div class="col-md-3">
                                <div class="row justify-content-center">
                                    <p style="color:#6c757d;">
                                        <b style="color:#2d2d2d;">MARKETING MANAGER</b><br>
                                        Andreia Ferraz <br>
                                        <i class="fas fa-envelope"></i> <a href="mailto:bbanhudo@circu.net" style="color:#89bab6;">aferraz@circu.net</a><br>
                                    </p>
                                   
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="row justify-content-center">
                                    <p style="color:#6c757d;">
                                        <b style="color:#2d2d2d;">PRESS TEAM</b><br>
                                        <i class="fas fa-envelope"></i> <a href="mailto:press@circu.net" style="color:#89bab6;">press@circu.net</a><br>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div><!--  end col -->

            </div>
        </div>
    </div>
</div>
<div class="container">

</div>
@include('includes.menu-visual-new')

<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12" id="others" style="padding:12px;">
            <h2 class="col-12 category_name_title text-center mb-0"><span>MEET OUR BEST SELLERS</span></h2>
        </div>
        @foreach ($products as $product1)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4">
                @if (file_exists('./img/products/thumbnails/' . $product1->slug . '-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $product1->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @else
                <img src="/img/products/thumbnails/{{ $product1->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                @endif

                <div class="product--title">
                    <span class="name">{{ $product1->name }}</span>
                    <span class="sub_category">{{ ucwords($product1->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price',  $product1->slug) }}"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>

                @if (($product1->is_new && $product1->slug == 'bubble-gum-bed') || $product1->slug == 'bubble-gum-bench' || $product1->slug == 'bubble-gum-dressing-table' || $product1->slug == 'bubble-gum-chest-3-drawers' || $product1->slug == 'bubble-gum-chest-2-drawers' || $product1->slug == 'bubble-gum-desk' || $product1->slug == 'bubble-slide' || $product1->slug == 'bubble-loop' || $product1->slug == 'bubble-drop' || $product1->slug == 'bubble-gum-playground' || $product1->slug == 'bubble-gum-big-mirror' || $product1->slug == 'bubble-gum-small-mirror' || $product1->slug == 'cotton-candy-sofa' || $product1->slug == 'rainbow-sofa')
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new-collection.png">
                </div>
                @elseif($product1->is_new)
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
                </div>
                @endif

                <div class="product-box--content">
                    @if ($product1->product_samples->count() > 0 && $product1->slug != 'dainty-armchair')
                    <div class="col-12 slider-for text-center">
                        @foreach ($product1->product_samples as $product_sample)
                        <div>
                            <a href="{{ route('product', ['product' => $product1->slug]) }}">
                                <img src="/img/products/{{ $product1->slug }}/finishes/{{ $product1->slug }}-circu-magical-furniture-{{ $product_sample->sample->slug }}.png" width="960" height="800" alt="" class="img-fluid">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 product-samples slider-nav text-center p-0">
                        @foreach ($product1->product_samples as $product_sample)
                        @if ($product_sample->is_options == null)
                        <div class="d-inline text-center">
                            <img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png" width="20" height="20" alt="" class="img-fluid">
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @else
                    <div>
                        <a href="{{ route('product', ['product' => $product1->slug]) }}">
                            <img src="/img/products/thumbnails-covers/{{ $product1->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                        </a>
                    </div>
                    @endif
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price',  $product1->slug) }}"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach


    </div>
    <div class="col-12 slideToggle text-center mt-2">
        <a class="btn-get-price py-2 px-4" href="https://www.circu.net/products"><span>SEE <b>ALL PRODUCTS</b>
                &gt;</span> </a>
    </div>
</div>

<div class="container-fluid pt-2">
    @include('includes.banners-hotspots')
</div>

<div class="container-fluid pt-2">
    <div class="row pb-2">
        <div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#9bb1c9;">
            <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
                <div class="row">
                    <div class="col-12 col-lg-6 p-lg-0">
                        @include('includes.middle.form-catalogue-2022')
                    </div>
                    <div class="col-12 col-lg-6 pl-lg-0 text-center">
                        <img src="/img/catalogo-2022-banner-form-mobile.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8 p-0 d-none d-lg-block">
            <div class="col-12 p-0">
                <img src="/img/home/bg-banner-ebook.jpg" style="width:100%;" class="img-fluid d-none d-lg-block">
            </div>
            <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%; transform: translate(0,-50%);">
                @include('includes.middle.form-catalogue-2022')
            </div>
        </div>
        <div class="col-12 col-lg-4 p-0">
            <a href="https://www.circu.net/ebook/new-products-2023">
                <img src="/img/pag-styles/modern-luxury/new-products-2023.jpg" alt="new products 2023" class="img-fluid w-100">
            </a>
        </div>
    </div>
</div>
@endsection

@section('footer-includes')
<script type="text/javascript" src="/js/slick.min.js"></script>
<script>
    $('.slider-for').each(function(num, elem) {
        elem = $(elem);
        elem.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            prevArrow: '<div class="slider-button-prev prev-item"><i class="fas fa-chevron-left"></i></div>',
            nextArrow: '<div class="slider-button-next next-item"><i class="fas fa-chevron-right"></i></div>',
            draggable: false,
            fade: true,
            accessibility: false,
            asNavFor: '.slider-nav'
        });

        elem.next('.slider-nav').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            variableWidth: true,
            dots: false,
            centerMode: true,
            arrows: false,
            draggable: false,
            accessibility: false,
            focusOnSelect: true
        });
    });

    $('.slider-nav .slick-slide').on('click', function(event) {
        $('.slider-for').slick('slickGoTo', $(this).data('slickIndex'));
    });

    var elm = $('.slider-nav '),
        getSlick = elm.slick('getSlick');

    if (getSlick.slideCount <= getSlick.options.slidesToShow) {
        elm.addClass('slick-no-slide');
    } else {
        elm.removeClass('slick-no-slide');
    }
</script>
<script type="text/javascript">
    const selectHotspot = (e) => {
        const clickedHotspot = e.target.parentElement;
        const container = clickedHotspot.parentElement;

        const hotspots = container.querySelectorAll(".hotspot");
        hotspots.forEach(hotspot => {
            if (hotspot === clickedHotspot) {
                hotspot.classList.toggle("lg-hotspot--selected");
            } else {
                hotspot.classList.remove("lg-hotspot--selected");
            }
        });

        $('.close-hotspot').click(function() {
            clickedHotspot.classList.remove("lg-hotspot--selected");
        });

    }

    (() => {
        const buttons = document.querySelectorAll(".hotspot--cta");
        buttons.forEach(button => {
            button.addEventListener("click", selectHotspot);
        });
    })();

    $('.owl-ambiences').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>",
            "<i class='fas fa-chevron-right arrow-banners'></i>"
        ],
        // autoplay: {
        //   delay: 4000,
        // },
        // fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });

    $('.owl-main').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left p-0 arrow-banners'></i>",
            "<i class='fas fa-chevron-right p-0 arrow-banners'></i>"
        ],
        autoplay: false,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });

    $('.owl-novelties').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>",
            "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"
        ],
        autoplay: false,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            }
        }
    });

    $('.owl-projects').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>",
            "<i class='fas fa-chevron-right arrow-banners'></i>"
        ],
        autoplay: false,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 4
            },
            600: {
                items: 4
            },
            768: {
                items: 4
            }
        }
    });
</script>
@endsection