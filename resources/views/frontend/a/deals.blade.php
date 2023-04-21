@extends('layouts.master')
@section('meta')
  <title>{{$meta_data->meta_title}}</title>
  <meta name="description" content="{{$meta_data->meta_description}}" />
  <meta name="keywords" content="{{$meta_data->key_words}}" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
  <meta property="og:title" content="{{$meta_data->meta_title}}" />
  <meta property="og:description" content="{{$meta_data->meta_description}}" />
<meta property="og:url" content="https://www.circu.net/deals" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection
@section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
    p {
        font-family: 'RalewayMedium', sans-serif;
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

    .hotspot--little-cloud-nightstand {
        bottom: 24%;
        right: 28%;
    }

    .hotspot--little-cloud-nightstand .hotspot--title {
        top: 0%;
        right: 0%;
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

    .product-box {
        padding: 0.09rem;
        margin: 0;
    }

    .product_thumb {
        width: 100%;
        background-color: #F7F7F7;
        margin: 0;
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

    @media (max-width:767px) {
        #modal-deals {
            transform: translate(0, -110%);
        }
    }

    @media (max-width:325px) {
        #modal-deals {
            transform: translate(0, -100%);
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

    /* --------------- linha de produtos --------------- */

    @media (max-width: 800px) {
        .title-banner-rooms {
            bottom: 2% !important;
        }

        .title-banner-rooms p {
            color: #fff;
            font-size: 20px;
            font-weight: 700;
        }
    }

    .hotspot--sky-nightstand {
        top: 60%;
        right: 31%;
    }

    .hotspot--sky-nightstand .hotspot--title {
        bottom: -15%;
        right: 105%;
    }

    .hotspot--stellar-round-rug {
        bottom: 17%;
        left: 36%;
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

    .form-format {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
    }

    @media only screen and (max-width: 575px) {
        .form-format {
            bottom: 240px;
        }
    }

    @media only screen and (max-width: 400px) {
        .form-format {
            bottom: 0px;
        }
    }
</style>
@endsection
@section('main-content')

<div class="container-fluid pb-2" id="main-slide">
    <div class="row">
        <!-- SLIDE DESKTOP -->
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative d-none d-sm-block">
            <!-- <div class="item">
                <img src="/img/deals/1-banner/special-vouchers.jpg" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100%;">
                
                <a rel="modal:open" href="{{ route('modal-discount-deals-test') }}">
                    <div class="col-2 block p-0 pr-1 position-absolute" style="top: 93%; left:42%; text-align:center;height:5%;width:100%;"></div>
                </a>
            </div> -->
            <div class="item">
                <img src="/img/deals/1-banner/banner-1.jpg" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100%;">
            </div>
           
        </div>

        <!-- SLIDE MOBILE -->
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-block d-sm-none">
            <!-- <div class="item">
                <img src="/img/deals/1-banner/special-vouchers-mobile.jpg" width="550" height="650" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none" style="width:100%;">
            </div> -->
            <div class="item">
                <img src="/img/deals/1-banner/banner-1-m.jpg" width="550" height="650" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none" style="width:100%;">            
            </div>
        </div>

    </div>
</div>

<div class="container-fluid py-2">
    <div class="row">
        <?php $number = 1; ?>
        @foreach ($products1 as $product1)
        <?php $number++; ?>
        @if ($number == 2)
            <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
                <div class="product_thumb py-0 px-0 banner-height-2" style=" height: 100%;background-color: #a2c1c6;">
                    <img src="/img/deals/50-percent-discount.jpg" width="960" height="800" class="img-fluid d-none d-md-block">
                    <img src="/img/deals/50-percent-discount-m.jpg" width="960" height="800" class="img-fluid d-block d-md-none">
                </div>
            </div>
        @endif
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box product-{{$number}}">
            <div class="product_thumb py-4">
                @if (file_exists('./img/products/thumbnails/' . $product1->slug . '-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $product1->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @else
                <img src="/img/products/thumbnails/{{ $product1->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                @endif

                <div class="product--title">
                    <span class="name">{{ $product1->name }}</span>
                    <br class="d-block d-md-none">
                    <span class="sub_category">{{ ucwords($product1->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product1->slug]) }}"><span>GET
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
                            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product1->slug]) }}"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
        <?php $number += 1; ?>
        @if ($number == 22)
        <div class="d-none d-lg-block col-lg-9 product-box has-overlay product-{{$number}}" style="background-image:url('/img/products/blank-spaces/big-lotus-sofa-circu-magical-furniture.jpg');background-position:center 68%;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/lotus-sofa"'>
            <div class="position-absolute" style="bottom:7%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">LOTUS SOFA|<span style="font-size:0.9rem;">SEE MORE ></span></div>
        </div>
        @endif
        
        

    </div>
</div>
<div class="container-fluid pt-2">
    <div class="row pb-2">
        <div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#dfceb0;">
            <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
                <div class="row">
                    <div class="col-12 col-lg-6 p-lg-0">
                        @include('includes.middle.form-summer-sale')
                    </div>
                    <div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
                        <img src="/img/magical-kids-bedrooms-and-playground-ideas-banner-m.jpg" width="524" height="264" alt="Magical Kids Bedrooms Circu Kid's Luxury Furniture" class="img-fluid text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8 p-0 d-none d-lg-block">
            <div class="col-12 p-0">
                <a href="https://www.circu.net/stocklist?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales">
                    <img src="/img/home/stocklist-annual-sale-form-banner.jpg" alt="Stoklist Annual Sale Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
                </a>
            </div>
            <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
                @include('includes.middle.form-stocklist-annual-sale')
            </div>
        </div>
        <div class="col-12 col-lg-4 p-0">
            <a href="https://www.circu.net/ebook/magical-kids-bedrooms-playground-ideas?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-magical-bedrooms-playgrounds&utm_campaign=ourmagicalrooms">
                <img src="/img/pag-styles/modern-luxury/magical-kids-badrooms.jpg" alt="Magical Kids Circu Magical Furniture" class="img-fluid w-100 d-none d-md-block">
            </a>
        </div>
    </div>
</div>
<!-- <div class="container-fluid pt-2">
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 product-box pr-0">
                <div class="col-12 p-0">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 product-box p-0" style="float: left;">
                        <div class="product_thumb p-0 ">
                            <img src="/img/deals/product-of-the-month.gif" class="img-fluid" style="width:100%;">
                        </div>

                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-6 product-box p-0" style="float: left;">
                        <div class="product_thumb p-0 banner-height-1">
                            <img src="/img/deals/60-percent.jpg" class="img-fluid" style="width:100%;">
                            <a rel="modal:open" href="{{ route('modal-request-cuppon') }}" style="z-index:2;">
                                <div class="text-hover text-center position-absolute" style="bottom: 5%;top: unset;">
                                    <div class="btn-banner-deals grow">GET YOUR CUPPON <i class="fas fa-caret-right"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3 product-box">
                <div class="product_thumb py-4 banner-height-2">
                    <img src="/img/products/thumbnails/cloud-lamp-big-circu-magical-furniture.png" width="960" height="800" class="img-fluid">

                    <div class="product--title">
                        <span class="name">Cloud Lamp Big</span>
                        <span class="sub_category">Suspension Lamp</span>
                    </div>

                    <div class="col-12 clearfix position-relative mt-1 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-lamp-big"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>

                    <div class="product-box--content banner-height-2">
                        <div>
                            <a href="https://www.circu.net/products/cloud-lamp-big">
                                <img src="/img/products/thumbnails-covers/cloud-lamp-big-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid" style="width:100%;">
                            </a>
                        </div>

                        <div class="col-12 clearfix position-relative mt-2 p-0">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-lamp-big"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3 product-box">
                <div class="product_thumb py-4 banner-height-2">
                    <img src="/img/products/thumbnails/cloud-lamp-small-circu-magical-furniture.png" width="960" height="800" class="img-fluid">

                    <div class="product--title">
                        <span class="name">Cloud Lamp Small</span>
                        <span class="sub_category">Suspension Lamp</span>
                    </div>

                    <div class="col-12 clearfix position-relative mt-1 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-lamp-small"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>

                    <div class="product-box--content banner-height-2">
                        <div>
                            <a href="https://www.circu.net/products/cloud-lamp-small">
                                <img src="/img/products/thumbnails-covers/cloud-lamp-small-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid" style="width:100%;">
                            </a>
                        </div>

                        <div class="col-12 clearfix position-relative mt-2 p-0">
                            <div class="slideToggle">
                                <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-lamp-small"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->

<div class="container-fluid py-2">

    <div class="row position-relative">
        <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme p-0">

            <div class="item col-12 p-0 position-relative">
                <img src="/img/deals/hotspots-ambients/jungle-fun-room.jpg" width="1920" height="700" class="cd-dot img-fluid d-none d-lg-block" alt="">
                <img src="/img/deals/hotspots-ambients/jungle-fun-room-m.jpg" width="1920" height="700" class="cd-dot img-fluid d-block d-lg-none" alt="">

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 61%;left: 48%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/tristen-bed">
                            <img src="/img/products/carousel/tristen-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>TRISTEN</b> BED</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the movie Atlantics,
                                this one of a kind bed was made to shape comfort and to keep your little one's dreams
                                safe and sound while he/she travels through their imagination at night.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'tristen-bed']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <a class="hotspot d-block d-lg-none" style="top: 69%;left: 48%;" href="https://www.circu.net/products/tristen-bed">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 58%;left: 33%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/little-cloud-nightstand">
                            <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>LITTLE CLOUD</b> NIGHTSTAND</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a
                                kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the
                                perfect storage item for dreamy bedroom decoration. </div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'little-cloud-nightstand']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <a class="hotspot d-block d-lg-none" style="top: 66%;left: 11%;" href="https://www.circu.net/products/little-cloud-nightstand">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 65%;left: 19%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/illusion-chair-leopard">
                            <img src="/img/products/carousel/illusion-chair-leopard-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>ILLUSION LEOPARD</b> CHAIR</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Illusion Series brings a touch
                                of magic to the children's playroom decor. This kids’ furniture set includes a table, a
                                stool, and a chair.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'illusion-chair-leopard']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 65%;left: 67%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/teepee-playground">
                            <img src="/img/products/carousel/teepee-playground-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>TEEPEE</b> PLAYGROUND</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">This kids’ teepee is a playroom
                                inspired by the traditional indigenous tents. The Teepee Playground has a playful
                                design.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'teepee-playground']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <a class="hotspot d-block d-lg-none" style="bottom: 18%;left: 82%;" href="https://www.circu.net/products/teepee-playground">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
            </div>



            <div class="item col-12 p-0 position-relative">
                <img src="/img/deals/hotspots-ambients/girl-room.jpg" width="1920" height="700" class="cd-dot img-fluid d-none d-lg-block" alt="">
                <img src="/img/deals/hotspots-ambients/girl-room-m.jpg" width="1920" height="700" class="cd-dot img-fluid d-block d-lg-none" alt="">

                <div class="hotspot hotspot--cloud-6-drawers hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-mirror">
                            <img src="/img/products/carousel/cloud-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> Mirror</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">This exquisite mirror is the
                                perfect piece of decoration that will embellish any children’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-mirror']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-6-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-6-drawers">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-bed hotspot--title__left d-none d-lg-block" style="top: 31%;right: 66%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-bed">
                            <img src="/img/products/carousel/cloud-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> Bed</div>
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to
                                offer you the solution to a never-ending problem: a complete, high-quality design for a
                                child’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-bed']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-bed d-block d-lg-none" href="https://www.circu.net/products/cloud-bed">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block" style="top: 26%;left: 69%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-shelf-big">
                            <img src="/img/products/carousel/cloud-shelf-big-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud Big</b> Shelf</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">With a creative and playful design,
                                this Cloud Shelf aims to reinforce the connection between children and imagination.
                            </div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-shelf-big']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block" style="top: 18%;left: 52%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-chest-6-drawers">
                            <img src="/img/products/carousel/cloud-chest-6-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud 6 Drawes</b> Chest</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Cloud Chest of drawers is inspired
                                by Pixar short-film “Party Cloud”, and it's the perfect storage item for whimsical
                                bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-chest-6-drawers']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-6-drawers">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--gold-box hotspot--title__left d-none d-lg-block" style="top: 56%;left: 69%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/gold-box">
                            <img src="/img/products/carousel/gold-box-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Gold Toy</b> Box</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Gold Box is a luxurious kids’ toy
                                box inspired by the fine gold bar shape. Inspired by the adventures of Scrooge McDuck,
                                the richest duck in the world.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'gold-box']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/gold-box">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--gold-box hotspot--title__left d-none d-lg-block" style="top: 56%;right: 10%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-stool-puff">
                            <img src="/img/products/carousel/cloud-stool-puff-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud Puff</b> Stool</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Cloud Puff promises to awaken
                                your children's imagination and increase their creativity.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-stool-puff']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-stool-puff">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-bench-2-seat hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-bench-2-seat">
                            <img src="/img/products/carousel/cloud-bench-2-seat-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud 2 Seat</b> Bench</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Cloud Seat promises to awaken
                                your children's imagination and increase their creativity.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-bench-2-seat']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-bench-2-seat d-block d-lg-none" href="https://www.circu.net/products/cloud-bench-2-seat">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-stool-puff">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-nightstand-girl  hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-nightstand">
                            <img src="/img/products/carousel/cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> Nightstand</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Cloud NightStand is a kids’
                                furniture product inspired by Pixar’s Short film “Party Cloud” and it is the perfect
                                storage item for dreamy bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-nightstand']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-nightstand-girl  d-block d-lg-none" href="https://www.circu.net/products/cloud-nightstand">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
            </div>


            <div class="item col-12 p-0 position-relative">
                <img src="/img/deals/hotspots-ambients/playroom.jpg" width="1920" height="700" class="cd-dot img-fluid d-none d-lg-block" alt="">
                <img src="/img/deals/hotspots-ambients/playroom-m.jpg" width="1920" height="700" class="cd-dot img-fluid d-block d-lg-none" alt="">

                <div style="top: 32%;right: 52%;" class="hotspot hotspot--fantasy-air-balloon hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/bubble-gum-big-mirror">
                            <img src="/img/products/carousel/bubble-gum-big-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>BUBBLE GUM BIG</b> mirror</div>
                            <div class="hotspot-description my-2"> The Bubble Gum Big Mirror is the accessory you need
                                to embellish any children's bedroom. With its elegant design inspired by the fun shapes
                                of the kid's favorite candies.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-big-mirror']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--fantasy-air-balloon d-block d-lg-none" href="https://www.circu.net/products/fantasy-air-balloon">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
                <div style="top: 19%;right: 77%;" class="hotspot hotspot--cloud-bed hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/rocky-rocket">
                            <img src="/img/products/carousel/rocky-rocket-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Rocky Rocket</b> Sofa / Chair</div>
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Rocky Rocket it’s a children’s
                                interactive chair, painted in red and white checkered pattern.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'rocky-rocket']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-bed d-block d-lg-none" href="https://www.circu.net/products/cloud-bed">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div style="top: 47%;left: 65%;" class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div style="top:-60px" class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/bubble-gum-gym">
                            <img src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>BUBBLE GUM</b> GYM</div>
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Bubble Gum Gym is going to
                                bring magic and playfulness to your kid's playroom!</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'bubble-gum-gym']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
                <div style="top: 60%;left: 92%;" class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top:-170px">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cotton-candy-sofa">
                            <img src="/img/products/carousel/cotton-candy-sofa-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>cotton candy</b> sofa</div>
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Cotton Candy Sofa will add
                                sweetness and playfulness to you bedroom design.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cotton-candy-sofa']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
            </div>


            <div class="item col-12 p-0 position-relative">
                <img src="/img/deals/hotspots-ambients/spaceman-room.jpg" width="1920" height="700" class="cd-dot img-fluid d-none d-lg-block" alt="">
                <img src="/img/deals/hotspots-ambients/spaceman-room-m.jpg" width="1920" height="700" class="cd-dot img-fluid d-block d-lg-none" alt="">

                <div class="hotspot hotspot--atomic-wall-lamp hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/atomic-wall-lamp">
                            <img src="/img/products/carousel/atomic-wall-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>ATOMIC</b> WALL LAMP</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Atomic wall light is a mid-century
                                modern lighting design inspired by the atomic discoveries of the mid-20th century.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'atomic-wall-lamp']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <div class="hotspot hotspot--stellar-round-rug hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/stellar-round-rug">
                            <img src="/img/products/carousel/stellar-round-rug-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>STELLAR ROUND</b> RUG</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the galaxy’s
                                constellations, the Stellar Rug is the ideal piece for the little space adventures who
                                love to look up to the sky every night and count the stars.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'stellar-round-rug']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <div class="hotspot hotspot--sky-nightstand hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/sky-nightstand">
                            <img src="/img/products/carousel/sky-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>SKY</b> NIGHTSTAND</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Sky Nightstand is a kids’ small
                                chest of drawers inspired by the Disney movie “Planes” and it is the perfect storage
                                item for your aviation inspired bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'sky-nightstand']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

            </div>


            <div class="item col-12 p-0 position-relative">
                <img src="/img/deals/hotspots-ambients/kids-bedroom.jpg" width="1920" height="700" class="cd-dot img-fluid d-none d-lg-block" alt="">
                <img src="/img/deals/hotspots-ambients/kids-bedroom-m.jpg" width="1920" height="700" class="cd-dot img-fluid d-block d-lg-none" alt="">

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 61%;left: 48%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-sofa">
                            <img src="/img/products/carousel/cloud-sofa-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>CLOUD</b> SOFA</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Inspired by Pixar’s short-film,
                                this sofa has a cloud-shaped form, and it's the perfect item for any bedroom and any
                                other division.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'cloud-sofa']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <a class="hotspot d-block d-lg-none" style="top: 69%;left: 74%;" href="https://www.circu.net/products/cloud-sofa">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 24%;left: 9%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/nodo-suspension-chair">
                            <img src="/img/products/carousel/nodo-suspension-chair-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>NODO</b> SUSPENSION CHAIR</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">NODO Suspension Chair will give you
                                the comfort you never thought you needed.</div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'nodo-suspension-chair']) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <a class="hotspot d-block d-lg-none" style="top: 55%;left: 9%;" href="https://www.circu.net/products/nodo-suspension-chair">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
            </div>
        </div>
        <div class="col-12 position-absolute title-banner-rooms" style="bottom: 6%;z-index:11;left:2%;">
            <p class="pb-3">SAVE UP TO 50% ON THIS BEDROOM</p>
        </div>
        <!-- <div class="col-12 position-absolute" style="bottom: 0;text-align: end;z-index:10;">
                <p style="color:white;font-size:10px;">*NOT CUMULATIVE WITH OTHER CAMPAIGNS. THE PROMOTIONAL DISCOUNT ARE VALID FOR PROFESSIONALS ONLY.</p>
            </div> -->
    </div>
