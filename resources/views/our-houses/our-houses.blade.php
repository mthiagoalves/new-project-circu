@extends('layouts.master')
@section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="https://www.circu.net" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection

@section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
    h2.category_name_title,
    .category_name_title {
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 1.1rem;
        letter-spacing: 2px;
        padding: 0.5rem 2rem;
        color: #9fbfbc !important;
        font-weight: normal;
        cursor: auto !important;
    }

    h2.category_name_title span {
        padding: 0 15px;
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
        /*display: block;*/
    }

    .product--title .sub_category {
        text-transform: lowercase;
        /*display: block;*/
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
        display: inline-block !important;
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

    .owl-carousel .owl-dots.disabled,
    .owl-carousel .owl-nav.disabled {
        display: block !important;
    }

    .horizontal {
        width: 60% !important;
    }

    .vertical {
        width: 20% !important;
    }

    .form-ebook-interior-designers-middle-banner .input-block {
        margin: 0px 0px 0.4rem !important;
        width: 100%;
    }

    @media (max-width:1200px) {
        .title-form-acess {
            text-align: center !important;
        }

        .title-form-acess h1 {
            font-size: 14px !important;
        }

        .text-1-title {
            text-transform: uppercase;
            color: white;
            font-size: 17px;
            font-weight: bold;
            text-align: center;
        }

        .text-2-title {
            text-transform: inherit;
            color: white;
            font-size: 13px;
            text-align-last: center;
        }

        .text-3-title {
            text-transform: uppercase;
            color: white;
            font-size: 11px;
            font-weight: bold;
            text-align: center;
        }
    }

    .text-1-title {
        text-transform: uppercase;
        color: white;
        font-size: 17px;
        font-weight: bold;
    }

    .text-2-title {
        text-transform: inherit;
        color: white;
        font-size: 13px;
    }

    .text-3-title {
        text-transform: uppercase;
        color: white;
        font-size: 11px;
        font-weight: bold;
    }

    h2.category_name_room_title {
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 1.1rem;
        letter-spacing: 2px;
        padding: 0.5rem 2rem;
        color: #9fbfbc !important;
        font-weight: normal;
        cursor: pointer !important;
    }

    h2.category_name_room_subtitle {
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 0.7rem;
        letter-spacing: 2px;
        padding: 0.5rem 2rem;
        color: #9fbfbc !important;
        font-weight: normal;
        cursor: pointer !important;
    }

    @media (min-width:1100px) {
        .title-form-acess {
            text-align: left !important;
        }

        .title-form-acess h1 {
            font-size: 22px !important;
        }

        .div-form-ourhouses {
            padding-right: 5rem !important;
            padding-left: 5rem !important;
        }

        .div-form-ourhouses .div-button-submit {
            position: absolute !important;
        }

        .div-text-banner-center-paddings {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }
    }

    .btn-form-acess {
        margin: 0px;
        color: #ffffff !important;
        line-height: 22px;
        font-size: 12px;
        font-weight: normal;
        letter-spacing: 1px;
        text-transform: uppercase;
        float: none !important;
        text-align: center;
    }

    .btn-video {
        background-color: rgb(255, 255, 255, 0.9);
        padding: 7px 30px;
        color: #a9c6c3;
        letter-spacing: 2px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
        cursor: pointer;
    }

    .btn-video-playroom {
        padding: 7px 30px;
        color: white;
        letter-spacing: 2px;
        font-size: 0.85rem;
        font-weight: bold;
        display: inline-block;
    }

    /* linha de produtos */
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

    /* linha de produtos */
</style>
@endsection

@section('main-content')
<div class="container-fluid p-0">
    <div class="row m-0 p-0">
        <div class="col-12 p-0 d-none d-md-block">
            <video width="100%" height="auto" onloadeddata="this.play();" autoplay="" muted="" loop="" playsinline="">
                <source src="/img/our-houses/our-house-d.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-12 p-0 d-block d-md-none">
            <video width="100%" height="auto" onloadeddata="this.play();" autoplay="" muted="" loop="" playsinline="">
                <source src="/img/our-houses/our-house-m.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>
<div class="container-fluid p-0 pt-2 ">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>INSIDE EVERY CHILD'S DREAM BEDROOM</span></h2>
    </div>
</div>
@if(Session::has('user-login')) . @endif
<div class="container-fluid my-2 " style="background-color:#f7f7f7;">
    <div class="row m-0 p-0">
        <div class="col-12 p-0">
            <div class="row">
                <div class="col-12 col-md-7 p-0">
                    <img src="/img/our-houses/banner-text.jpg" class="img-fluid img-height d-none d-md-block" style="width: 100%;">
                    <img src="/img/our-houses/banner-text-m.jpg" class="img-fluid img-height-mobile d-block d-md-none" style="width: 100%;">
                    <div class="col-12 p-0 px-5 position-absolute " style="top:0;left:0;height: 100%;">
                        <div class="row m-0 p-0 justify-content-center align-items-center div-text-banner-center" style="height: 100%;">
                            <div class="col-12 p-0 div-text-banner-center-paddings">
                                <div class="col-12 p-0">
                                    <p class="text-1-title">Magical bedroom design ideas for Little Girls and Boys.</p>
                                </div>
                                <div class="col-12 p-0">
                                    <p class="text-2-title">These bedrooms are the first of a series of magical kids bedroom and playground design ideas, because creating the stuff dreams are made of and turn every child's fantasy into reality is our passion. As it is inspiring adults to achieve their kids' fantasy and create the room they wished they had when they were little. For boys, girls or gender neutral, we create both the most functional and the most out of the box Designs, where every detail is customizable! A Designer will guide you through these magical playgrounds and transform your own dreams into reality.</p>
                                </div>
                                <div class="col-12 p-0">
                                    <p class="text-3-title">Book your virtual tour now</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-5 p-4 p-md-0 div-form-ourhouses section-form">
                    @include('includes.middle.form-access-our-houses')
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 ">
    <div class="row m-0 p-0">
        <div class="col-12 p-0">
            <div class="col-12 col-md-4 p-0 float-left boy-room" style="cursor:pointer;">
                <img src="/img/our-houses/rooms/boy-room.jpg" class="img-fluid" style="width: 100%;">
                <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                    <h2 class="col-12 category_name_room_title text-center mb-0 pb-0" style="color:white !important; "><span>LITTLE-BOY BEDROOM</span></h2>
                    <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>VIEW MORE ></span></h2>
                </div>
            </div>
            <div class="col-12 col-md-4 p-0 float-left girl-room" style="cursor:pointer;">
                <img src="/img/our-houses/rooms/girl-room.jpg" class="img-fluid" style="width: 100%;">
                <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                    <h2 class="col-12 category_name_room_title text-center mb-0 pb-0" style="color:white !important; "><span>LITTLE-GIRL BEDROOM</span></h2>
                    <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>VIEW MORE ></span></h2>
                </div>
            </div>
            <div class="col-12 col-md-4 p-0 float-left covet-room" style="cursor:pointer;">
                <img src="/img/our-houses/rooms/kids-room.jpg" class="img-fluid" style="width: 100%;">
                <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                    <h2 class="col-12 category_name_room_title text-center mb-0 pb-0" style="color:white !important; "><span>KID BEDROOM</span></h2>
                    <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>VIEW MORE ></span></h2>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid p-0 my-2 d-none d-md-block">
    <div class="row p-0 m-0">
        <div class="col-12 owl-ambients owl-carousel owl-slide owl-theme p-0 position-relative">

            <div class="item col-12 p-0">

                <div class="col-12 col-md-3 p-0 float-left">
                    <img src="/img/our-houses/slide/desktop/boy-1.jpg" class="img-fluid" style="width: 100%;">
                </div>
                <div class="col-12 col-md-3 p-0 float-left">
                    <img src="/img/our-houses/slide/desktop/boy-2.jpg" class="img-fluid" style="width: 100%;">
                </div>
                <div class="col-12 col-md-6 p-0 float-left">
                    <img src="/img/our-houses/slide/desktop/boy-3.jpg" class="img-fluid" style="width: 100%;">
                </div>
            </div>
            <div class="item col-12 p-0">
                <div class="col-12 col-md-6 p-0 float-left">
                    <img src="/img/our-houses/slide/desktop/girl-1.jpg" class="img-fluid" style="width: 100%;">
                </div>
                <div class="col-12 col-md-3 p-0 float-left">
                    <img src="/img/our-houses/slide/desktop/girl-2.jpg" class="img-fluid" style="width: 100%;">
                </div>
                <div class="col-12 col-md-3 p-0 float-left">
                    <img src="/img/our-houses/slide/desktop/girl-3.jpg" class="img-fluid" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 my-2 d-block d-md-none">
    <div class="row p-0 m-0">
        <div class="col-12 owl-ambients owl-carousel owl-slide owl-theme p-0 position-relative">
            <div class="item col-12 p-0">
                <img src="/img/our-houses/slide/mobile/1.jpg" class="img-fluid" style="width: 100%;">
            </div>
            <div class="item col-12 p-0">
                <img src="/img/our-houses/slide/mobile/2.jpg" class="img-fluid" style="width: 100%;">
            </div>
            <div class="item col-12 p-0">
                <img src="/img/our-houses/slide/mobile/3.jpg" class="img-fluid" style="width: 100%;">
            </div>
            <div class="item col-12 p-0">
                <img src="/img/our-houses/slide/mobile/4.jpg" class="img-fluid" style="width: 100%;">
            </div>
            <div class="item col-12 p-0">
                <img src="/img/our-houses/slide/mobile/5.jpg" class="img-fluid" style="width: 100%;">
            </div>
            <div class="item col-12 p-0">
                <img src="/img/our-houses/slide/mobile/6.jpg" class="img-fluid" style="width: 100%;">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 pt-2">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>OUR MAGICAL PIECES</span></h2>
    </div>
</div>
<div class="container-fluid p-0">
    <div class="col-12 owl-products owl-carousel owl-slide owl-theme p-0 position-relative">
        @foreach($all_products as $key => $category)
        @foreach($category as $product)
        @if($product->slug == 'cloud-bed' || $product->slug == 'cloud-lamp-big' || $product->slug == 'cloud-lamp-small' || $product->slug == 'bun-van' || $product->slug == 'cloud-shelf-small' || $product->slug == 'cloud-shelf-big' || $product->slug == 'gold-box' || $product->slug == 'cloud-nightstand' || $product->slug == 'cloud-dressing-table-vanity-console' || $product->slug == 'cloud-stool-puff' || $product->slug == 'cloud-chest-6-drawers' || $product->slug == 'fantasy-air-nightstand' || $product->slug == 'cloud-mirror' || $product->slug == 'fantasy-air-nightstand' || $product->slug == 'fantasy-air-bookcase-limited-edition' || $product->slug == 'diana-table-lamp' || $product->slug == 'magical-mirror' || $product->slug == 'magical-mirror-blue' || $product->slug == 'cloud-lamp-big' || $product->slug == 'cloud-lamp-small' || $product->slug == 'nodo-suspension-chair' || $product->slug == 'cloud-sofa' || $product->slug == 'fantasy-air-shelf-small' || $product->slug == 'animal-stool-elephant' || $product->slug == 'animal-stool-bird' || $product->slug == 'cloud-bench-2-seat' || $product->slug == 'illusion-table' || $product->slug == 'illusion-chair-white-bear' || $product->slug == 'illusion-chair-leopard' || $product->slug == 'illusion-stool-white-bear' || $product->slug == 'fantasy-air-shelf-big' || $product->slug == 'fantasy-air-shelf-small' || $product->slug == 'little-cloud-nightstand' || $product->slug == 'animal-stool-shark' || $product->slug == 'fantasy-air-chest-3-drawers' || $product->slug == 'dream-desk' || $product->slug == 'letter-a-graphic-collection' || $product->slug == 'moon-rug' || $product->slug == 'puzzled-bookcase-desk')
        <div class="item col-12 product-box float-left">
            <div class="product_thumb py-4">
                @if(file_exists('./img/products/thumbnails/'.$product->slug.'-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @else
                <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                @endif

                <div class="product--title">
                    <span class="name">{{ $product->name }}</span>
                    <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>

                @if( $product->is_new && ($product->slug == "bubble-gum-bed") || ($product->slug == "bubble-gum-bench") || ($product->slug == "bubble-gum-dressing-table") || ($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-chest-2-drawers") || ($product->slug == "bubble-gum-desk") || ($product->slug == "bubble-slide") || ($product->slug == "bubble-drop") || ($product->slug == "bubble-loop") || ($product->slug =="bubble-gum-playground") || ($product->slug == "bubble-gum-big-mirror") || ($product->slug == "bubble-gum-small-mirror") || ($product->slug == "cotton-candy-sofa") || ($product->slug == "rainbow-sofa"))
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new-collection.png">
                </div>

                @endif

                <div class="product-box--content">
                    @if($product->product_samples->count() > 0 && $product->slug != 'dainty-armchair')
                    <div class="col-12 slider-for text-center">
                        @foreach($product->product_samples as $product_sample)
                        <div>
                            <a href="{{ route('product', ['product' => $product->slug]) }}">
                                <img src="/img/products/{{ $product->slug }}/finishes/{{ $product->slug }}-circu-magical-furniture-{{$product_sample->sample->slug}}.png" width="960" height="800" alt="" class="img-fluid">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 product-samples slider-nav text-center p-0">
                        @foreach($product->product_samples as $product_sample)
                        <div class="d-inline text-center px-1">
                            <img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid" style="width: 20px;height: 20px;">
                        </div>
                        @endforeach
                    </div>

                    @else
                    <div>
                        <a href="{{ route('product', ['product' => $product->slug]) }}">
                            <img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                        </a>
                    </div>
                    @endif
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endif
        @endforeach
        @endforeach


    </div>
</div>

<div class="container-fluid pt-2" style="clear:both;">
    <div class="row pb-2">

        <div class="col-12 col-lg-8 p-0 d-block d-lg-none">
            <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-1">
                <div class="row">
                    <div class="col-12 col-lg-6 p-0">
                        <img src="/img/our-houses/banner-form-ebook-m1.jpg" alt="Ebook Circu Kid's Luxury Furniture" style="width: 100%;" class="img-fluid text-center">
                        <div class="col-12 position-absolute" style="top: 50%;transform: translate(0, -35%);">
                            @include('our-houses.form-new-ebook')
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8 p-0 d-none d-lg-block ">
            <div class="col-12 p-0 ">
                <img src="/img/our-houses/banner-form-ebook.jpg" style="width:100%;height:100%;" class="img-fluid d-none d-lg-block">
            </div>
            <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%; transform: translate(0,-50%);">
                @include('our-houses.form-new-ebook')
            </div>
        </div>
        <div class="col-12 col-lg-4 p-0 ">
            <a rel="modal:open" href="{{route('modal-download-pricelist-our-houses')}}">
                <img src="/img/our-houses/banner-pricelist.jpg" alt="New Catalogue 2021" class="img-fluid img-size-form" style="width:100%;height:100%;">
            </a>
        </div>
    </div>
</div>
@include('includes.menu-visual-new')
@endsection

@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript">
    $('#form-ourhouses').click(function() {
        console.log('asd');
        $('#form-acess-rooms').parsley().validate();
        console.log($('#form-acess-rooms').parsley().isValid());
        if ($('#form-acess-rooms').parsley().isValid() == true) {
            $(this).attr('rel', 'modal:open').attr('href', '{{ route("modal-our-houses") }}');
        } else {
            $(this).attr('rel', '').removeAttr('href');
        }
    });

    $(window).load(function() {
        @if(Session::has('thank_you_note'))
        // setTimeout(function() {
        //     $('#form-ourhouses').click();
        // }, 1000);
        @endif
    });




    $('.owl-ambients').owlCarousel({
        loop: true,
        margin: 5,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
        responsive: {
            0: {
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
        navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"],
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

    $('.owl-products').owlCarousel({
        loop: true,
        margin: 1,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"],
        autoplay: false,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            768: {
                items: 4,
                nav: true
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

    var elm = $('.slider-nav '),
        getSlick = elm.slick('getSlick');

    if (getSlick.slideCount <= getSlick.options.slidesToShow) {
        elm.addClass('slick-no-slide');
    } else {
        elm.removeClass('slick-no-slide');
    }

    $(document).on('click', '.boy-room', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
        }, 1000);
    });

    $(document).on('click', '.girl-room', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
        }, 1000);
    });

    $(document).on('click', '.covet-room', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
        }, 1000);
    });

    $(window).ready(function() {

        var uh = $('.topbar').height(),
            lh = $('.downbar').height(),
            hh = uh + lh,
            hhm = $('.downbar').height(),
            wh = $(window).height(),
            ww = $(window).width(),
            wh2 = $(window).height() / 2;

        if (ww < 920) {
            $('.div-text-banner-center').css('height', $('.img-height-mobile').height());
        } else {
            $('.form-catlogue-r').css('height', $('.img-size-form').height());
            $('.heigh-div-form-image').css('height', $('.heigh-div-form').height());

        }

    });

    $(window).resize(function() {

        var uh = $('.topbar').height(),
            lh = $('.downbar').height(),
            hh = uh + lh,
            hhm = $('.downbar').height(),
            wh = $(window).height(),
            ww = $(window).width(),
            wh2 = $(window).height() / 2;

        if (ww < 920) {
            $('.div-text-banner-center').css('height', $('.img-height-mobile').height());
        } else {
            $('.form-catlogue-r').css('height', $('.img-size-form').height());
            $('.heigh-div-form-image').css('height', $('.heigh-div-form').height());

        }

    });

    $(".country-ebook").change(function() {
        var selected_option = $(this).val();
        if (selected_option === 'United States') {
            $('.state-ebook').removeClass('d-none').children().attr('data-parsley-required', 'true');
        }
        if (selected_option != 'United States') {
            $('.state-ebook').addClass('d-none').children().attr('data-parsley-required', 'false');
        }
    });
</script>

@endsection