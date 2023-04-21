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
<link rel="stylesheet" href="https://www.luxxu.net/css/swiper.min.css">
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

    @media (min-width: 768px) {
        .px-md-10 {
            padding-left: 10rem !important;
            padding-right: 10rem !important;
        }
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

    .text-hover-image {
        transform: translate(-50%, 0px);
        background-color: white;
        width: 75%;
        text-align: center;
    }



    @media (min-width:1370px) {
        .text-hover-image .text-hover-image-p {
            margin: 0;
            color: #9fbfbc;
            line-height: 30px;
            font-size: 23px;
            letter-spacing: 1px;
            font-weight: bold;
        }
    }

    @media (min-width:1101px) and (max-width:1369px) {
        .text-hover-image .text-hover-image-p {
            margin: 0;
            color: #9fbfbc;
            line-height: 30px;
            font-size: 22px;
            letter-spacing: 1px;
            font-weight: bold;
        }
    }

    @media (min-width:992px) and (max-width:1100px) {
        .text-hover-image .text-hover-image-p {
            margin: 0;
            color: #9fbfbc;
            line-height: 30px;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: bold;
        }
    }

    @media (max-width:991px) {
        .text-hover-image .text-hover-image-p {
            margin: 0;
            color: #9fbfbc;
            line-height: 30px;
            font-size: 21px;
            letter-spacing: 1px;
            font-weight: bold;
        }

        .text-hover-image .text-hover-image-img {
            padding: 10px !important;
        }

        .text-hover-image {
            transform: translate(-50%, 0px);
            background-color: white;
            width: 85%;
            text-align: center;
        }

        .text-nothover-image-div {
            width: 85% !important;
            transform: translate(-50%, 0);
        }
    }

    .text-hover-image .text-hover-image-img {
        padding: 4px;
    }

    .text-nothover-image {
        left: 50%;
    }

    .text-nothover-image-div {
        width: 75%;
        transform: translate(-50%, 0);
    }

    .text-nothover-image-div-p {
        text-align: justify;
        text-align-last: center;
        color: #8a8a8a;
        line-height: 22px;
        font-size: 13px;
        letter-spacing: 1px;
    }

    .div-packs {
        background-color: #f7f7f7;
        text-align: center;
    }

    .div-packs .div-packs-title {
        color: #96b0ab;
        font-size: 22px;
        font-weight: bold;
        margin: 0;
        padding-top: 3rem;
    }

    .div-packs .div-packs-subtitle {
        color: #8a8a8a;
        font-size: 16px;
        font-weight: lighter;
        margin: 0;
        padding-top: 1rem;
    }

    .div-packs .div-packs-img {
        padding-top: 3rem;
        padding-bottom: 3rem;
        width: 70px;
        filter: opacity(0.5);
    }

    @media (max-width:900px) {
        .div-packs .div-packs-img {
            padding-top: 3rem;
            padding-bottom: 3rem;
            width: 50px;
            filter: opacity(0.5);
        }

        .div-packs .div-packs-subtitle {
            color: #8a8a8a;
            font-size: 13px;
            font-weight: lighter;
            margin: 0;
            padding-top: 1rem;
        }
    }

    .div-packs .div-packs-img-2 {
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 70px;
        filter: opacity(0.5);
        margin-right: 4rem;
    }

    @media (min-width:1155px) and (max-width:1330px) {
        .div-packs .div-packs-img-2 {
            padding-top: 1rem;
            padding-bottom: 1rem;
            width: 50px;
            filter: opacity(0.5);
            margin-right: 2rem;
        }
    }

    @media (max-width:900px) {
        .div-packs .div-packs-img-2 {
            padding-top: 1rem;
            padding-bottom: 1rem;
            width: 50px;
            filter: opacity(0.5);
            margin-right: 1.5rem;
        }
    }


    .div-packs .div-packs-button {
        padding-bottom: 2rem;
    }

    .div-packs-div-green {
        background-color: #a1b8b5;
    }

    .div-packs-div-grey {
        background-color: #f7f7f7;
    }

    .div-packs-div-green p {
        color: #fff;
        margin: 0;
        font-size: 24px;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        font-weight: bold;
    }

    .div-packs-div-grey p {
        color: #f7f7f7;
        margin: 0;
        font-size: 24px;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        font-weight: bold;
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

    @media (max-width: 764px) {
        .text-justify-mobile {
            text-align: justify;
            text-align-last: center;
        }
    }
</style>
@endsection

@section('main-content')
<div class="container-fluid p-0">
    <div class="row m-0 p-0">
        <div class="col-12 p-0 ">
            <img src="/img/id-service/banners/main-banner-d.jpg" class="img-fluid d-none d-md-block" style="width: 100%;">
            <img src="/img/id-service/banners/main-banner-m.jpg" class="img-fluid d-block d-md-none" style="width: 100%;">
        </div>
    </div>
</div>
<div class="container-fluid p-0 pt-2 ">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>You can’t buy happiness but you can buy CIRCU which is kind of the same thing</span></h2>
    </div>
</div>
<div class="container-fluid p-0 pt-2 ">
    <div class="col-12 p-0">
        <div class="row text-center justify-content-center align-items-center m-0 ">
            <div class="col-11 col-md-8 col-lg-8 col-xl-7 text-justify-mobile">
                <span>We provide Interior Design Service to help you achieve the magical bedrooms and playgrounds you and your children have always dreamed of.
                    Prepare for a unique experience:<br>
                    Our designers are ready to hear you out and transform your ideas and needs into reality, in true CIRCU fashion. Through an extremely simple process, we will first present a moodboard to sort out colours, style and layouts which suit you best, and finally deliver 3D renders so you can see exactly what the space is going to look like. We will then take care of ordering, following the production and delivering your one-of-a-kind project.
                    And voilá... just like the touch of a magical fairy wand, happiness is a place called home!</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 pt-2">
    <div class="col-12 text-center slideToggle p-0 py-3">
        <a class="btn-green-underline section1-scroll"><span style="color:white;cursor:pointer;"><b>GET STARTED</b></span></a>
    </div>
</div>
<div class="container-fluid p-0 pt-2 ">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>MAGICAL STEPS</span></h2>
    </div>
</div>
<div class="container-fluid" style="overflow-x: hidden;">
    <div class="row ">
        <div class="col-12 col-md-4 p-0">
            <div class="col-12 p-0">
                <img src="/img/id-service/banners/1.jpg" class="img-fluid" style="width: 100%;">
                <div class="col-12 p-0 position-absolute" style="bottom:-10px;left: 50%;">
                    <div class="text-hover-image">
                        <img src="/img/id-service/banners/1.png" class="img-fluid text-hover-image-img">
                        <p class="text-hover-image-p">IT ALL STARTS<br>WITH A CONVERSATION</p>
                    </div>
                </div>
            </div>
            <div class="col-12 p-0" style="padding-top: 5px !important;">
                <div class="col-12 p-0 text-nothover-image">
                    <div class="text-nothover-image-div">
                        <p class="text-nothover-image-div-p px-4 px-md-3 pt-4">Conversation is where everything starts: it is where people get to know you, find out about your taste, ideas and even lifestyle demands. It doesn’t matter if you do it personally or virtually, words will always be the key to our hearts. This is why we always ask you to fill in a Q&A first, so that the designer can get some insight on your personal needs.And voilá...just like the touch of a magical fairy wand, happiness is a place called home!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-0">
            <div class="col-12 p-0">
                <img src="/img/id-service/banners/2.jpg" class="img-fluid" style="width: 100%;">
                <div class="col-12 p-0 position-absolute" style="bottom:-10px;left: 50%;">
                    <div class="text-hover-image">
                        <img src="/img/id-service/banners/2.png" class="img-fluid text-hover-image-img">
                        <p class="text-hover-image-p">DESIGN AND PLAN<br>YOUR SPACE</p>
                    </div>
                </div>
            </div>
            <div class="col-12 p-0" style="padding-top: 5px !important;">
                <div class="col-12 p-0 text-nothover-image">
                    <div class="text-nothover-image-div">
                        <p class="text-nothover-image-div-p px-4 px-md-3 pt-4">Afterwards and based on your specifications, we are able to create the moodboards. We will get the measurements of existing pieces as well the exact placement of doors and windows, so that every detail used can create a perfect rendering. After selecting your favorite products from our brands or customized bespoke products from our brands or customized bespoke products designed by us, we will work alongside you in order to determine colours, materials and finishes.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 p-0">
            <div class="col-12 p-0">
                <img src="/img/id-service/banners/3.jpg" class="img-fluid" style="width: 100%;">
                <div class="col-12 p-0 position-absolute" style="bottom:-10px;left: 50%;">
                    <div class="text-hover-image">
                        <img src="/img/id-service/banners/3.png" class="img-fluid text-hover-image-img">
                        <p class="text-hover-image-p">DREAMS COME TRUE<br class="d-none d-md-block">&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col-12 p-0" style="padding-top: 5px !important;">
                <div class="col-12 p-0 text-nothover-image">
                    <div class="text-nothover-image-div">
                        <p class="text-nothover-image-div-p px-4 px-md-3 pt-4">We use 3D design tools to create the complete rendering. This is how we show you the different textures, lighting and colours carefully chosen for your project. This rendering gives you the opportunity to see how your choice of products will actually look in your interior space. Once you’re 100% happy, we’ll order and deliver all the furnishings. We will be happy to bring a little bit of our own vision into your home, by delivering dreams that really do come true.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 pt-2">
    <div class="col-12 text-center slideToggle p-0 py-3">
        <a class="btn-green-underline talk-with-us"><span style="color:white; cursor:pointer;"><b>TALK WITH A DESIGNER</b></span></a>
    </div>
</div>
<div class="container-fluid p-0 pt-2 ">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>OUR MAGICAL ROOMS</span></h2>
    </div>
</div>

<div class="container-fluid text-center p-0 swiper-ambients d-none d-md-block">

    <div class="col-12 swiper-container ">
        <div class="swiper-wrapper">
            @php
            $directory = $_SERVER['DOCUMENT_ROOT']."/img/id-service/slide/desktop/";
            $filecount = count(glob($directory . '*.{jpg}', GLOB_BRACE));
            @endphp

            @for($i = 1; $i <= $filecount; $i++) <div class="swiper-slide bigImages">
                <img src="/img/id-service/slide/desktop/{{$i}}.jpg" class="img-fluid img-slide">
        </div>
        @endfor

    </div>
    <div class="swiper-button-prev arrow-banners"></div>
    <div class="swiper-button-next arrow-banners"></div>
</div>
</div>


<div class="container-fluid p-0 my-2 d-block d-md-none">
    <div class="row p-0 m-0">
        <div class="col-12 owl-ambients owl-carousel owl-slide owl-theme p-0 position-relative">
            @php
            $directory2 = $_SERVER['DOCUMENT_ROOT']."/img/id-service/slide/mobile/";
            $filecount2 = count(glob($directory . '*.{jpg}', GLOB_BRACE));
            @endphp

            @for($i = 1; $i <= $filecount2; $i++) <div class="swiper-slide bigImages">
                <img src="/img/id-service/slide/mobile/{{$i}}.jpg" class="img-fluid" style="width: 100%;">
        </div>
        @endfor
    </div>
</div>
</div>

<div class="container-fluid p-0 pt-2 section-packs">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>MAGICAL PACKS</span></h2>
    </div>
</div>

<div class="container-fluid ">
    <div class="row px-2 px-md-10">
        <div class="col-12 col-md-6 p-1">
            <div class="col-12 p-0 div-packs">
                <p class="div-packs-title">INSPIRATIONAL PACK</p>
                <p class="div-packs-subtitle">MOODBOARDS</p>
                <img src="/img/id-service/beds.svg" class="img-fluid div-packs-img">
                <div class="col-12 div-packs-button">
                    <a rel="modal:open" href="{{ route('modal-id-service') }}" class="btn-green-underline"><span style="color:white;"><b>GET STARTED</b></span></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 p-1">
            <div class="col-12 p-0 div-packs">
                <p class="div-packs-title">GET THE LOOK PACK</p>
                <p class="div-packs-subtitle">MOODBOARDS & RENDERS</p>
                <img src="/img/id-service/room.svg" class="img-fluid div-packs-img">
                <div class="col-12 div-packs-button">
                    <a rel="modal:open" href="{{ route('modal-id-service') }}" class="btn-green-underline"><span style="color:white;"><b>GET STARTED</b></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-2 px-md-10">
        <div class="col-12 col-md-6 p-1">
            <div class="col-12 p-0 div-packs">
                <div class="col-12 div-packs-div-green">
                    <p><i class="fas fa-star"></i> BEST DEAL</p>
                </div>
                <p class="div-packs-title">DREAM PACK</p>
                <p class="div-packs-subtitle">MOODBOARDS, RENDERS, 3D &<br>SUPPLY CHAIN CIRCU PORTFOLIO<br>&nbsp;</p>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <img src="/img/id-service/beds.svg" class="img-fluid div-packs-img-2">
                            <img src="/img/id-service/room.svg" class="img-fluid div-packs-img-2">
                            <img src="/img/id-service/portfolio.svg" class="img-fluid div-packs-img-2" style="margin-right: 0 !important;">
                        </div>

                    </div>
                </div>
                <div class="col-12 div-packs-button">
                    <a rel="modal:open" href="{{ route('modal-id-service') }}" class="btn-green-underline"><span style="color:white;"><b>GET STARTED</b></span></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 p-1">
            <div class="col-12 p-0 div-packs">
                <div class="col-12 div-packs-div-grey">
                    <p><i class="fas fa-star"></i></p>
                </div>
                <p class="div-packs-title">MAGICAL ROOM</p>
                <p class="div-packs-subtitle">MOODBOARDS, RENDERS, 3D,<br>PERSONAL ASSISTANCE WITH OUR DESIGN TEAM<br>& SUPPLY CHAIN CIRCU PORTFOLIO</p>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <img src="/img/id-service/beds.svg" class="img-fluid div-packs-img-2">
                            <img src="/img/id-service/room.svg" class="img-fluid div-packs-img-2">
                            <img src="/img/id-service/portfolio.svg" class="img-fluid div-packs-img-2">
                            <img src="/img/id-service/man.svg" class="img-fluid div-packs-img-2" style="margin-right: 0 !important;">
                        </div>

                    </div>
                </div>
                <div class="col-12 div-packs-button">
                    <a rel="modal:open" href="{{ route('modal-id-service') }}" class="btn-green-underline"><span style="color:white;"><b>GET STARTED</b></span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0 pt-2">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>OUR MAGICAL PIECES</span></h2>
    </div>
</div>

@include('includes.menu-visual-new')
@endsection

@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script type="text/javascript">
    $('.talk-with-us').click(function() {
        SnapEngage.startLink();
    });
    $(document).on('click', '.section1-scroll', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-packs').offset().top - 66
        }, 1000);
    });
    $(window).on('load', function() {
        $('.img-slide').each(function() {
            if ($(this).width() > $(this).height()) {
                $(this).parent().addClass('horizontal-id')
            } else {
                $(this).parent().addClass('vertical-id')
            }
        })
        var swiper = new Swiper('.swiper-ambients .swiper-container', {
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 5,
            loop: true,
            autoplay: false,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            disableOnInteraction: false
        });
    });

    var spotlights_swiper = new Swiper('.spotlights .swiper-container', {
        slidesPerView: 2,
        centeredSlides: true,
        spaceBetween: 8,
        loop: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
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
                items: "auto"
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