</div>

<div class="container-fluid pt-2">
            <div class="row pb-2">
                <div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#9bb1c9;">
                    <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
                        <div class="row">
                            <div class="col-12 col-lg-6 p-lg-0">
                                @include('includes.middle.form-catalogue-2022')
                            </div>
                            <div class="col-12 col-lg-6 pl-lg-0 text-center px-0">
                                <img src="/img/catalogo-2022-banner-form-mobile.jpg" width="524" height="264" alt="Magical Kids Bedrooms Circu Kid's Luxury Furniture" class="img-fluid text-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 p-0 d-none d-lg-block">
                    <div class="col-12 p-0">
                        <a href="https://www.circu.net/stocklist?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales">
                            <img src="/img/home/bg-banner-ebook.jpg" alt="Catalogue Circu Kid's Luxury Furniture" style="width:100%;" class="img-fluid d-none d-lg-block">
                        </a>
                    </div>
                    <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%;">
                        @include('includes.middle.form-catalogue-2022')
                    </div>
                </div>
                <div class="col-12 col-lg-4 p-0">
                    <a href=" https://www.circu.net/stocklist?utm_origem=website&utm_meio=banner-categoria&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales">
                        <img src="/img/pag-styles/modern-luxury/stocklist-annual-sale-mini-banner.jpg" alt="Magical Kids Circu Magical Furniture" class="img-fluid w-100">
                    </a>
                </div>
            </div>
        </div>

