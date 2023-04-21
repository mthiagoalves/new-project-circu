@extends('layouts.master-estilos') 
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
<meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" /> @endsection @section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
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
    /*** -------------- HOTSPOTS -------------- ***/
    /* slide1 */
    
    .hotspot--bun-van {
        top: 60%;
        right: 35%;
    }
    
    .hotspot--bun-van .hotspot--title {
        bottom: -15%;
        right: 105%;
    }
    
    .hotspot--bun-van-mobile {
        top: 60%;
        right: 35%;
    }
    
    .hotspot--diana-floor {
        top: 68%;
        left: 20%;
    }
    
    .hotspot--diana-floor .hotspot--title {
        bottom: -15%;
        left: 105%;
    }
    
    .hotspot--diana-floor-mobile {
        top: 63%;
        left: 10%;
    }
    /* fim slide1 */
    /* slide 2 */
    
    .hotspot--fantasy-air-balloon {
        top: 74%;
        left: 40%;
    }
    
    .hotspot--fantasy-air-balloon .hotspot--title {
        bottom: -15%;
        left: 105%;
    }
    
    .hotspot--fantasy-air-balloon-mobile {
        top: 74%;
        left: 40%;
    }
    
    .hotspot--cloud-shelf-big {
        top: 31%;
        right: 66%;
    }
    
    .hotspot--cloud-shelf-big .hotspot--title {
        top: 0%;
        right: 105%;
    }
    
    .hotspot--cloud-shelf-big-mobile {
        top: 43%;
        left: 22%;
    }
    
    .hotspot--little-cloud-nightstand {
        top: 75%;
        left: 66%;
    }
    
    .hotspot--little-cloud-nightstand .hotspot--title {
        bottom: -15%;
        right: 105%;
    }
    
    .hotspot--little-cloud-nightstand-mobile {
        top: 75%;
        left: 75%;
    }
    /* fimslide 2 */
    /* slide 3 */
    
    .hotspot--fantasy-air-bookcase-limited-edition {
        top: 25%;
        left: 12%;
    }
    
    .hotspot--fantasy-air-bookcase-limited-edition .hotspot--title {
        top: 18%;
        left: 105%;
    }
    
    .hotspot--fantasy-air-balloon-2 {
        top: 3%;
        left: 40%;
    }
    
    .hotspot--fantasy-air-balloon-2 .hotspot--title {
        top: -15%;
        left: 105%;
    }
    
    .hotspot--fantasy-air-balloon-mobile-2 {
        top: 17%;
        left: 32%;
    }
    
    .hotspot--fantasy-air-chest-3-drawers {
        bottom: 25%;
        right: 14%;
    }
    
    .hotspot--fantasy-air-chest-3-drawers .hotspot--title {
        bottom: 18%;
        right: 105%;
    }
    
    .hotspot--fantasy-air-chest-6-drawers {
        bottom: 29%;
        right: 8%;
    }
    
    .hotspot--fantasy-air-chest-6-drawers .hotspot--title {
        bottom: 18%;
        right: 105%;
    }
    /* fim slide 3 */
    /* slide 4 */
    
    .hotspot--cloud-bed {
        top: 35%;
        left: 30%;
    }
    
    .hotspot--cloud-bed .hotspot--title {
        top: -15%;
        left: 105%;
    }
    
    .hotspot--cloud-bed-mobile {
        top: 55%;
        left: 37%;
    }
    
    .hotspot--cloud-chest-6-drawers {
        top: 22%;
        left: 14%;
    }
    
    .hotspot--cloud-chest-6-drawers .hotspot--title {
        top: -15%;
        left: 105%;
    }
    
    .hotspot--cloud-chest-6-drawers-mobile {
        top: 59%;
        left: 7%;
    }
    
    .hotspot--cloud-chest-3-drawers {
        top: 47%;
        left: 65%;
    }
    
    .hotspot--cloud-chest-3-drawers .hotspot--title {
        top: -15%;
        left: 105%;
    }
    
    .hotspot--cloud-chest-3-drawers-mobile {
        top: 59%;
        right: 11%;
    }
    
    .hotspot--cloud-nightstand {
        top: 60%;
        left: 55%;
    }
    
    .hotspot--cloud-nightstand .hotspot--title {
        bottom: -60%;
        left: 105%;
    }
    
    .hotspot--cloud-nightstand-mobile {
        top: 66%;
        left: 63%;
    }
    /* fim slide4 */
    /*** -------------- FIM HOTSPOTS -------------- ***/
    
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
</style>
@endsection 
@section('main-content')

