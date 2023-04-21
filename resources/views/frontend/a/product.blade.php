@extends('layouts.master')
@section('meta')
<title>{{ $product->name }} {{ ucfirst($product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name) }} | CIRCU Magical Furniture</title>
<meta name="description" content="{{ $product->meta_description }}" />
<meta name="keywords" content="{{ $product->key_words }}" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="{{ strtoupper($product->name) }} {{ ucfirst($product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name) }} | CIRCU Magical Furniture" />
<meta property="og:description" content="{{ $product->meta_description }}" />
<meta property="og:url" content="https://www.circu.net/products/{{ $product->slug }}" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="https://www.circu.net/img/products/{{ $product->slug }}/slide/{{ $product->slug }}-circu-magical-furniture-1.jpg" />
@endsection
@section('head-includes')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.css">
<link rel="stylesheet" href="https://www.luxxu.net/css/swiper.min.css">
<style>
    @media (min-width: 1230px) and (max-width:1252px) {
        .btn-shop-now span {
            font-size: 10px !important;
        }
    }

    @media (min-width: 1200px) and (max-width:1229px) {
        .btn-shop-now span {
            font-size: 8.5px !important;
        }
    }

    @media (max-width:900px) {
        .blocker {
            display: flex;
            justify-content: center;
            align-items: inherit !important;
        }

        .modal {
            overflow-y: scroll;
        }
    }


    @font-face {
        font-family: 'Good Brush';
        font-style: normal;
        font-weight: 400;
        src: local('Good Brush Regular'), local(GoodBrush-Regular), url(/fonts/good-brush.otf) format("truetype");
    }

    .pswp {
        z-index: 10052;
    }

    .videoplayer_product {
        float: none;
        clear: both;
        width: 100%;
        height: auto;
        position: relative;
        padding-bottom: 68%;
        padding-top: 25px;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
        transform: none;
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
        display: block;
    }

    .product--title .sub_category {
        text-transform: lowercase;
        display: block;
    }

    .slick-slider .slick-track {
        transform: translate3d(0px, 0px, 0px) !important;
        /*-webkit-transform: translate3d(0, 0, 0) !important;
        -moz-transform: translate3d(0, 0, 0) !important;
        -ms-transform: translate3d(0, 0, 0) !important;
        -o-transform: translate3d(0, 0, 0) !important;
        transform: translate3d(0, 0, 0) !important;
        transform: none !important;*/
    }

    .slick-slide img {
        display: inline-block;
        cursor: pointer;
    }

    .slick-no-slide .slick-track {
        width: 100% !important;
        text-align: center;
        transform: inherit !important;
    }

    .slick-no-slide .slick-slide {
        float: none;
        display: inline-block;
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
        -webkit-transition: all 500ms ease-out 100ms;
        -o-transition: all 500ms ease-out 100ms;
        transition: all 500ms ease-out 100ms;
    }

    .product-box:hover img,
    .product-box:hover .product-caption,
    .product-box:hover .product-caption-sub {
        opacity: 1;
    }

    .product-box:hover .product-box--hover,
    .product-box:hover .product-box--content {
        visibility: visible;
        -webkit-box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 0px 22px 0px rgba(0, 0, 0, 0.3);
    }

    .slider-button-next.next-item,
    .slider-button-prev.prev-item {
        padding: 8px;
        cursor: pointer;
        position: absolute;
        top: 50%;
        z-index: 9999;
    }

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

    .product-box--content {
        -webkit-transition: all 100ms ease 0ms;
        -o-transition: all 100ms ease 0ms;
        transition: all 100ms ease 0ms;
    }


    /* Hover through the icons */

    /* a.pinterest:hover {
        background-color: #f22613;
        color: #fff;
      }

      a.pinterest span {
        color: #f22613;
      } */

    .btn--primary-grey,
    .btn--primary-grey:link,
    .btn--primary-grey:visited,
    .btn--primary-grey:hover,
    .btn--primary-grey:active {
        background-color: #d5d5d5;
        border-color: #d5d5d5;
        color: #FFFFFF !important;
    }

    .swiper-ambients .swiper-container {
        width: 100%;
        height: 100%;
    }

    .horizontal-id {
        width: 75% !important;
    }

    .vertical-id {
        width: 33% !important;
    }

    .bigImages .img-fluid {
        width: 100%;
    }

    .swiper-ambients .arrow-banners {
        color: white;
        opacity: 50%;
        background-image: none !important;
        -webkit-transition: opacity .50s ease-in-out;
        -moz-transition: opacity .50s ease-in-out;
        -ms-transition: opacity .50s ease-in-out;
        -o-transition: opacity .50s ease-in-out;
        transition: opacity .50s ease-in-out;
    }

    .swiper-ambients .arrow-banners:hover {
        color: white;
        opacity: 100%;
        background-image: none !important;
        -webkit-transition: opacity .50s ease-in-out;
        -moz-transition: opacity .50s ease-in-out;
        -ms-transition: opacity .50s ease-in-out;
        -o-transition: opacity .50s ease-in-out;
        transition: opacity .50s ease-in-out;
    }

    .swiper-button-prev {
        left: 35px !important;
        right: auto;
    }

    .swiper-button-next {
        right: 35px !important;
        left: auto;
    }

    @media (min-width:641px) {
        .slider-main.swiper-slide {
            width: auto !important;
        }
    }

    .px-09 {
        padding-left: .09rem !important;
        padding-right: .09rem !important;
    }


    input.number {
        -webkit-appearance: textfield;
        -moz-appearance: textfield;
        appearance: textfield;
    }

    input.number::-webkit-inner-spin-button,
    input.number::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }

    input.number {
        outline: none;
        border: none;
        text-align: center;
        height: 100%;
        padding: 0;
    }

    input.number,
    button.a,
    button.b {
        font-size: inherit;
        -moz-box-sizing: content-box;
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
    }

    button.a,
    button.b {
        height: 100%;
        border: none;
        background-color: white;
        outline: none;
        cursor: pointer;
        color: black;
        padding: 0;
    }

    .col-5-costum {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 38.666667%;
        max-width: 38.666667%;
        position: relative;
        width: 100%;
        min-height: 1px;
    }

    .col-10-costum {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
        flex: 0 0 77.3347%;
        max-width: 77.3347%;
        position: relative;
        width: 100%;
        min-height: 1px;
    }

    .col-2-costum {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 22.666667%;
        flex: 0 0 22.666667%;
        max-width: 22.666667%;
        position: relative;
        width: 100%;
        min-height: 1px;
    }

    .product-samples-costum .col-20 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 20%;
        flex: 0 0 20%;
        max-width: 20%;
    }

    /* hotspot */
    .hotspot {
        position: absolute;
        display: block;
        z-index: 1;
        cursor: pointer !important;
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
        width: auto !important;
    }

    .hotspot-name {
        text-align: center;
        color: #7d7d7d;
        text-transform: uppercase;
        font-size: 0.65rem;
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

    .remove-link {
        pointer-events: none;
        cursor: default;
    }

    .col-5-costum .owl-stage-outer,
    .col-5-costum .owl-stage-outer .owl-stage,
    .col-5-costum .owl-stage-outer .owl-stage .owl-item,
    .col-5-costum .owl-stage-outer .owl-stage .owl-item .item,
    .col-5-costum .owl-stage-outer .owl-stage .owl-item .item img {
        height: 100%;
    }

    .descriptions_p p {
        margin: 0;
    }

    .fcurrent::after {
        content: '';
        position: absolute;
        top: 0;
        width: 14px;
        height: 14px;
        background-color: #9fbfbc;
        border-radius: 100px;
        z-index: 1;
        left: 0;
        border: 1px solid white;
    }

    @media (max-width: 650px) {
        .fcurrent::after {
        content: '';
        position: absolute;
        top: 0;
        width: 15px;
        height: 15px;
        background-color: #9fbfbc;
        border-radius: 100px;
        z-index: 1;
        left: 0;
        border: 1px solid white;
    }
    }

    
</style>

@endsection

@section('main-content')

<div class="container max-width-site my-4">

    <div class="row justify-content-center">

        <div class="col-12 col-lg-7 product-slide print-d-none">
            <div class="row">
                <div class="slideCount col-2 text-center d-none d-md-block d-print-none " style="position: absolute;bottom: 5%;padding-left: 0;"></div>
                <div class="col-2 product-slide--nav d-none d-lg-inline-block text-center d-print-none ">
                    @if (!$samples->isEmpty())
                    @foreach ($samples as $sample)
                    @php
                    $directory = './img/products/' . $product->slug . '/details/' . $sample->slug . '/';
                    $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                    @endphp
                    @for ($i = 1; $i <= $filecount; $i++) @if (file_exists('./img/products/' . $product->slug . '/details/' . $sample->slug . '/' . $product->slug . '-circu-magical-furniture-' . $sample->slug . '-' . $i . '.gif'))
                        <div><img src="/img/products/{{ $product->slug }}/details/{{ $sample->slug }}/{{ $product->slug }}-circu-magical-furniture-{{ $sample->slug }}-{{ $i }}.gif" alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" class="img-fluid" /></div>
                        @else
                        <div><img src="/img/products/{{ $product->slug }}/details/{{ $sample->slug }}/{{ $product->slug }}-circu-magical-furniture-{{ $sample->slug }}-{{ $i }}.jpg" alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" class="img-fluid" /></div>
                        @endif
                        @endfor
                        @endforeach
                        @else
                        @php
                        $directory = './img/products/' . $product->slug . '/details/';
                        $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                        @endphp
                        @for ($i = 1; $i <= $filecount; $i++) @if (file_exists('./img/products/' . $product->slug . '/details/' . $product->slug . '-circu-magical-furniture-' . $i . '.gif'))
                            <div><img src="/img/products/{{ $product->slug }}/details/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.gif" alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" class="img-fluid" />
                            </div>
                            @else
                            <div><img src="/img/products/{{ $product->slug }}/details/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.jpg" alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" class="img-fluid" /></div>
                            @endif
                            @endfor
                            @endif

                            <!-- ambiences -->
                            @php
                            $directory = './img/products/' . $product->slug . '/details/ambiences/';
                            $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                            @endphp
                            @for ($i = 1; $i <= $filecount; $i++) @if (file_exists('./img/products/' . $product->slug . '/details/ambiences/' . $product->slug . '-circu-magical-furniture-' . $i . '.jpg'))
                                <div><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/details/ambiences/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.jpg" class="img-fluid" />
                                </div>
                                @endif
                                @endfor
                                <!-- details -->
                                @php
                                $directory = './img/products/' . $product->slug . '/details/more/';
                                $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                                @endphp
                                @for ($i = 1; $i <= $filecount; $i++) @if (file_exists('./img/products/' . $product->slug . '/details/more/' . $product->slug . '-circu-magical-furniture-' . $i . '.jpg'))
                                    <div><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/details/more/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                                    </div>
                                    @endif
                                    @endfor

                </div>

                <div class="col-12 col-lg-10 product-slide--details print-d-none" itemscope itemtype="http://schema.org/ImageGallery">
                    @if (!$samples->isEmpty())
                    @foreach ($samples as $sample)
                    @php
                    $directory = './img/products/' . $product->slug . '/details/' . $sample->slug . '/';
                    $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                    @endphp
                    @for ($i = 1; $i <= $filecount; $i++) @if (file_exists('./img/products/' . $product->slug . '/details/' . $sample->slug . '/' . $product->slug . '-circu-magical-furniture-' . $sample->slug . '-' . $i . '.gif'))
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-sample="{{ $sample->slug }}">
                            <a href="/img/products/{{ $product->slug }}/zoom/{{ $sample->slug }}/{{ $product->slug }}-circu-magical-furniture-{{ $sample->slug }}-{{ $i }}.gif" itemprop="contentUrl" data-size="1679x1108">
                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/details/{{ $sample->slug }}/{{ $product->slug }}-circu-magical-furniture-{{ $sample->slug }}-{{ $i }}.gif" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                        </figure>
                        @else
                        <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-sample="{{ $sample->slug }}">
                            <a href="/img/products/{{ $product->slug }}/zoom/{{ $sample->slug }}/{{ $product->slug }}-circu-magical-furniture-{{ $sample->slug }}-{{ $i }}.jpg" itemprop="contentUrl" data-size="1679x1108">
                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/details/{{ $sample->slug }}/{{ $product->slug }}-circu-magical-furniture-{{ $sample->slug }}-{{ $i }}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                            </a>
                        </figure>
                        @endif
                        @endfor
                        @endforeach
                        @else
                        @php
                        $directory = './img/products/' . $product->slug . '/details/';
                        $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                        @endphp
                        @for ($i = 1; $i <= $filecount; $i++) @if (file_exists('./img/products/' . $product->slug . '/details/' . $product->slug . '-circu-magical-furniture-' . $i . '.gif'))
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="/img/products/{{ $product->slug }}/zoom/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.gif" itemprop="contentUrl" data-size="1679x1108">
                                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/details/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.gif" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                                </a>
                            </figure>
                            @else
                            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="/img/products/{{ $product->slug }}/zoom/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.jpg" itemprop="contentUrl" data-size="1679x1108">
                                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/details/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                                </a>
                            </figure>
                            @endif
                            @endfor
                            @endif

                            <!-- ambiences -->
                            @php
                            $directory = './img/products/' . $product->slug . '/details/ambiences/';
                            $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                            @endphp
                            @for ($i = 1; $i <= $filecount; $i++) @if (file_exists('./img/products/' . $product->slug . '/details/ambiences/' . $product->slug . '-circu-magical-furniture-' . $i . '.jpg'))
                                <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                    <a href="/img/products/{{ $product->slug }}/zoom/ambiences/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.png" itemprop="contentUrl" data-size="1679x1108">
                                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/details/ambiences/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                                    </a>
                                </figure>
                                @endif
                                @endfor

                                <!-- details -->
                                @php
                                $directory = './img/products/' . $product->slug . '/details/more/';
                                $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                                @endphp
                                @for ($i = 1; $i <= $filecount; $i++) @if (file_exists('./img/products/' . $product->slug . '/details/more/' . $product->slug . '-circu-magical-furniture-' . $i . '.jpg'))
                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                        <a href="/img/products/{{ $product->slug }}/zoom/more/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.png" itemprop="contentUrl" data-size="1679x1108">
                                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/details/more/{{ $product->slug }}-circu-magical-furniture-{{ $i }}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                                        </a>
                                    </figure>
                                    @endif
                                    @endfor
                </div>
                <div class="col-12 p-0 text-center d-block d-md-none d-print-none ">
                    <div class="slideCount col-12 text-center "></div>
                </div>
                <div class="col-12 p-0 text-center d-block d-md-none d-print-none ">
                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/scroll.svg" style="top:1rem;right:1.8rem;z-index:9;" width="30" height="30">
                </div>

                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/zoom-icon.png" id="zoom_icon" class="position-absolute d-print-none " style="top:1rem;right:1.8rem;z-index:9;" width="30" height="30">
            </div>
        </div><!-- product-slide -->
        <div class="col-12 text-center d-none d-print-block">
            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/{{ $product->slug }}-circu-magical-furniture-print.jpg" style="width:600px" alt="Image description" class="img-fluid" />
        </div>
        <div class="col-12 col-lg-4 product-details pl-4 pr-0 pt-4 pt-md-0">
            <div class="row">
                <div class="col-12">
                    @if (!$samples->isEmpty())
                    <div class="product-samples d-block d-lg-none mb-4 d-print-none">
                        <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">
                            PRODUCT OPTIONS</h6>
                        @foreach ($samples as $sample)
                        <a class="trigger-opt-item {{ $loop->first ? 'fcurrent' : '' }} position-relative"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/mini-samples/{{ $sample->slug }}.jpg" data-target="{{ $sample->slug }}" data-product="{{ $product->slug }}" class="img-fluid mr-1" style="width:50px;"></a>
                        @endforeach
                    </div>
                    @endif

                    <div class="product-details__intro clearfix col mb-3 p-0">
                        <div class="float-left">
                            <h1 class="product-details__name">{{ $product->name }}</h1>
                            <h2 class="product-details__category">
                                {{ $product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name }}
                            </h2>
                            @if ($product->is_limited == true)
                            <span class="product-details__le">Limited Edition</span>
                            @endif
                            <span class="product-details__copyright mt-3">Registered Design ® | Patent Pending ℗ </span>
                        </div>


                        <!-- floating bar -->
                        <div class="product-details__stock text-center float-right d-print-none d-none d-lg-block">
                            @if ($product->product_shop->external_shop_url != '')
                            <a class="btn btn--primary-grey d-flex justify-items-center btn-shop-now" href="{{ $product->product_shop->external_shop_url }}?utm_source=website&utm_medium=pagproduct&utm_content=circu-shopnow&utm_campaign=onlinestore" target="_blank"><img src="/img/icons/shop-cart.png" class="img-fluid" width="18" height="18"><span>&nbsp; SHOP NOW <i class="fas fa-caret-right"></i></span></a>
                            @else
                            <a rel="modal:open" class="btn btn--primary-green modal-cursor-disable btn-shop-now" href="{{ route('modal-product-order', $product->slug) }}"><span>ORDER
                                    NOW <i class="fas fa-caret-right"></i></span></a>
                            @endif

                        </div><!-- product-details__stock -->

                    </div><!-- product-details__intro -->

                    @if ($product->slug == 'booboo-swing' || $product->slug == 'booboo-suspension-sofa' || $product->slug == 'nodo-suspension-chair')
                    <div class="product-details__description mb-4">
                        <p class="highlight_text mb-1 d-inline"><i>in partnership with:</i></p>
                        <a href="https://www.myface.eu/" target="_blank"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/myface-logo.jpg" class="img-fluid" width="100" alt="MyFace"></a>
                    </div><!-- product-details__description -->
                    @elseif($product->slug == 'hoot-stool')
                    <div class="product-details__description mb-4">
                        <p class="highlight_text mb-1 d-inline"><i>in partnership with:</i></p>
                        <a href="https://hoot.pt/" target="_blank"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/hoot-logo.jpg" class="img-fluid" width="100" alt="Hoot"></a>
                    </div><!-- product-details__description -->
                    @elseif($product->slug == 'soleil-armchair' || $product->slug == 'soleil-sofa' || $product->slug == 'odette-sofa' || $product->slug == 'erosion-stool' || $product->slug == 'leroy-stool' || $product->slug == 'carved-stool' || $product->slug == 'emporium-fur-chair' || $product->slug == 'colombia-armchair' || $product->slug == 'cubic-sconces-big-wall-lamp' || $product->slug == 'supernova-wall-lamp' || $product->slug == 'newton-wall-lamp' || $product->slug == 'filigree-cricket-wall-lamp' || $product->slug == 'metamorphosis-wall-lamp' || $product->slug == 'skyscraper-floor-lamp' || $product->slug =='feel-table-lamp' || $product->slug == 'majestic-sideboard' || $product->slug == 'newton-console' || $product->slug == 'diamond-amethyst-sideboard' || $product->slug == 'diamond-nightstand' || $product->slug == 'pixel-cabinet' || $product->slug == 'palatino-slim-display-case' || $product->slug == 'palatino-display-case' || $product->slug == 'melrose-dressing-table' || $product->slug == 'ring-wall-mirror' || $product->slug == 'marie-therese-mirror' || $product->slug == 'magma-wall-mirror' || $product->slug == 'piccadilly-wall-mirror' || $product->slug == 'soho-bedside' || $product->slug == 'coleccionista-bookcase' || $product->slug == 'mondrian-sideboard' || $product->slug == 'soho-coffee-table' || $product->slug == 'soho-sideboard' || $product->slug == 'soho-console' || $product->slug == 'york-console' || $product->slug == 'tortuga-chest' || $product->slug == 'mondrian-white-bedside-table' || $product->slug == 'hudson-side-table' || $product->slug == 'shield-side-table' || $product->slug == 'ottoman-side-table' || $product->slug == 'aquarius-center-table' || $product->slug == 'zaragoca-side-table' || $product->slug == 'stone-side-table' || $product->slug == 'sulivan-side-table' || $product->slug == 'plaza-side-table' || $product->slug == 'gold-folding-screen' || $product->slug == 'jay-folding-screen' || $product->slug == 'frank-chest' )
                    <div class="product-details__description mb-4">
                        <p class="highlight_text mb-1 d-inline"><i>in partnership with:</i></p>
                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/bl.png" class="img-fluid" width="130" alt="Boca do Lobo logo">
                    </div><!-- product-details__description -->
                    @endif
                    <div class="row m-0 mb-1 d-print-none">
                        <div class="col-10 block p-0 pr-1">
                            <a rel="modal:open" class="btn btn--primary-green w-100 modal-cursor-disable" href="{{ route('modal-product-price', $product->slug) }}"><span>GET PRICE
                                    <i class="fas fa-caret-right"></i></span></a>
                        </div>
                        <div class="col-2 p-0">
                            <div class="w-100" style="height: 100%;border: 1px solid #d5d5d5;">
                                <div class="row m-0" style="height: 100%;">
                                    <div class="col-3 p-0 text-center">
                                        <button onclick="menos()" class="a">-</button>
                                    </div>
                                    <div class="col-6 p-0 text-center">
                                        <input value="1" min=1 id="total" type="number" class="number">
                                    </div>
                                    <div class="col-3 p-0 text-center">
                                        <button onclick="mais()" class="b">+</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row m-0">
                        <div class="col-12 col-sm-6 block p-0 pr-md-1 ">
                            <a rel="modal:open" class="btn btn--primary-grey w-100 modal-cursor-disable" href="{{ route('modal-3d-product', ['product' => $product->slug]) }}"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/model-3d.png" class="img-fluid" width="18" height="18"><span>&nbsp; REQUEST 3D <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
                        </div>

                        <div class="col-12 col-sm-6 block p-0 my-1 my-md-0">
                            <a rel="modal:open" class="btn btn--primary-grey w-100 modal-cursor-disable" href="{{ route('modal-product-sheet', ['product' => $product->slug]) }}"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/product-sheet.png" class="img-fluid" width="18" height="18"><span>&nbsp;PRODUCT SHEET <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
                        </div>
                    </div>

                    <div class="product-details__description mb-3 pt-3 d-print-none">

                        <div class="row m-0 align-items-center">
                            <div class="col-8 p-0">
                                <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">DIMENSIONS</h6>
                                <div style="line-height: 22px;font-size: 12px;letter-spacing: 1px;color: #6c757d;">
                                    {!! $product->product_languages[0]->dimensions !!}</div>
                            </div>
                            <div class="col-4 p-0">
                                @php
                                $directoryimg = $_SERVER['DOCUMENT_ROOT'] . '/img/products/' . $product->slug . '/' . $product->slug . '-human-scale';
                                $filecountimg = count(glob($directoryimg . '*.{jpg}', GLOB_BRACE));
                                @endphp
                                @if ($filecountimg == 1)
                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/{{ $product->slug }}-human-scale.jpg" class="img-fluid" alt="">
                                @else
                                @endif
                            </div>
                        </div>

                    </div><!-- product-details__description -->

                    <div class="product-details__description mb-3 d-print-none">
                        <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">
                            STANDARD FINISHES</h6>
                        <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                            {!! $product->product_languages[0]->tec_info !!}</div>
                    </div><!-- product-details__description -->

                    @if ($product->product_languages[0]->description_small != null)
                    <div class="product-details__description mb-3 d-print-none">
                        <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">
                            PRODUCT DETAILS</h6>
                        <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                            {!! $product->product_languages[0]->description_small !!}</div>
                    </div>
                    @endif
                    <!-- product-details__description -->


                    @if (!$samples->isEmpty())
                    <div class="product-samples d-none d-lg-block d-print-block">
                        <div class="d-flex">
                            <h6 class="heading-secondaryr mt-4" style="color:#94b7b3 !important;font-size: 13px !important;">COLOR OPTIONS</h6>
                            <p id="addText" class="ml-2" style="line-height: 22px;font-size: 8px;letter-spacing: 1px;color: #6c757d;margin-top:22px;text-transform:uppercase;"></p>
                        </div>
                        @foreach ($samples as $sample)
                        <a class="trigger-opt-item {{ $loop->first ? 'fcurrent' : '' }} position-relative"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/mini-samples/{{ $sample->slug }}.jpg" alt="" data-target="{{ $sample->slug }}" data-product="{{ $product->slug }}" class="img-fluid" style="width: 50px;"></a>
                        @endforeach
                    </div>
                    @endif

                    <div class="product-details__actions mt-3 d-print-none  col-12 col-lg-12">
                        @php $product_name = $product->name.' '.$product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name @endphp

                        <div class="row">
                            <div class="col-12 col-sm-12 block p-0 my-1">
                                <a rel="modal:open" class="btn btn--primary-grey w-100 modal-cursor-disable" href="{{ route('modal-product-costumize', $product->slug) }}"><span>REQUEST
                                        CUSTOMIZATION <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
                            </div>
                            <div class="col-12 p-0 d-print-none">
                                <a class="btn btn--primary-grey w-100 talk-with-us" target="_blank"><span>TALK WITH A
                                        DESIGNER <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
                            </div>


                        </div>

                    </div><!-- product-details__actions -->

                </div>

                <div class="col-12 text-left product_options position-relative d-print-none pt-4">
                    <div class="row m-0 align-items-center">
                        <div class="col-5 col-md-6 mt-4 p-0">
                            <h6 class="heading-secondary m-0 p-0">MAY WE HELP?</h6>
                        </div>
                        <div class="col-7 col-md-6 mt-4 p-0" style="text-align: end;">
                            <p class="d-inline print-on-click"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/print.png" alt="" width="18" height="18"> Print</p>
                            <div class="social-share d-inline">
                                <ul class="a2a_kit">
                                    <li>&nbsp;<i class="fa fa-share-alt"></i>&nbsp;</li>
                                    <li><a class="a2a_button_email"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/email.png" alt="share on email"></a>&nbsp;</li>
                                    <li><a class="a2a_button_whatsapp"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/whatsapp.png" alt="share on whatsapp"></a></li>
                                    <li><a class="a2a_button_facebook"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/facebook.png" alt="share on facebook"></a></li>
                                    <li><a class="a2a_button_pinterest"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/pinterest.png" alt="share on pinterest"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div><!-- product-details -->

    </div>

</div>



@if ($product->slug == 'fantasy-air-chest-6-drawers' ||
$product->slug == 'rocky-rocket' ||
$product->slug == 'chameleon-pink-mirror' ||
$product->slug == 'pixie-chair' ||
$product->slug == 'cloud-lamp-small' ||
$product->slug == 'cloud-lamp-big' ||
$product->slug == 'magical-mirror' ||
$product->slug == 'puzzled-bookcase-desk' ||
$product->slug == 'animal-stool-shark' ||
$product->slug == 'animal-stool-bird' ||
$product->slug == 'fantasy-air-bookcase-limited-edition' ||
$product->slug == 'cloud-dressing-table-vanity-console' ||
$product->slug == 'little-cloud-nightstand' ||
$product->slug == 'cloud-nightstand' ||
$product->slug == 'cloud-bed' ||
$product->slug == 'nodo-suspension-chair' ||
$product->slug == 'fantasy-air-nightstand' ||
$product->slug == 'booboo-swing' ||
$product->slug == 'bun-van' ||
$product->slug == 'booboo-suspension-sofa' ||
$product->slug == 'fantasy-air-balloon-bed' ||
$product->slug == 'fantasy-air-bookcase' ||
$product->slug == 'dream-desk' ||
$product->slug == 'little-bunny-chair' ||
$product->slug == 'illusion-chair-white-bear' ||
$product->slug == 'illusion-chair-leopard' ||
$product->slug == 'illusion-stool-white-bear' ||
$product->slug == 'illusion-stool-leopard' ||
$product->slug == 'illusion-table' ||
$product->slug == 'fantasy-air-balloon' ||
$product->slug == 'animal-stool-elephant' ||
$product->slug == 'cloud-sofa' ||
$product->slug == 'gold-box' ||
$product->slug == 'cloud-chest-6-drawers' ||
$product->slug == 'bubble-gum-gym' ||
$product->slug == 'mr-bunny-bed' ||
$product->slug == 'dino-bed' ||
$product->slug == 'gold-box' ||
$product->slug == 'cloud-bench-2-seat' ||
$product->slug == 'bubble-loop' ||
$product->slug == 'bubble-slide' ||
$product->slug == 'vixey-bed' ||
$product->slug == 'cloud-cradle' ||
$product->slug == 'little-mermaid-chair' ||
$product->slug == 'atomic-round-suspension-lamp' ||
$product->slug == 'tristen-bed' ||
$product->slug == 'dolly-playhouse-bed' ||
$product->slug == 'cloud-desk' ||
$product->slug == 'odyssey-express-bed' ||
$product->slug == 'mogli-playhouse-bed' ||
$product->slug == 'mogli-playhouse-gym' ||
$product->slug == 'milo-baby-playground' ||
$product->slug == 'sky-one-plane-bed'||
$product->slug == 'dainty-armchair'||
$product->slug == 'cloud-shelf-big'||
$product->slug == 'mermaid-bed' ||
$product->slug == 'cloud-shelf-small' ||
$product->slug == 'upside-down-rug' ||
$product->slug == 'fantasy-air-chest-3-drawers' ||
$product->slug == 'cloud-stool-puff' ||
$product->slug == 'sky-b-plane-bed' ||
$product->slug == 'cotton-candy-sofa' ||
$product->slug == 'chameleon-mirror' ||
$product->slug == 'cosmo-suspension-lamp' ||
$product->slug == 'rainbow-sofa' ||
$product->slug == 'sky-desk' ||
$product->slug == 'fantasy-air-shelf-small' ||
$product->slug == 'mr-potato-game-rug' ||
$product->slug == 'cloud-chest-3-drawers' ||
$product->slug == 'fantasy-air-shelf-big' ||
$product->slug == 'sky-nightstand' ||
$product->slug == 'bubble-gum-bed' ||
$product->slug == 'bubble-gum-bench' ||
$product->slug == 'cloud-rug' ||
$product->slug == 'moon-rug' ||
$product->slug == 'sky-bookcase' ||
$product->slug == 'astroman-rug' ||
$product->slug == 'bubble-gum-chest-3-drawers'||
$product->slug == 'cloud-mirror'||
$product->slug == 'diana-table-lamp'||
$product->slug == 'diana-wall-lamp'||
$product->slug == 'iv-planets-round-rug'||
$product->slug == 'minelli-bookcase'||
$product->slug == 'planet-party-rug'||
$product->slug == 'sky-rug' ||
$product->slug == 'kings-and-queens-castle'||
$product->slug == 'bubble-drop'||
$product->slug == 'lotus-armchair'||
$product->slug == 'bubble-gum-big-mirror'||
$product->slug == 'hoot-stool'||
$product->slug == 'the-power-elephant-rug'||
$product->slug == 'diana-floor-lamp'||
$product->slug == 'dolly-gym'||
$product->slug == 'periwinkle-pendant'||
$product->slug == 'periwinkle-suspension-lamp'||
$product->slug == 'the-rhinos-troupe-rug' || 
$product->slug == 'fantasy-air-balloon-lounge'|| 
$product->slug == 'lewis-two-seat-sofa'|| 
$product->slug == 'periwinkle-wall-lamp'|| 
$product->slug == 'bubble-gum-slice-shelf'|| 
$product->slug == 'bubble-gum-bookcase'|| 
$product->slug == 'bubble-gum-juke-bookshelf'|| 
$product->slug == 'thunder-rocket-round-rug'|| 
$product->slug == 'the-whales-tale-rug'|| 
$product->slug == 'the-rhinos-troupe-round-rug'|| 
$product->slug == 'mr-ice-rug'|| 
$product->slug == 'sky-chest-3-drawers'|| 
$product->slug == 'pixie-office-chair'|| 
$product->slug == 'threes-a-crowd-rug'|| 
$product->slug == 'magical-market-playroom'|| 
$product->slug == 'bubble-gum-bookcase-the-II' || 
$product->slug == 'little-bunny-office-chair')
<div class="container-fluid text-center p-0 swiper-ambients mb-4 d-print-none ">
    <div class="col-12 swiper-container">
        <div class="swiper-wrapper my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

            @foreach ($product->article_products as $article_product)
            @if ($article_product->article->article_type_id == 7 && $article_product->article->is_active == 1 && $article_product->is_active == 1)
            <figure class="swiper-slide slider-main find-them-all" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" style="margin-bottom: 0;">
                <a href="/img/products/ambiences/zoom/{{ $article_product->article->slug }}.png" class="link-slides" itemprop="contentUrl" data-size="1679x1108">
                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/ambiences/{{ $article_product->article->slug }}.jpg" itemprop="thumbnail" alt="Image description" style="cursor: pointer;" class="img-fluid d-none d-md-block pswp--open-r imgs-hotspots" />
                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/ambiences/{{ $article_product->article->slug }}-m.jpg" itemprop="thumbnail" alt="Image description" style="cursor: pointer;" class="img-fluid d-block d-md-none pswp--open-r" />
                </a>
                @foreach (App\Article_product::where('article_id', $article_product->article->id)->where('is_active', '=', true)->get() as $hotspot)
                @if ($hotspot->product_id == $product->id)
                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: {{ $hotspot->top }}; left: {{ $hotspot->left }};">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="@if ($hotspot->top < '50%' && $hotspot->left < '50%') top:5%;left:105%; @elseif($hotspot->top < '50%' && $hotspot->left > '50%') top:5%;right:105%; @elseif($hotspot->top > '50%' && $hotspot->left < '50%') bottom:5%;left:105%; @else bottom:5%;right:105%; @endif">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/{{ $hotspot->product->slug }}" target="_blank">
                            @if ($hotspot->product->slug == 'cloud-lamp-big' || $hotspot->product->slug == 'cloud-lamp-small')
                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/carousel/{{ $hotspot->product->slug }}-circu-magical-furniture.gif" width="364" height="380" class="img-fluid hotspot-img">
                            @else
                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/carousel/{{ $hotspot->product->slug }}-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            @endif
                            <div class="hotspot-name"><b>{{ $hotspot->product->name }}</b>
                                {{ ucwords($hotspot->product->sub_category->sub_category_languages[0]->name) }}
                            </div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', $hotspot->product->slug) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                @else
                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: {{ $hotspot->top }}; left: {{ $hotspot->left }};">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="@if ($hotspot->top < '50%' && $hotspot->left < '50%') top:5%;left:105%; @elseif($hotspot->top < '50%' && $hotspot->left > '50%') top:5%;right:105%; @elseif($hotspot->top > '50%' && $hotspot->left < '50%') bottom:5%;left:105%; @else bottom:5%;right:105%; @endif">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/{{ $hotspot->product->slug }}" target="_blank">
                            @if ($hotspot->product->slug == 'cloud-lamp-big' || $hotspot->product->slug == 'cloud-lamp-small')
                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/carousel/{{ $hotspot->product->slug }}-circu-magical-furniture.gif" width="364" height="380" class="img-fluid hotspot-img">
                            @else
                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/carousel/{{ $hotspot->product->slug }}-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            @endif
                            <div class="hotspot-name"><b>{{ $hotspot->product->name }}</b>
                                {{ ucwords($hotspot->product->sub_category->sub_category_languages[0]->name) }}
                            </div>
                        </a>
                        <a rel="modal:open" href="{{ route('modal-product-price', $hotspot->product->slug) }}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                @endif
                @endforeach
            </figure>
            @endif
            @endforeach
        </div>
        <div class="swiper-button-prev arrow-banners"></div>
        <div class="swiper-button-next arrow-banners"></div>
    </div>
</div>
@else
@endif
@php
$directory_projects = './img/products/' . $product->slug . '/projects/';
$filecount_projects = count(glob($directory_projects . '*.{jpg,gif}', GLOB_BRACE));
@endphp
@if ($filecount_projects < 1) @else <div class="container-fluid pb-4 d-none d-md-block d-print-none ">
    <div class="row">
        @if ($product->product_languages[0]->title_inspirational != null)
        <div class="col-12 text-center d-print-none ">
            <h1 style="font-family: Good Brush;color: #87b7b3;letter-spacing: 4px;">{!! $product->product_languages[0]->title_inspirational !!}</h1>
            <p style="color: #484848; font-family: Raleway,sans-serif; font-style: italic;font-weight: 600;">
                {!! $product->product_languages[0]->phrase_inspirational !!}</p>
        </div>
        @endif
        @if ($product->has_video == '1')
        <div class="col-5-costum p-0 d-print-none ">
            <div class="row m-0" style="height: 100%;">
                <!-- SLIDE DESKTOP -->


                <div class="col-12 owl-project owl-carousel owl-slide owl-theme p-0 position-relative ">
                    {{-- @foreach ($related_product_project as $related)
                    @endforeach --}}

                    @for ($i = 1; $i <= $filecount_projects; $i++) <div class="item">
                        <a href="https://www.circu.net/projects" target="_bank">
                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/projects/{{ $product->slug }}-{{ $i }}.jpg" value="{{ $product->slug }}" class="img-fluid" style="width: 100% !important">
                        </a>
                </div>
                @endfor

            </div>

            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                <a href="https://www.circu.net/projects" target="_bank">
                    <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important;font-size: 15px;"><span>DESIGN PROJECTS ></span></h2>
                </a>
            </div>

        </div>

    </div>
    <div class="col-5-costum p-0 d-print-none ">
        <a href="https://www.circu.net/interior-design-service" target="_blank">
            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/design-and-play.jpg" class="img-fluid" style="width:100%;">
            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important;font-size: 15px;"><span>DESIGN AND PLAN YOUR SPACE
                        ></span></h2>
            </div>
        </a>
    </div>
    <!-- <div class="col-10-costum p-0">
          <img src="https://dummyimage.com/1600x650/218d8f/fff" class="img-fluid">
        </div> -->

    <div class="col-2-costum p-0 d-print-none ">
        <div class="col-12 p-0" style="height:100%">
            <a href="https://www.tiktok.com/@circu_magical_furniture" target="_blank">
                <div class="row m-0 align-itens-center" style="height:100%;padding: 0px 0px 0px 1px;">

                    <video autoplay muted loop class="img-fluid" style="border: 0.5px solid #777777;background-position: center center;background-size: contain;object-fit: cover;">
                        <source src="/img/products/{{ $product->slug }}/video.mp4" type="video/mp4">
                    </video>
                    <div class="col-12 p-0 position-absolute" style="top: 2%;left: 3%;">
                        <i><svg style="width: 15.5px;color: #777777 !important;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="tiktok" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-tiktok fa-w-14">
                                <path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" class=""></path>
                            </svg></i>
                    </div>
                    <div class="col-1 p-0 position-absolute" style="bottom: 2%;left: 3%;">
                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/btn-play.svg">
                    </div>

                </div>
            </a>
        </div>
    </div>
    @else
    <div class="col-6 p-0 d-print-none ">

        <div class="row m-0">
            <!-- SLIDE DESKTOP -->


            <div class="col-12 owl-project owl-carousel owl-slide owl-theme p-0 position-relative ">
                @php
                $directory_projects_v = './img/products/' . $product->slug . '/projects/';
                $filecount_projects_v = count(glob($directory_projects_v . '*.{jpg,gif,png}', GLOB_BRACE));
                @endphp
                @if ($filecount_projects_v > 1)
                @for ($i = 1; $i <= $filecount_projects_v; $i++) <div class="item">
                    <a href="https://www.circu.net/projects" target="_bank">
                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/projects/{{ $product->slug }}-{{ $i }}.jpg" value="{{ $product->slug }}" class="img-fluid" style="width: 100% !important">
                    </a>
            </div>
            @endfor
            @else
            <div class="item">
                <a href="https://www.circu.net/projects" target="_bank">
                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/projects/{{ $product->slug }}.jpg" class="img-fluid" style="width: 100% !important">
                </a>
            </div>
            @endif
        </div>

        <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
            <a href="https://www.circu.net/projects" target="_bank">
                <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important;font-size: 15px;"><span>DESIGN PROJECTS ></span></h2>
            </a>
        </div>

    </div>

    </div>
    <div class="col-6 p-0 d-print-none ">
        <a href="https://www.circu.net/interior-design-service" target="_blank">
            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/design-and-play.jpg" class="img-fluid" style="width:100%;">
            <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important;font-size: 15px;"><span>DESIGN AND PLAN YOUR SPACE
                        ></span></h2>
            </div>
        </a>
    </div>
    @endif
    </div>
    </div>

    <div class="container-fluid pb-4 d-block d-md-none d-print-none ">
        <div class="row">
            <div class="col-12 text-center d-print-none ">
                <h1 style="font-family: Good Brush;color: #87b7b3;letter-spacing: 4px;">3,2,1 LAUNCH</h1>
                <p style="color: #484848; font-family: Raleway,sans-serif; font-style: italic;">With the Rocky Rocket,
                    he reach th stars and make the wish come true.</p>
            </div>
            <div class="col-12 p-0">
                <div class="row m-0">
                    <!-- SLIDE DESKTOP -->
                    @php
                    $directory_projects_v = './img/products/' . $product->slug . '/projects/' . $product->slug .'-1';
                    $filecount_projects_v = count(glob($directory_projects_v . '*.{jpg,gif,png}', GLOB_BRACE));
                    @endphp
                    <div class="col-12 owl-project owl-carousel owl-slide owl-theme p-0 position-relative ">
                        @if ($filecount_projects_v >= 1)
                        @for ($i = 1; $i <= $filecount_projects_v; $i++) <div class="item">
                            <a href="https://www.circu.net/projects" target="_bank">
                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/projects/{{ $product->slug }}-{{ $i }}.jpg" value="{{ $product->slug }}" class="img-fluid" style="width: 100% !important">
                            </a>
                    </div>
                    @endfor
                    @else
                    <div class="item">
                        <a href="https://www.circu.net/projects" target="_bank">
                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/projects/{{ $product->slug }}.jpg" class="img-fluid" style="width: 100% !important">
                        </a>
                    </div>
                    @endif
                </div>

                <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                    <a href="https://www.circu.net/projects" target="_bank">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important;font-size: 15px;"><span>DESIGN PROJECTS ></span></h2>
                    </a>
                </div>

            </div>

        </div>
        <div class="col-12 p-0 pt-2">
            <a href="https://www.circu.net/interior-design-service" target="_blank">
                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/design-and-play.jpg" class="img-fluid" style="width:100%;">
                <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                    <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important;font-size: 15px;"><span>DESIGN AND PLAN YOUR SPACE ></span>
                    </h2>
                </div>
            </a>
        </div>
    </div>
    </div>
    @endif
    <div class="container-fluid">

        <div class="row">

            @if (session('message'))
            <div class="alert alert-success">
                <span onclick="this.parentElement.style.display='none'" class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
                {{ session('message') }}
            </div>
            @endif

            <ul class="nav nav-tabs justify-content-center col-12 print-d-none" id="firstTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="additional_info-tab" data-toggle="tab" href="#additional_info" role="tab" aria-controls="additional_info" aria-selected="true">ADDITIONAL INFORMATION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="download_area-tab" data-toggle="tab" href="#download_area" role="tab" aria-controls="download_area" aria-selected="false">DOWNLOAD AREA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="talk_with-tab" data-toggle="tab" href="#talk_with" role="tab" aria-controls="talk_with" aria-selected="false">CUSTOMIZATION</a>
                </li>
            </ul>

            <div class="tab-content col-12 col-lg-12 pt-3 pb-5 p-0" id="firstTabContent">

                <div class="tab-pane fade show active print-margin-x" id="additional_info" role="tabpanel" aria-labelledby="additional_info-tab">
                    <div class="row justify-content-center m-0 d-print-none">
                        <div class="col-12 col-md-9 p-0">
                            <div class="col-12 p-0">
                                <div class="row m-0">
                                    <div class="col-12 col-md-8 product_technical p-0 px-3 px-md-0 pl-md-5 pr-md-4">
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">PRODUCT DETAILS
                                            </h6>
                                            <div class="descriptions_p" style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                {!! $product->product_languages[0]->description !!}</div>
                                        </div>
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">STANDARD
                                                FINISHES</h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                {!! $product->product_languages[0]->tec_info !!}</div>
                                        </div>
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">DIMENSIONS</h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                {!! $product->product_languages[0]->dimensions !!}</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 product_technical p-0 px-3 px-md-0 pl-md-4 pr-0">
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">CUSTOMIZATION
                                            </h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                Also available in alternative color.</div>
                                        </div>
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">CLEAN AND CARE
                                            </h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                Dry cloth</div>
                                        </div>
                                        @if ($product->product_languages[0]->weight != null)
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">WEIGHT</h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                {!! $product->product_languages[0]->weight !!}</div>
                                        </div>
                                        @endif
                                        <div class="product-details__description mb-3">
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;padding-bottom: 5px;color: #6c757d;">
                                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/box2.svg" srcset="/img/box2.svg" width="17" class="img-fluid"> Estimated production time: 8 weeks
                                            </div>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;padding-bottom: 5px;color: #6c757d;">
                                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/plane.svg" srcset="/img/plane.svg" width="17" class="img-fluid"> World wide Shipping
                                            </div>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/box.svg" srcset="/img/box.svg" width="17" class="img-fluid"> 100% Handmade in Portugal
                                            </div>
                                        </div>
                                        @php
                                        $directory = $_SERVER['DOCUMENT_ROOT'] . '/img/products/' . $product->slug . '/' . $product->slug . '-human-scale';
                                        $filecount = count(glob($directory . '*.{jpg}', GLOB_BRACE));
                                        @endphp
                                        @if ($filecount == 1)
                                        <div class="col-12 col-md-6 text-center p-0">
                                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" data-src="/img/products/{{ $product->slug }}/{{ $product->slug }}-human-scale.jpg" class="img-fluid" width="400" height="250" alt="" srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
                                        </div>
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center m-0 d-none d-print-block">
                        <div class="col-12 col-md-12 p-0">
                            <div class="col-12 p-0 px-1">
                                <div class="row m-0">
                                    <div class="col-12 col-md-8 product_technical p-0 px-3 px-md-0 pl-md-3 pr-md-4">
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">PRODUCT DETAILS
                                            </h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                {!! $product->product_languages[0]->description !!}</div>
                                        </div>
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">STANDARD
                                                FINISHES</h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                {!! $product->product_languages[0]->tec_info !!}</div>
                                        </div>
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">DIMENSIONS</h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                {!! $product->product_languages[0]->dimensions !!}</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 product_technical p-0 px-3 px-md-0 pl-md-4 pr-0">
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">CUSTOMIZATION
                                            </h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                Also available in alternative color.</div>
                                        </div>
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">CLEAN AND CARE
                                            </h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                Dry cloth</div>
                                        </div>
                                        @if ($product->product_languages[0]->weight != null)
                                        <div class="product-details__description mb-3">
                                            <h6 class="heading-secondaryr" style="color:#94b7b3 !important;font-size: 13px !important;">WEIGHT</h6>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                {!! $product->product_languages[0]->weight !!}</div>
                                        </div>
                                        @endif
                                        <div class="product-details__description mb-3">
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;padding-bottom: 5px;color: #6c757d;">
                                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/box2.svg" srcset="/img/box2.svg" width="17" class="img-fluid"> Estimated production time: 8 weeks
                                            </div>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;padding-bottom: 5px;color: #6c757d;">
                                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/plane.svg" srcset="/img/plane.svg" width="17" class="img-fluid"> World wide Shipping
                                            </div>
                                            <div style="line-height: 22px;font-size: 13px;letter-spacing: 1px;color: #6c757d;">
                                                <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/box.svg" srcset="/img/box.svg" width="17" class="img-fluid"> 100% Handmade in Portugal
                                            </div>
                                        </div>
                                        @php
                                        $directory = $_SERVER['DOCUMENT_ROOT'] . '/img/products/' . $product->slug . '/' . $product->slug . '-human-scale';
                                        $filecount = count(glob($directory . '*.{jpg}', GLOB_BRACE));
                                        @endphp
                                        @if ($filecount == 1)
                                        <div class="col-12 col-md-7 text-center p-0">
                                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" data-src="/img/products/{{ $product->slug }}/{{ $product->slug }}-human-scale.jpg" class="img-fluid" width="400" height="250" alt="" srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
                                        </div>
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade print-d-none" id="download_area" role="tabpanel" aria-labelledby="download_area-tab">

                    <div class="row justify-content-center m-0">
                        <div class="col-12 col-md-9 p-0">
                            <div class="col-12 p-0 px-3 px-md-0">
                                <div class="row m-0 justify-content-center">
                                    <div class="col-12 col-md-9">
                                        @include(
                                        'includes.form-product.form-product-downloads'
                                        )
                                    </div>
                                    <!-- form -->
                                    <div class="d-none d-xl-block col-xl-3">
                                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" data-src="/img/icons/product-page-download-catalogue.jpg" alt="" srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="360" height="360" class="img-fluid mt-5">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- -->
                    </div>
                </div>

                <div class="tab-pane fade print-d-none" id="talk_with" role="tabpanel" aria-labelledby="talk_with-tab">
                    <div class="row justify-content-center m-0">
                        <div class="col-12 col-md-9 p-0">
                            <div class="col-12 p-0">
                                <div class="row m-0 ">
                                    <div class="col-12 col-lg-6 product_custom">
                                        <div class="col-12 p-0">
                                            <p><b>CUSTOMIZATION</b> <br>Circu prouds itself of offering a wide range of
                                                finishes, allowing you to costumize the products to your taste. Keep in mind
                                                that any changes must be made while contacting the brand's representatives
                                                and upcharges may be added.</p>
                                            <p><b>BESPOKE</b> <br>For a bespoke project, you must fill up a form stating the
                                                type of project that you're seeking so the brand can argue if it is possible
                                                to create it or not. Above all, security protocols must always be respected
                                                and followed. </p>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <div class="col-12 p-0">
                                            <!-- form -->
                                            @include(
                                            'includes.form-product.form-product-customization'
                                            )
                                            <!-- -->
                                        </div>
                                    </div>
                                    @php
                                    $directory_samples = './img/products/' . $product->slug . '/finishes/';
                                    $filecount_samples = count(glob($directory_samples . '*.{jpg,gif,png}', GLOB_BRACE));

                                    $dir_exists = './img/products/' . $product->slug . '/costumize/';
                                    @endphp


                                    @if (is_dir($dir_exists))
                                    <div class="col-12 pt-4 pt-md-2">
                                        <div class="row m-0">
                                            <div class="col-12 text-center p-0 pb-4 pb-md-0">
                                                <h2 class="col-12 category_name_title text-center mb-0"><span>STYLE
                                                        YOUR OWN</span></h2>
                                            </div>
                                            <div class="col-12 col-md-6 p-0 d-none d-md-block">
                                                <div class="col-12">
                                                    <h6 class="heading-secondaryr" style="color:#94b7b3 !important;">
                                                        LACQUER COLORS</h6>
                                                </div>
                                                <div class="row m-0 product-samples-costum">
                                                    @foreach ($samples_options as $samples_option)
                                                    <div class="col-20 text-center p-1 " style="cursor:pointer;">
                                                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/finishes/{{ $samples_option->slug }}.png" class="img-fluid img-change" value="{{ $samples_option->slug }}" data-product="{{ $product->slug }}" style="width: 55px;">
                                                        <p class="text-uppercase d-none d-md-block" style="font-size:10px;">
                                                            {{ str_replace('-', ' ', $samples_option->slug) }}
                                                        </p>
                                                        <p class="text-capitalize d-block d-md-none" style="font-size:10px;">
                                                            {{ str_replace('-', ' ', $samples_option->slug) }}
                                                        </p>
                                                    </div>
                                                    @endforeach
                                                    <div class="col-12">
                                                        <div class="col-7 p-0">
                                                            <a href="https://www.circu.net/finishes" class="btn btn--primary-grey w-100" target="_blank"><span>DISCOVER MORE FINISHES</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 p-0 d-block d-md-none">
                                                <div class="col-12 text-center">
                                                    <h6 class="heading-secondaryr" style="color:#94b7b3 !important;">
                                                        LACQUER COLORS</h6>
                                                </div>
                                                <div class="row m-0 justify-content-center product-samples-costum">
                                                    @foreach ($samples_options as $samples_option)
                                                    <div class="col-3 text-center p-1 " style="cursor:pointer;">
                                                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/finishes/{{ $samples_option->slug }}.png" class="img-fluid img-change" value="{{ $samples_option->slug }}" data-product="{{ $product->slug }}" style="width: 55px;">
                                                        <p class="text-uppercase d-none d-md-block" style="font-size:10px;">
                                                            {{ str_replace('-', ' ', $samples_option->slug) }}
                                                        </p>
                                                        <p class="text-capitalize d-block d-md-none" style="font-size:10px;">
                                                            {{ str_replace('-', ' ', $samples_option->slug) }}
                                                        </p>
                                                    </div>
                                                    @endforeach
                                                    <div class="col-12">
                                                        <div class="col-12 p-0">
                                                            <a href="https://www.circu.net/finishes" class="btn btn--primary-grey w-100" target="_blank"><span>DISCOVER MORE FINISHES</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 text-right p-0 d-none d-md-block">
                                                <div class="col-12 p-0">
                                                    <div class="row m-0 justify-content-end">
                                                        <div class="col-6 col-lg-4">
                                                            <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/{{ $product->slug }}/costumize/{{ $samples_options[0]->slug }}.jpg" class="img-fluid w-100 change-img">
                                                        </div>
                                                    </div>

                                                    <div class="row m-0 justify-content-end pt-2">
                                                        <div class="col-6 col-lg-4">
                                                            <a rel="modal:open" class="btn btn--primary-green w-100" href="https://www.circu.net/includes/modal-product-price/{{ $product->slug }}"><span>GET
                                                                    PRICE <i class="fas fa-caret-right"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center pt-4 p-0">
                                                <h2 class="col-12 category_name_title text-center mb-0"><span>NEED MORE
                                                        HELP?</span></h2>
                                            </div>
                                            <div class="col-12 p-0 pb-3">
                                                <div class="row m-0 justify-content-center">
                                                    <a class="btn btn--primary-grey w-100 talk-with-us" style="max-width: 300px;" target="_blank"><span>TALK WITH A
                                                            DESIGNER <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid d-print-none mb-2">

        <div class="row">

            <div class="col-12 col-lg-6">
                <div class="row">
                    <h2 class="col-12 category_name_title text-center mb-0"><span>SIMILAR PRODUCTS</span></h2>

                    <div class="col-12 owl-more-products owl-carousel owl-slide owl-theme px-0">
                        @foreach ($product->similar->product_similars as $similar)
                        <div class="item product-box">
                            <div class="product_thumb py-4">
                                <a href="{{ route('product', ['product' => $similar->product->slug]) }}">
                                    @if (file_exists('./img/products/thumbnails/' . $similar->product->slug . '-circu-magical-furniture.png'))
                                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/thumbnails/{{ $similar->product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                                    @else
                                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/thumbnails/{{ $similar->product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                                    @endif

                                    <div class="product--title">
                                        <span class="name">{{ $similar->product->name }}
                                            {{ ucwords($similar->product->sub_category->sub_category_languages[0]->name) }}</span>
                                    </div>

                                    @if (($similar->product->is_new && $similar->product->slug == 'bubble-gum-bed') || $similar->product->slug == 'bubble-gum-bench' || $similar->product->slug == 'bubble-gum-dressing-table' || $similar->product->slug == 'bubble-gum-chest-3-drawers' || $similar->product->slug == 'bubble-gum-chest-2-drawers' || $similar->product->slug == 'bubble-gum-desk' || $similar->product->slug == 'bubble-slide' || $similar->product->slug == 'bubble-loop' || $similar->product->slug == 'bubble-drop' || $similar->product->slug == 'bubble-gum-playground' || $similar->product->slug == 'bubble-gum-big-mirror' || $similar->product->slug == 'bubble-gum-small-mirror' || $similar->product->slug == 'cotton-candy-sofa' || $similar->product->slug == 'rainbow-sofa')
                                    <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/product-new-collection.png">
                                    </div>
                                    @elseif($similar->product->is_new)
                                    <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/product-new.png">
                                    </div>
                                    @endif
                                </a>

                                <div class="col-12 clearfix position-relative mt-2 p-0">
                                    <div class="slideToggle">
                                        <a rel="modal:open" class="btn-green-underline mt-0" href="{{ route('modal-product-price', $similar->product->slug) }}"><span>GET
                                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="row">
                    <h2 class="col-12 category_name_title text-center mb-0"><span>PERFECT MATCH</span></h2>

                    <div class="col-12 owl-more-products owl-carousel owl-slide owl-theme px-0">
                        @foreach ($product->similar->product_matches as $similar)
                        <div class="item product-box">
                            <div class="product_thumb py-4">
                                <a href="{{ route('product', ['product' => $similar->product->slug]) }}">
                                    @if (file_exists('./img/products/thumbnails/' . $similar->product->slug . '-circu-magical-furniture.png'))
                                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/thumbnails/{{ $similar->product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                                    @else
                                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/products/thumbnails/{{ $similar->product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                                    @endif

                                    <div class="product--title">
                                        <span class="name">{{ $similar->product->name }}
                                            {{ ucwords($similar->product->sub_category->sub_category_languages[0]->name) }}</span>
                                    </div>

                                    @if (($similar->product->is_new && $similar->product->slug == 'bubble-gum-bed') || $similar->product->slug == 'bubble-gum-bench' || $similar->product->slug == 'bubble-gum-dressing-table' || $similar->product->slug == 'bubble-gum-chest-3-drawers' || $similar->product->slug == 'bubble-gum-chest-2-drawers' || $similar->product->slug == 'bubble-gum-desk' || $similar->product->slug == 'bubble-slide' || $similar->product->slug == 'bubble-loop' || $similar->product->slug == 'bubble-drop' || $similar->product->slug == 'bubble-gum-playground' || $similar->product->slug == 'bubble-gum-big-mirror' || $similar->product->slug == 'bubble-gum-small-mirror' || $similar->product->slug == 'cotton-candy-sofa' || $similar->product->slug == 'rainbow-sofa')
                                    <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/product-new-collection.png">
                                    </div>
                                    @elseif($similar->product->is_new)
                                    <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                                        <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/product-new.png">
                                    </div>
                                    @endif
                                </a>

                                <div class="col-12 clearfix position-relative mt-2 p-0">
                                    <div class="slideToggle">
                                        <a rel="modal:open" class="btn-green-underline mt-0" href="{{ route('modal-product-price', $similar->product->slug) }}"><span>GET
                                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid print-d-none">
        <div class="row pb-2">
            <div class="col-12 col-md-4 p-0">
                <a href="https://www.circu.net/ebook/new-products-2023?utm_origem=website&utm_meio=pagproduto&utm_conteudo=circu-newproducts-23&utm_campanha=newproducts">
                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/home/new-products-2023.jpg" alt="New Products 2023 Circu Magical Furniture" class="img-fluid w-100">
                </a>
            </div>
            <div class="col-12 col-md-4 p-0">
                <a href="{{ route('landing-ebook', ['ebook' => 'catalogue-circu-magical-furniture']) }}">
                    <img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/home/banner-catalogue.jpg" alt="New Catalogue Circu Magical Furniture" class="img-fluid w-100">
                </a>
            </div>
            <div class="col-12 col-md-4 p-0">
                <a href="https://www.circu.net/circu-new-showroom?utm_origem=website&utm_meio=pagproduto&utm_conteudo=circu-newshowroom&utm_campanha=showroom">
                    <img alt="" src="/img/form-imgs/banner-side-form-new-showroom.jpg" alt="New Showroom Circu" class="img-fluid w-100">
                </a>
            </div>
        </div>
    </div>

    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe.
             It's a separate element, as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
            <!-- don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                    <button class="pswp__button pswp__button--share" title="Share"></button>

                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                    <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                    <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>

                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>

                <div class="pswp__caption" style="background-color: #fff !important;">
                    <div class="pswp__caption__center"></div>
                </div>

                <div class="pswp__bottom-bar py-2 align-items-center d-flex">
                    <div class="col-6 text-left float-left">
                        <h6 class="heading-secondary d-inline mr-1">MAY WE HELP?</h6>
                        <p class="d-inline print-on-click"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/print.png" alt="" width="18" height="18"> Print</p>
                        <div class="social-share d-inline">
                            <ul class="a2a_kit">
                                <li>&nbsp;<i class="fa fa-share-alt"></i>&nbsp;</li>
                                <li><a class="a2a_button_email"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/email.png" alt="share on email"></a>&nbsp;</li>
                                <li><a class="a2a_button_whatsapp"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/whatsapp.png" alt="share on whatsapp"></a></li>
                                <li><a class="a2a_button_facebook"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/facebook.png" alt="share on facebook"></a></li>
                                <li><a class="a2a_button_pinterest"><img alt="{{ $product->name }} circu magical furniture kids {{ $product->sub_category->category->category_languages[0]->name }}" src="/img/icons/social/pinterest.png" alt="share on pinterest"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 text-right float-right">
                        <a rel="modal:open" class="btn btn--primary-green w-50 mb-1" href="{{ route('modal-product-price', $product->slug) }}" style="margin-right:12%;"><span>GET PRICE <i class="fas fa-caret-right"></i></span></a>
                    </div>
                </div>

            </div>

        </div>

    </div>


    @endsection

    @section('footer-includes')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script>
        deferLoadingScript('/js/addtoany.js');
    </script>
    <script language="javascript">
        $('.img-change').click(function() {
            var change_img = $(this).attr('value');
            var product = $(this).attr('data-product');
            $('.change-img').attr('src', '/img/products/' + product + '/costumize/' + change_img + '.jpg');
        });
    </script>
    <script type="text/javascript">
        $('.owl-project').owlCarousel({
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

        function mais() {
            var atual = document.getElementById("total").value;
            var novo = atual - (-1); //Evitando Concatenacoes
            document.getElementById("total").value = novo;
        }

        function menos() {
            var atual = document.getElementById("total").value;
            if (atual >= 1) { //evita números negativos
                var novo = atual - 1;
                document.getElementById("total").value = novo;
            }
        }
        $(window).load(function() {
            $("a").removeClass("modal-cursor-disable");
        });
        $('.talk-with-us').click(function() {
            SnapEngage.startLink();
        });



        $('.owl-ambients').owlCarousel({
            loop: true,
            margin: 5,
            lazyLoad: false,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-chevron-left arrow-banners'></i>",
                "<i class='fas fa-chevron-right arrow-banners'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 3
                }
            }
        });

        $('.hotspot').hover(function() {
            $('.link-slides').addClass('remove-link');
        });
        $('.hotspot').click(function() {
            $('.link-slides').addClass('remove-link');
        });

        $(document).ready(function() {

            var initPhotoSwipeFromDOM = function(gallerySelector) {

                // parse slide data (url, title, size ...) from DOM elements 
                // (children of gallerySelector)
                var parseThumbnailElements = function(el) {
                    var thumbElements = el.childNodes,
                        numNodes = thumbElements.length,
                        items = [],
                        figureEl,
                        linkEl,
                        size,
                        item;

                    for (var i = 0; i < numNodes; i++) {

                        figureEl = thumbElements[i]; // <figure> element

                        // include only element nodes 
                        if (figureEl.nodeType !== 1) {
                            continue;
                        }

                        if (figureEl.className.indexOf('slick-cloned') > 0) {
                            continue;
                        }


                        linkEl = figureEl.children[0]; // <a> element

                        size = linkEl.getAttribute('data-size').split('x');

                        // create slide object
                        item = {
                            src: linkEl.getAttribute('href'),
                            w: parseInt(size[0], 10),
                            h: parseInt(size[1], 10)
                        };


                        if (figureEl.children.length > 1) {
                            // <figcaption> content
                            item.title = figureEl.children[1].innerHTML;
                        }

                        if (linkEl.children.length > 0) {
                            // <img> thumbnail element, retrieving thumbnail url
                            item.msrc = linkEl.children[0].getAttribute('src');
                        }

                        item.el = figureEl; // save link to element for getThumbBoundsFn
                        items.push(item);
                    }

                    // console.log(items);
                    return items;
                };

                // find nearest parent element
                var closest = function closest(el, fn) {
                    return el && (fn(el) ? el : closest(el.parentNode, fn));
                };

                // triggers when user clicks on thumbnail
                var onThumbnailsClick = function(e) {
                    e = e || window.event;
                    e.preventDefault ? e.preventDefault() : e.returnValue = false;

                    var eTarget = e.target || e.srcElement;

                    // find root element of slide
                    var clickedListItem = closest(eTarget, function(el) {
                        return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                    });

                    if (!clickedListItem) {
                        return;
                    }

                    // find index of clicked item by looping through all child nodes
                    // alternatively, you may define index via data- attribute
                    var clickedGallery = clickedListItem.parentNode,
                        childNodes = clickedListItem.parentNode.childNodes,
                        numChildNodes = childNodes.length,
                        nodeIndex = 0,
                        index;

                    for (var i = 0; i < numChildNodes; i++) {
                        if (childNodes[i].nodeType !== 1) {
                            continue;
                        }

                        if (childNodes[i] === clickedListItem) {
                            index = nodeIndex;
                            break;
                        }
                        nodeIndex++;
                    }

                    if (index >= 0) {
                        // open PhotoSwipe if valid index found
                        openPhotoSwipe(index, clickedGallery);
                    }
                    return false;
                };

                // parse picture index and gallery index from URL (#&pid=1&gid=2)
                var photoswipeParseHash = function() {
                    var hash = window.location.hash.substring(1),
                        params = {};

                    if (hash.length < 5) {
                        return params;
                    }

                    var vars = hash.split('&');
                    for (var i = 0; i < vars.length; i++) {
                        if (!vars[i]) {
                            continue;
                        }
                        var pair = vars[i].split('=');
                        if (pair.length < 2) {
                            continue;
                        }
                        params[pair[0]] = pair[1];
                    }

                    if (params.gid) {
                        params.gid = parseInt(params.gid, 10);
                    }

                    return params;
                };




                var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                    $('body').addClass('photoSwipeOpen');
                    var pswpElement = document.querySelectorAll('.pswp')[0],
                        gallery,
                        options,
                        items;

                    items = parseThumbnailElements(galleryElement);
                    index -= 1;
                    // console.log(index);

                    // define options (if needed)
                    options = {

                        // define gallery index (for URL)
                        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                        // getThumbBoundsFn: function(index) {
                        //     // See Options -> getThumbBoundsFn section of documentation for more info
                        //     var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                        //         pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        //         rect = thumbnail.getBoundingClientRect(); 

                        //     return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                        // },
                        showAnimationDuration: 0,
                        showHideOpacity: true,
                        getThumbBoundsFn: false

                    };

                    // PhotoSwipe opened from URL
                    if (fromURL) {
                        if (options.galleryPIDs) {
                            // parse real index when custom PIDs are used 
                            // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                            for (var j = 0; j < items.length; j++) {
                                if (items[j].pid == index) {
                                    options.index = j;
                                    break;
                                }
                            }
                        } else {
                            // in URL indexes start from 1
                            options.index = parseInt(index, 10) - 1;
                        }
                    } else {
                        options.index = parseInt(index, 10);
                    }

                    // exit if index not found
                    if (isNaN(options.index)) {
                        return;
                    }

                    if (disableAnimation) {
                        options.showAnimationDuration = 0;
                    }

                    // Pass data to PhotoSwipe and initialize it
                    gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                    gallery.init();


                    gallery.listen('close', function() {
                        $('body').removeClass('photoSwipeOpen');
                    });

                    gallery.listen('afterChange', function() {

                        var curr = gallery.currItem;
                        var index2 = curr.el.dataset.slickIndex;

                        //$('.slider-main').slick('slickGoTo', index2);
                        $('.product-slide--details').slick('slickGoTo', index2);

                    });

                };

                // custom slide
                $('.trigger-opt-item').on('click', function(e) {
                    $(this).addClass("fcurrent").siblings().removeClass("fcurrent");
                    $search_term = $(e.target).attr("data-target");

                    console.log($search_term)

                    if($(e.target).attr("data-target") === 'light-blue-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Light Blue'
                        }
                        if($(e.target).attr("data-target") === 'light-blue'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Light Blue'
                        }
                        if($(e.target).attr("data-target") === 'blue-pastel-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Beauty Blue'
                        }
                        if($(e.target).attr("data-target") === 'paris-dark-blue'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Dark Blue'
                        }
                        if($(e.target).attr("data-target") === 'cream-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Cream'
                        }
                        if($(e.target).attr("data-target") === 'paris-lima'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Lima'
                        }
                        if($(e.target).attr("data-target") === 'light-pink-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Pink'
                        }
                        if($(e.target).attr("data-target") === 'light-pink'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Light Pink'
                        }
                        if($(e.target).attr("data-target") === 'pink-pastel-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Beauty Pink'
                        }
                        if($(e.target).attr("data-target") === 'milk'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Milk'
                        }
                        if($(e.target).attr("data-target") === 'royal-blue'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Royal Blue'
                        }
                        if($(e.target).attr("data-target") === 'lemon-yellow'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Lemon Yellow'
                        }
                        if($(e.target).attr("data-target") === 'sage-grey'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Sage Grey'
                        }
                        if($(e.target).attr("data-target") === 'origami-grey'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Origami Grey'
                        }
                        if($(e.target).attr("data-target") === 'cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Cream'
                        }
                        if($(e.target).attr("data-target") === 'taupe'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Taupe'
                        }
                        if($(e.target).attr("data-target") === 'taupe-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Mousse'
                        }
                        if($(e.target).attr("data-target") === 'sage-grey-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Light Grey'
                        }
                        if($(e.target).attr("data-target") === 'milk-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Milk Velvet'
                        }
                        if($(e.target).attr("data-target") === 'green-pastel-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Beauty Green'
                        }
                        if($(e.target).attr("data-target") === 'paris-green'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Green'
                        }
                        if($(e.target).attr("data-target") === 'light-green'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Light Green'
                        }
                        if($(e.target).attr("data-target") === 'green-pastel-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Beauty Green'
                        }
                        if($(e.target).attr("data-target") === 'lilac-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Venus Lilac'
                        }
                        if($(e.target).attr("data-target") === 'yellow-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Yellow Velvet'
                        }
                        if($(e.target).attr("data-target") === 'venus-salmon'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Venus Salmon'
                        }
                        if($(e.target).attr("data-target") === 'venus-orange'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Venus Orange'
                        }
                        if($(e.target).attr("data-target") === 'paris-mostaza'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Mostaza'
                        }
                        if($(e.target).attr("data-target") === 'paris-brick'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Brick'
                        }
                        if($(e.target).attr("data-target") === 'paris-turquoise'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Turquoise'
                        }
                        if($(e.target).attr("data-target") === 'paris-elephant'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Elephant'
                        }
                        if($(e.target).attr("data-target") === 'paris-beige'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Beige'
                        }
                        if($(e.target).attr("data-target") === 'paris-ebony'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Ebony'
                        }
                        if($(e.target).attr("data-target") === 'paris-khaki'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Khaki'
                        }
                        if($(e.target).attr("data-target") === 'opera-cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Opera Cream'
                        }
                        if($(e.target).attr("data-target") === 'light-blue-cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Light Blue | Paris Cream'
                        }
                        if($(e.target).attr("data-target") === 'blue-pink'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Light Blue | Paris Pink'
                        }
                        if($(e.target).attr("data-target") === 'taupe-cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Mousse | Paris Cream'
                        }
                        if($(e.target).attr("data-target") === 'green-cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Beauty Green | Paris Cream'
                        }
                        if($(e.target).attr("data-target") === 'lilac-cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Venus Lilac | Paris Cream'
                        }
                        if($(e.target).attr("data-target") === 'milk-cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Milk Velvet | Paris Cream'
                        }
                        if($(e.target).attr("data-target") === 'pink-cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Beauty Pink | Paris Cream'
                        }
                        if($(e.target).attr("data-target") === 'turquoise-milk'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Paris Turquoise | Milk Velvet'
                        }
                        if($(e.target).attr("data-target") === 'yellow-cream'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Yellow Velvet | Paris Cream'
                        }
                        if($(e.target).attr("data-target") === 'gold-plated'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Gold Plated'
                        }
                        if($(e.target).attr("data-target") === 'nickel-plated'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Nickel Plated'
                        }
                        if($(e.target).attr("data-target") === 'grey-synthetic-leather'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Synthetic Grey'
                        }
                        if($(e.target).attr("data-target") === 'standard-light-pink-velvet'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Synthetic Grey'
                        }
                        if($(e.target).attr("data-target") === 'gold-leaf'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Gold Plated'
                        }
                        if($(e.target).attr("data-target") === 'silver-leaf'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Nickel Plated'
                        }
                        if($(e.target).attr("data-target") === 'copper-leaf'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Copper Plated'
                        }
                        if($(e.target).attr("data-target") === 'sheep-synthetic-fur'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Sheep Synthetic Fur'
                        }
                        if($(e.target).attr("data-target") === 'candy-red'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Candy Red'
                        }
                        if($(e.target).attr("data-target") === 'white-red'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Milk | Candy Red'
                        }
                        if($(e.target).attr("data-target") === 'white-pink'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Milk | Light Pink'
                        }
                        if($(e.target).attr("data-target") === 'white-creme'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Milk | Cream'
                        }
                        if($(e.target).attr("data-target") === 'origami-grey-lemon-yellow'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Grey | Lemon Yellow'
                        }
                        if($(e.target).attr("data-target") === 'light-blue-light-pink'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Light Blue | Light Pink'
                        }
                        if($(e.target).attr("data-target") === 'grey-light-green'){
                            var element = document.getElementById("color-product");
                            var addText = document.getElementById("addText");
                            addText.innerText = 'Origami Grey | Light Green'
                        }

                    var sliders_custom = document.querySelectorAll(
                        `.slick-slide[data-sample='${$search_term}']`);
                    console.log(sliders_custom);
                    $slider_custom_index = sliders_custom[0].attributes['data-slick-index'].value;
                    console.log(sliders_custom[0].attributes['data-slick-index']);

                    if ($slider_custom_index < 0) {
                        $slider_custom_index = sliders_custom[1].attributes['data-slick-index'].value;
                    }

                    $('.product-slide--details').slick('slickGoTo', $slider_custom_index);

                });

                // loop through all gallery elements and bind events
                var galleryElements = document.querySelectorAll(gallerySelector);

                for (var i = 0, l = galleryElements.length; i < l; i++) {
                    galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                    galleryElements[i].onclick = onThumbnailsClick;
                }

                // Parse URL and open gallery if it contains #&pid=3&gid=1
                var hashData = photoswipeParseHash();
                if (hashData.pid && hashData.gid) {
                    openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
                }
            };

            // execute above function
            initPhotoSwipeFromDOM('.product-slide--details');



            var initPhotoSwipeFromDOMambients = function(gallerySelector) {

                // parse slide data (url, title, size ...) from DOM elements 
                // (children of gallerySelector)
                var parseThumbnailElements = function(el) {
                    var thumbElements = el.childNodes,
                        numNodes = thumbElements.length,
                        items = [],
                        figureEl,
                        linkEl,
                        size,
                        item;

                    for (var i = 0; i < numNodes; i++) {

                        figureEl = thumbElements[i]; // <figure> element

                        // include only element nodes 
                        if (figureEl.nodeType !== 1) {
                            continue;
                        }

                        /* if (figureEl.className.indexOf('swiper-slide-duplicate') > 0) {
                            continue;
                        } */

                        linkEl = figureEl.children[0]; // <a> element

                        size = linkEl.getAttribute('data-size').split('x');

                        // create slide object
                        item = {
                            src: linkEl.getAttribute('href'),
                            w: parseInt(size[0], 10),
                            h: parseInt(size[1], 10)
                        };



                        if (figureEl.children.length > 1) {
                            // <figcaption> content
                            item.title = figureEl.children[1].innerHTML;
                        }

                        if (linkEl.children.length > 0) {
                            // <img> thumbnail element, retrieving thumbnail url
                            item.msrc = linkEl.children[0].getAttribute('src');
                        }

                        item.el = figureEl; // save link to element for getThumbBoundsFn
                        items.push(item);
                    }

                    return items;
                };

                // find nearest parent element
                var closest = function closest(el, fn) {
                    return el && (fn(el) ? el : closest(el.parentNode, fn));
                };

                // triggers when user clicks on thumbnail
                var onThumbnailsClick = function(e) {
                    e = e || window.event;
                    e.preventDefault ? e.preventDefault() : e.returnValue = false;

                    var eTarget = e.target || e.srcElement;

                    // find root element of slide
                    var clickedListItem = closest(eTarget, function(el) {
                        return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                    });

                    if (!clickedListItem) {
                        return;
                    }

                    // find index of clicked item by looping through all child nodes
                    // alternatively, you may define index via data- attribute
                    var clickedGallery = clickedListItem.parentNode,
                        childNodes = clickedListItem.parentNode.childNodes,
                        numChildNodes = childNodes.length,
                        nodeIndex = 0,
                        index;

                    for (var i = 0; i < numChildNodes; i++) {
                        if (childNodes[i].nodeType !== 1) {
                            continue;
                        }

                        if (childNodes[i] === clickedListItem) {
                            index = nodeIndex;
                            break;
                        }
                        nodeIndex++;
                    }

                    if (index >= 0) {
                        // open PhotoSwipe if valid index found
                        openPhotoSwipe(index, clickedGallery);
                    }
                    return false;
                };

                // parse picture index and gallery index from URL (#&pid=1&gid=2)
                var photoswipeParseHash = function() {
                    var hash = window.location.hash.substring(1),
                        params = {};

                    if (hash.length < 5) {
                        return params;
                    }

                    var vars = hash.split('&');
                    for (var i = 0; i < vars.length; i++) {
                        if (!vars[i]) {
                            continue;
                        }
                        var pair = vars[i].split('=');
                        if (pair.length < 2) {
                            continue;
                        }
                        params[pair[0]] = pair[1];
                    }

                    if (params.gid) {
                        params.gid = parseInt(params.gid, 10);
                    }

                    return params;
                };

                var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                    $('body').addClass('photoSwipeOpen');
                    var pswpElement = document.querySelectorAll('.pswp')[0],
                        gallery,
                        options,
                        items;

                    items = parseThumbnailElements(galleryElement);

                    //index -= 1;
                    // define options (if needed)
                    options = {

                        // define gallery index (for URL)
                        galleryUID: galleryElement.getAttribute("data-pswp-uid"),

                        // getThumbBoundsFn: function(index) {
                        //     // See Options -> getThumbBoundsFn section of documentation for more info
                        //     var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                        //         pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        //         rect = thumbnail.getBoundingClientRect(); 

                        //     return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                        // },
                        showAnimationDuration: 0,
                        showHideOpacity: true,
                        getThumbBoundsFn: false

                    };

                    // PhotoSwipe opened from URL
                    if (fromURL) {
                        if (options.galleryPIDs) {
                            // parse real index when custom PIDs are used 
                            // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                            for (var j = 0; j < items.length; j++) {
                                if (items[j].pid == index) {
                                    options.index = j;
                                    break;
                                }
                            }
                        } else {
                            // in URL indexes start from 1
                            options.index = parseInt(index, 10) - 1;
                        }
                    } else {
                        options.index = parseInt(index, 10);
                    }

                    // exit if index not found
                    if (isNaN(options.index)) {
                        return;
                    }

                    if (disableAnimation) {
                        options.showAnimationDuration = 0;
                    }

                    // Pass data to PhotoSwipe and initialize it
                    gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                    gallery.init();

                    gallery.listen('close', function() {
                        $('body').removeClass('photoSwipeOpen');
                    });
                };

                // loop through all gallery elements and bind events
                var galleryElements = document.querySelectorAll(gallerySelector);

                for (var i = 0, l = galleryElements.length; i < l; i++) {
                    galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                    galleryElements[i].onclick = onThumbnailsClick;
                }

                // Parse URL and open gallery if it contains #&pid=3&gid=1
                var hashData = photoswipeParseHash();
                if (hashData.pid && hashData.gid) {
                    openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
                }
            };

            $('.hotspot').click(function() {
                return false;
            });

            // execute above function
            initPhotoSwipeFromDOMambients('.my-gallery');





            $(window).on('load', function() {
                var swiper = new Swiper('.swiper-ambients .swiper-container', {
                    centeredSlides: true,
                    spaceBetween: 5,
                    loop: true,
                    initialSlide: 99,
                    autoplay: false,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    disableOnInteraction: false,
                    slideToClickedSlide: false,
                    breakpoints: {
                        // when window width is >= 320px
                        100: {
                            slidesPerView: 1,
                            spaceBetween: 10
                        },
                        640: {
                            slidesPerView: 'auto',
                            spaceBetween: 5
                        }
                    }
                });
                initPhotoSwipeFromDOMambients('.my-gallery');
            });




            $('.print-on-click').click(function() {
                window.print();
            });


            var slideCount = $('.slideCount');
            var slickSlide = $('.product-slide');

            slickSlide.on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {
                //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
                var i = (currentSlide ? currentSlide : 0) + 1;
                $(this).find('.slideCount').html(
                    '<span class="slideCountItem" style="font-weight: normal;font-size:12px;">' + i +
                    '</span> ' + '<span style="font-weight: normal;font-size:12px;">-</span>' +
                    ' <span class="slideCountAll" style="font-weight: normal;font-size:12px;">' + slick
                    .slideCount + '</span>');
            });

            var slickMainFrame = {
                slidesToShow: 1,
                draggable: false,
                useTransform: false,
                asNavFor: '.product-slide--nav',
                nextArrow: '<span class="lnr lnr-chevron-right" style="font-size:20px;position: absolute;top: 50%;right: 20px;z-index: 99;cursor:pointer;"></span>',
                prevArrow: '<span class="lnr lnr-chevron-left" style="font-size:20px;position: absolute;top: 50%;left: 20px;z-index: 99;cursor:pointer;"></span>',
                autoplaySpeed: 4000,
                speed: 600
            };
            var slickNav = {
                slidesToShow: 5,
                useTransform: false,
                asNavFor: '.product-slide--details',
                focusOnSelect: true,
                vertical: true,
                verticalSwiping: false,
                arrows: true,
                nextArrow: '<span class="lnr lnr-chevron-down" style="font-size:20px;z-index: 99;cursor:pointer;"><i class="fas fa-angle-down"></i></span>',
                prevArrow: '<span class="lnr lnr-chevron-up" style="font-size:20px;z-index: 99;cursor:pointer;"><i class="fas fa-angle-up"></i></span>',

            };

            $('.product-slide--details').slick(slickMainFrame);

            $('.product-slide--nav').slick(slickNav);

            $('.product-slide--nav').on('wheel', (function(e) {
                e.preventDefault();

                if (e.originalEvent.deltaY < 0) {
                    $(this).slick('slickNext');
                } else {
                    $(this).slick('slickPrev');
                }
            }));

            $('.product-slide--press').slick({
                slidesToShow: 8,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                variableWidth: true,
                arrows: false,
            });

            $('.owl-more-products').owlCarousel({
                loop: true,
                margin: 0,
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
                        items: 2
                    }
                }
            });

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

            // var elm = $('.slider-nav '),
            //   getSlick = elm.slick('getSlick');

            // if (getSlick.slideCount <= getSlick.options.slidesToShow) {
            //   elm.addClass('slick-no-slide');
            // } else {
            //   elm.removeClass('slick-no-slide');
            // }

        });
    </script>
    <script>
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
    </script>
    @endsectionst buttons = document.querySelectorAll(".hotspot--cta");
    buttons.forEach(button => {
    button.addEventListener("click", selectHotspot);
    });
    })();
    </script>
    @endsection