<div class="container-fluid p-0">
    <div class="row m-0 p-0">
        <div class="col-12 p-0">
            <img src="/img/deals/2-banner/banner-2-d.jpg" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100%;">
            <img src="/img/deals/2-banner/banner-2-m.jpg" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none" style="width:100%;">
            <div class="col-12 position-absolute title-banner-rooms d-none d-md-block" style="bottom: 15%;z-index:11;left:2%;">
                <a rel="modal:open" href="{{ route('modal-download-stocklist') }}">
                    <div class="btn-banner-rooms grow">DOWNLOAD STOCKLIST</div>
                </a>
            </div>
            <div class="position-absolute title-banner-rooms d-block d-md-none" style="bottom: 5%;z-index:11;left:50%;transform: translate(-50%);">
                <a rel="modal:open" href="{{ route('modal-download-stocklist') }}">
                    <div class="btn-banner-rooms grow" style="padding: 5px 10px 4px !important;">DOWNLOAD STOCKLIST
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="col-12 pt-2">
    <h2 class="col-12 category_name_title text-center mb-0" style="cursor: unset !important;"><span>IN STOCK</span>
    </h2>
</div>

<!-- 8 PRODUCTS -->
<div class="container-fluid py-2">
    <div class="row">
        @foreach ($products2 as $product2)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4">
                @if (file_exists('./img/products/thumbnails/' . $product2->slug . '-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $product2->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @else
                <img src="/img/products/thumbnails/{{ $product2->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                @endif

                <div class="product--title">
                    <span class="name">{{ $product2->name }}</span>
                    <br class="d-block d-md-none">
                    <span class="sub_category">{{ ucwords($product2->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product2->slug]) }}"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>

                @if (($product2->is_new && $product2->slug == 'bubble-gum-bed') || $product2->slug == 'bubble-gum-bench' || $product2->slug == 'bubble-gum-dressing-table' || $product2->slug == 'bubble-gum-chest-3-drawers' || $product2->slug == 'bubble-gum-chest-2-drawers' || $product2->slug == 'bubble-gum-desk' || $product2->slug == 'bubble-slide' || $product2->slug == 'bubble-loop' || $product2->slug == 'bubble-drop' || $product2->slug == 'bubble-gum-playground' || $product2->slug == 'bubble-gum-big-mirror' || $product2->slug == 'bubble-gum-small-mirror' || $product2->slug == 'cotton-candy-sofa' || $product2->slug == 'rainbow-sofa')
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new-collection.png">
                </div>
                @elseif($product2->is_new)
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
                </div>
                @endif

                <div class="product-box--content">
                    @if ($product2->product_samples->count() > 0 && $product2->slug != 'dainty-armchair')
                    <div class="col-12 slider-for text-center">
                        @foreach ($product2->product_samples as $product_sample)
                        <div>
                            <a href="{{ route('product', ['product' => $product2->slug]) }}">
                                <img src="/img/products/{{ $product2->slug }}/finishes/{{ $product2->slug }}-circu-magical-furniture-{{ $product_sample->sample->slug }}.png" width="960" height="800" alt="" class="img-fluid">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 product-samples slider-nav text-center p-0">
                        @foreach ($product2->product_samples as $product_sample)
                        @if ($product_sample->is_options == null)
                        <div class="d-inline text-center">
                            <img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png" width="20" height="20" alt="" class="img-fluid">
                        </div>
                        @endif
                        @endforeach
                    </div>
                    @else
                    <div>
                        <a href="{{ route('product', ['product' => $product2->slug]) }}">
                            <img src="/img/products/thumbnails-covers/{{ $product2->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                        </a>
                    </div>
                    @endif
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{ route('modal-product-price', ['name' => $product2->slug]) }}"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 text-center slideToggle p-0">
            <a rel="modal:open" href="{{ route('modal-download-stocklist') }}" class="btn-green-underline"><span style="color:white;"><b>DOWNLOAD</b> STOCKLIST</span></a>
        </div>
    </div>