<div class="container-fluid pb-2" id="main-slide">
    <div class="row">
        <!-- SLIDE DESKTOP -->
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative d-none d-sm-block">
            <div class="item">
                <img src="/img/slides/main/modern-luxury-d.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
            </div>

            <div class="item">
                <a href="{{route('new-products')}}">
                    <img src="/img/slides/main/new-products-collection.jpg" width="1920" height="800" alt="New Products Collection" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
        </div>

        <!-- SLIDE MOBILE -->
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-block d-sm-none">
            <div class="item">
                <img src="/img/slides/main/modern-luxury-m.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid">
            </div>
            <div class="item">
                <a href="{{route('new-products')}}">
                    <img src="/img/slides/main/new-products-collection-mobile.jpg" width="552" height="432" alt="New Products Collection" class="cd-dot img-fluid">
                </a>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid pb-2">
    <p class="col-12 font-weight-bold m-0 text-center" style="font-family: 'RalewayMedium', sans-serif; text-transform: uppercase; font-size: 1.1rem; letter-spacing: 2px;padding: 0.5rem 2rem;color: #666666 !important;font-weight: normal;cursor: pointer;">
        OUR BEST SELLERS
    </p>
    <div class="row pt-2">
        @foreach ($products as $product)
        <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box element-item element-item-product">
            <div class="product_thumb py-4">
                <a href="{{ route('product', ['product' => $product->slug]) }}">
                    @if (file_exists('./img/products/thumbnails/' . $product->slug . '-circu-magical-furniture.png'))
                        <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png"
                            width="960" height="800" class="img-fluid">
                    @else
                        <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif"
                            width="960" height="800" class="img-fluid">
                    @endif

                    <div class="product--title">
                        <span class="name">{{ $product->name }}</span>
                        <br class="d-block d-md-none">
                        <span
                            class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
                    </div>
                </a>
                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable"
                            href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>

                @if (($product->is_new && $product->slug == 'bubble-gum-bed') || $product->slug == 'bubble-gum-bench' || $product->slug == 'bubble-gum-dressing-table' || $product->slug == 'bubble-gum-chest-3-drawers' || $product->slug == 'bubble-gum-chest-2-drawers' || $product->slug == 'bubble-gum-desk' || $product->slug == 'bubble-slide' || $product->slug == 'bubble-loop' || $product->slug == 'bubble-drop' || $product->slug == 'bubble-gum-playground' || $product->slug == 'bubble-gum-big-mirror' || $product->slug == 'bubble-gum-small-mirror' || $product->slug == 'cotton-candy-sofa' || $product->slug == 'rainbow-sofa')
                    <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                        <img src="/img/icons/product-new-collection.png">
                    </div>
                @elseif($product->is_new)
                    <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                        <img src="/img/icons/product-new.png">
                    </div>
                @endif

                <div class="product-box--content d-none d-md-block">
                    @if ($product->product_samples->count() > 1 && $product->slug != 'dainty-armchair')
                        <div class="col-12 slider-for text-center">
                            @foreach ($product->product_samples as $product_sample)
                                <div>
                                    <a href="{{ route('product', ['product' => $product->slug]) }}">
                                        <img src="/img/products/{{ $product->slug }}/finishes/{{ $product->slug }}-circu-magical-furniture-{{ $product_sample->sample->slug }}.png"
                                            width="960" height="800" alt="" class="img-fluid">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-12 product-samples slider-nav text-center p-0">
                            @foreach ($product->product_samples as $product_sample)
                                @if ($product_sample->is_options == null)
                                    <div class="d-inline text-center">
                                        <img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png"
                                            width="20" height="20" alt="" class="img-fluid">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @else
                        <div>
                            <a href="{{ route('product', ['product' => $product->slug]) }}">
                                <img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg"
                                    width="500" height="420" alt="" class="img-fluid">
                            </a>
                        </div>
                    @endif
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable"
                                href="{{ route('modal-product-price', ['name' => $product->slug]) }}"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
    <div class="col-12 text-center pt-2">
        <div class="col-12 clearfix position-relative p-0">
            <div class="slideToggle">
                <a class="btn-green-underline mt-0" href="https://circu.net/products"><span><b>SEE ALL PRODUCTS</b></span></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-2 d-none d-md-block">
    <p class="col-12 font-weight-bold m-0 text-center" style="font-family: 'RalewayMedium', sans-serif; text-transform: uppercase; font-size: 1.1rem; letter-spacing: 2px;padding: 0.5rem 2rem;color: #666666 !important;font-weight: normal;cursor: pointer;">
        ROOM BY ROOM INSPIRATIONS
    </p>
    <div class="row d-none d-md-block">
        <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme p-0">
            <div class="item col-12 p-0 position-relative">
                <img src="/img/slides/home-ambiences/candyland-playroom-banner.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">
                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 34%;left: 32%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/bubble-gum-gym">
                            <img src="/img/products/carousel/bubble-gum-gym-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>BUBBLE GUM</b> GYM</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">AMIK Table Lamp reminds of a lacquered piece of wood scooped by beaver teeth. This unique accent lamp fits perfectly as a bedside table light or as living room lighting.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-gym'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="item col-12 p-0 position-relative">
                <img src="/img/slides/home-ambiences/an-undersea-adventure-by-bymura-banner.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">



                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 34%;left: 81%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/amik-table-lamp">
                            <img src="/img/products/carousel/amik-table-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>AMIK</b> TABLE LAMP</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">AMIK Table Lamp reminds of a lacquered piece of wood scooped by beaver teeth. This unique accent lamp fits perfectly as a bedside table light or as living room lighting.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'amik-table-lamp'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 69%;left: 65%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: -40%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/tristen-bed">
                            <img src="/img/products/carousel/tristen-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>TRISTEN</b> BED</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the movie Atlantics, this one of a kind bed was made to shape comfort and to keep your little one's dreams safe and sound while he/she travels through their imagination at night.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'tristen-bed'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 28%;left: 29%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top: -105%;right: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-dressing-table-vanity-console">
                            <img src="/img/products/carousel/cloud-dressing-table-vanity-console-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>CLOUD VANITY</b> CONSOLE</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Cloud Vanity Console is the ideal dressing table for a magical-inspired bedroom. Its original cloud-shaped form has unique details that were specially made to make little girls feel like true princesses living in a fairytale.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-dressing-table-vanity-console'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 81%;left: 37%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: -10%;right: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/the-whales-tale-rug">
                            <img src="/img/products/carousel/the-whales-tale-rug-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>THE WHALE’S TALE</b> RUG</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">This rug was inspired by kids' favorite tales about the ocean and about the whales. These amazing animals are known to be history keepers and they symbolize emotional and peaceful strength.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'the-whales-tale-rug'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>
                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 54%;left: 35%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: -105%;right: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/little-mermaid-chair">
                            <img src="/img/products/carousel/little-mermaid-chair-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>LITTLE MERMAID</b> CHAIR</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the iconic Disney's princess Ariel and her undersea kingdom, the Little Mermaid Chair is a unique item that will highlight the decor of any girl's room.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-mermaid-chair'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="item col-12 p-0 position-relative">
                <img src="/img/slides/home-ambiences/an-outer-space-mission-room.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 19%;left: 41%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top: -10%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-bed">
                            <img src="/img/products/carousel/cloud-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>CLOUD</b> BED</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Its cloud-shaped form is only one of the details that make this piece whimsical and a perfect item for any bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 29%;left: 23%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top: -80%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/diana-table-lamp">
                            <img src="/img/products/carousel/diana-table-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>DIANA</b> TABLE LAMP</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Diana is a vintage table lamp inspired by some of the greatest design classics of the mid-century era. It is a handmade lamp built with materials such as brass and aluminum.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'diana-table-lamp'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 63%;left: 75%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: -10%;right: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/little-cloud-nightstand">
                            <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>LITTLE COULD</b> NIGHTSTAND</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="item col-12 p-0 position-relative">
                <img src="/img/slides/home-ambiences/our-magical-room-jungle-1.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 61%;left: 48%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/tristen-bed">
                            <img src="/img/products/carousel/tristen-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>TRISTEN</b> BED</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the movie Atlantics, this one of a kind bed was made to shape comfort and to keep your little one's dreams safe and sound while he/she travels through their imagination at night.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'tristen-bed'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 58%;left: 33%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/little-cloud-nightstand">
                            <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>LITTLE CLOUD</b> NIGHTSTAND</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration. </div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 65%;left: 19%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="bottom: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/illusion-chair-leopard">
                            <img src="/img/products/carousel/illusion-chair-leopard-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>ILLUSION LEOPARD</b> CHAIR</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Illusion Series brings a touch of magic to the children's playroom decor. This kids’ furniture set includes a table, a stool, and a chair.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-chair-leopard'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">This kids’ teepee is a playroom inspired by the traditional indigenous tents. The Teepee Playground has a playful design.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'teepee-playground'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="item col-12 p-0 position-relative">
                <img src="/img/slides/home-ambiences/our-magical-room-spaceman-1.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 9%;left: 53%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/rocky-rocket">
                            <img src="/img/products/carousel/rocky-rocket-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>ROCKY ROCKET</b> SOFA / CHAIR</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Rocky Rocket it’s a children’s interactive chair, that will be the perfect addition to any kid's play area.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'rocky-rocket'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <div class="hotspot hotspot--title__left d-none d-lg-block" style="top: 21%;left: 13%;">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center" style="top: 18%;left: 105%;">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/puzzled-bookcase-desk">
                            <img src="/img/products/carousel/puzzled-bookcase-desk-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>PUZZLED</b> BOOKCASE | DESK</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Inspired by geometric spaces and with the drive and passion to create a piece where kids can explore their imagination and allow the dreams to get out of the box.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'puzzled-bookcase-desk'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="item col-12 p-0 position-relative">
                <img src="/img/slides/home-ambiences/our-magical-room-spaceman-2.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div class="hotspot hotspot--atomic-wall-lamp hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/atomic-wall-lamp">
                            <img src="/img/products/carousel/atomic-wall-lamp-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>ATOMIC</b> WALL LAMP</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Atomic wall light is a mid-century modern lighting design inspired by the atomic discoveries of the mid-20th century.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'atomic-wall-lamp'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">Inspired by the galaxy’s constellations, the Stellar Rug is the ideal piece for the little space adventures who love to look up to the sky every night and count the stars.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'stellar-round-rug'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">The Sky Nightstand is a kids’ small chest of drawers inspired by the Disney movie “Planes” and it is the perfect storage item for your aviation inspired bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'sky-nightstand'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="item col-12 p-0 position-relative">
                <img src="/img/slides/home-ambiences/our-magical-boy-room.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div class="hotspot hotspot--cloud-6-drawers hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-mirror">
                            <img src="/img/products/carousel/cloud-mirror-blue-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> Mirror</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">This exquisite mirror is the perfect piece of decoration that will embellish any children’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-mirror'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-6-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-mirror">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-bed hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-bed">
                            <img src="/img/products/carousel/cloud-bed-blue-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> Bed</div>
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-bed d-block d-lg-none" href="https://www.circu.net/products/cloud-bed">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-shelf-big">
                            <img src="/img/products/carousel/cloud-shelf-big-blue-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud Big</b> Shelf</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">With a creative and playful design, this Cloud Shelf aims to reinforce the connection between children and imagination.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-shelf-big'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-shelf-big">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--animal-stool-shark hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/animal-stool-shark">
                            <img src="/img/products/carousel/animal-stool-shark-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Animal Shark</b> Stool</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Animal Stools collection owns an exclusive design that promises to awaken children's friendship with animals.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'animal-stool-shark'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/animal-stool-shark">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--little-cloud-nightstand hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/little-cloud-nightstand">
                            <img src="/img/products/carousel/little-cloud-nightstand-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Little Cloud</b> Nightstand</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">The Little Cloud Nightstand is a kids’ furniture product inspired by Pixar’s Short film “Partly Cloudy” and it is the perfect storage item for dreamy bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'little-cloud-nightstand'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--little-cloud-nightstand d-block d-lg-none" href="https://www.circu.net/products/little-cloud-nightstand">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-nightstand hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-nightstand">
                            <img src="/img/products/carousel/cloud-nightstand-white-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> Nightstand</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">Cloud NightStand is a kids’ furniture product inspired by Pixar’s Short film “Party Cloud” and it is the perfect storage item for dreamy bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-nightstand'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-nightstand d-block d-lg-none" href="https://www.circu.net/products/cloud-nightstand">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

            </div>

            <div class="item col-12 p-0 position-relative">
                <img src="/img/slides/home-ambiences/our-magical-girl-room.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div class="hotspot hotspot--cloud-6-drawers hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-mirror">
                            <img src="/img/products/carousel/cloud-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> Mirror</div>
                            <div class="hotspot-description my-2 d-none d-lg-block">This exquisite mirror is the perfect piece of decoration that will embellish any children’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-mirror'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">With a creative and playful design, this Cloud Shelf aims to reinforce the connection between children and imagination.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-shelf-big'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">Cloud Chest of drawers is inspired by Pixar short-film “Party Cloud”, and it's the perfect storage item for whimsical bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-6-drawers'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">Gold Box is a luxurious kids’ toy box inspired by the fine gold bar shape. Inspired by the adventures of Scrooge McDuck, the richest duck in the world.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'gold-box'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">The Cloud Puff promises to awaken your children's imagination and increase their creativity.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-stool-puff'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">The Cloud Seat promises to awaken your children's imagination and increase their creativity.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bench-2-seat'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block">Cloud NightStand is a kids’ furniture product inspired by Pixar’s Short film “Party Cloud” and it is the perfect storage item for dreamy bedroom decoration.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-nightstand'] )}}">
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
                <img src="/img/slides/home-ambiences/cloud-collection-circu-magical-collection.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div class="hotspot hotspot--cloud-6-drawers hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-chest-6-drawers">
                            <img src="/img/products/carousel/cloud-chest-6-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> 6 Drawers</div>
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-6-drawers'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-6-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-6-drawers">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-bed hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-bed">
                            <img src="/img/products/carousel/cloud-bed-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> Bed</div>
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-bed'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-bed d-block d-lg-none" href="https://www.circu.net/products/cloud-bed">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>

                <div class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/cloud-chest-3-drawers">
                            <img src="/img/products/carousel/cloud-chest-3-drawers-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Cloud</b> 3 Drawers</div>
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Cloud Room collection aims to offer you the solution to a never-ending problem: a complete, high-quality design for a child’s bedroom.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cloud-chest-3-drawers'] )}}">
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
                <img src="/img/slides/home-ambiences/playground-circu-magical-furniture.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div style="top: 32%;right: 52%;" class="hotspot hotspot--fantasy-air-balloon hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/bubble-gum-big-mirror">
                            <img src="/img/products/carousel/bubble-gum-big-mirror-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>BUBBLE GUM BIG</b> mirror</div>
                            <div class="hotspot-description my-2"> The Bubble Gum Big Mirror is the accessory you need to embellish any children's bedroom. With its elegant design inspired by the fun shapes of the kid's favorite candies.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-big-mirror'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Rocky Rocket it’s a children’s interactive chair, painted in red and white checkered pattern.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'rocky-rocket'] )}}">
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
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Bubble Gum Gym is going to bring magic and playfulness to your kid's playroom!</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'bubble-gum-gym'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--cloud-3-drawers d-block d-lg-none" href="https://www.circu.net/products/cloud-chest-3-drawers">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
                <!-- <div style="top: 70%;left: 71%;" class="hotspot hotspot--cloud-3-drawers hotspot--title__left d-none d-lg-block">
          
          <div class="hotspot--cta"></div>
          <div class="hotspot--title text-center" style="top:-200px">
            <div class="close-hotspot">X</div>
            <a href="https://www.circu.net/products/illusion-table">
              <img src="/img/products/carousel/illusion-table-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
              <div class="hotspot-name"><b>ILLUSION</b> TABLE</div>
              <div class="hotspot-description my-2 d-none d-lg-block"> The Illusion Series brings a touch of magic to the children's playroomdecor. </div>
            </a>
            <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'illusion-table'] )}}">
              <div class="hotspot-get-price"><span>GET PRICE</span></div>
            </a>
          </div>
        </div> -->

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
                            <div class="hotspot-description my-2 d-none d-lg-block"> The Cotton Candy Sofa will add sweetness and playfulness to you bedroom design.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'cotton-candy-sofa'] )}}">
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
                <img src="/img/slides/home-ambiences/kings-and-queens-room.jpg" width="1920" height="700" class="cd-dot img-fluid" alt="">

                <div class="hotspot hotspot--kings-and-queens hotspot--title__left d-none d-lg-block">
                    <!-- desktop -->
                    <div class="hotspot--cta"></div>
                    <div class="hotspot--title text-center">
                        <div class="close-hotspot">X</div>
                        <a href="https://www.circu.net/products/kings-and-queens-castle">
                            <img src="/img/products/carousel/kings-and-queens-castle-circu-magical-furniture.jpg" width="364" height="380" class="img-fluid hotspot-img">
                            <div class="hotspot-name"><b>Kings & Queens</b> Castle</div>
                            <div class="hotspot-description my-2"> Kings and Queens Castle is made entirely by hand with noble materials of great quality, it follows a modular system.</div>
                        </a>
                        <a rel="modal:open" href="{{route('modal-product-price', ['name' => 'kings-and-queens-castle'] )}}">
                            <div class="hotspot-get-price"><span>GET PRICE</span></div>
                        </a>
                    </div>
                </div>

                <a class="hotspot hotspot--kings-and-queens d-block d-lg-none" href="https://www.circu.net/products/kings-and-queens-castle">
                    <!-- mobile -->
                    <span class="hotspot--cta"></span>
                </a>
            </div>





        </div>
    </div>
</div>
<div class="container-fluid my-3" style="background-color:#d4a9a0;">
    <div class="row">
        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    @include('includes.middle.form-ebook-new')
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/img/new-products-2022.gif" width="992" height="500" alt="New Products 2022 Ebook Circu Kid's Luxury Furniture"class="img-fluid d-none d-sm-block">
                    <img src="/img/new-products-2022-mobile.gif" width="524" height="264" alt="New Products 2022 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.menu-visual-new')
<div class="container-fluid pt-3">
    <p class="col-12 font-weight-bold m-0 text-center" style="font-family: 'RalewayMedium', sans-serif; text-transform: uppercase; font-size: 1.1rem; letter-spacing: 2px;padding: 0.5rem 2rem;color: #666666 !important;font-weight: normal;cursor: pointer;">
        you may also like
    </p>
    <div class="row pt-2">
        <div class="col-12 col-lg-4 p-0">
            <a href="{{ route('stocklist') }}">
                <img src="/img/pag-styles/modern-luxury/stocklist.jpg" alt="New Products New Collection" class="img-fluid w-100">
            </a>
        </div>
        <div class="col-12 col-lg-4 p-0">
            <a href="https://www.circu.net/ebook/summer-sale">
                <img src="/img/pag-styles/modern-luxury/summer-sale.jpg" alt="Summer Sales Stocklist Circu" class="img-fluid w-100">
            </a>
        </div>
        <div class="col-12 col-lg-4 p-0">
            <a href="https://circu.net/ebook/new-products-2022">
                <img src="/img/pag-styles/modern-luxury/ebook-new-products.gif" alt="New Products New Collection" class="img-fluid w-100">
            </a>
        </div>
    </div>
</div>
<!-- end container -->
@endsection 
@section('footer-includes')
<script src="https://www.maisonvalentina.net/en/jquery/jquery-cookie/jquery.cookie.js "></script>
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
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
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
        navText: ["<i class='fas fa-chevron-left p-0 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 arrow-banners'></i>"],
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

    $('.owl-projects').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
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