</div>
<div class="col-12 menu-filters" id="seating">
    <h2 class="col-12 category_name_title text-center mb-0"><span>ALL CATEGORIES</span></h2>
</div>
@include('includes.menu-visual-new')
<div class="button d-none">
    <a rel="modal:open" href="{{ route('modal-entrance-deals') }}" id="formhide">asdas</a>
</div>
<!-- end container -->
@endsection



@section('footer-includes')
<script src="https://www.maisonvalentina.net/en/jquery/jquery-cookie/jquery.cookie.js "></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>

<script>
    jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
	    jQuery('.formvisibleMobile').css('display', 'block');
	    });
    // if ($.cookie('popupEntrance') == null) {
    //     $(window).bind('load', function() {
    //         setTimeout(function() {
    //             $('#formhide')[0].click();
    //         }, 1000);
    //     });
    //     var date = new Date();
    //     var minutes = 1440;
    //     date.setTime(date.getTime() + (minutes * 60 * 1000));
    //     $.cookie('popupEntrance', '1', {
    //         expires: date
    //     });
    // }

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


<script>
    let removeCookie = () => {
        $.removeCookie("popupEntrance",
            "1");
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

<script>
    $(window).bind('resize load', function() {
        if ($(window).width() > 800) {
            $('.banner-height-2').css('height', $('.product-box').height());
        }

        if ($(window).width() < 767) {
            $('.modal-height').css('height', $(window).height());
        }

    });
</script>
@endsection