@extends('layouts.master')

@section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas, children room, kids room furniture, kids room decoration, kids' room design, children bedroom, kids room interior design, kids room inspiration, kids room decor ideas, design for kids, kids luxury brand" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="https://www.circu.net" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection

@section('head-includes')
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

    .owl-theme .owl-dots .owl-dot span {
        background: none repeat scroll 0 0 #fff;
        border: none;
        border-radius: 20px;
        display: block;
        height: 10px;
        margin: 3px 4px;
        width: 10px;
        cursor: pointer;
    }

    .owl-dots {
        text-align: center;
    }

    .owl-dots button.owl-dot.active span,
    .owl-dots button.owl-dot:hover span {
        background: #9fbfbc;
    }
</style>
@endsection

@section('main-content')
<div class="container-fluid pb-2" id="main-slide">
    <div class="row">
        <!-- SLIDE DESKTOP -->
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative d-none d-sm-block">
            <div class="item">
                <a href="https://www.circu.net/products?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-products&utm_campanha=product">
                    <video id="vid" width="1920" height="800" class="cd-dot img-fluid" style="width:100% !important;" autoplay muted loop>
                        <source src="/img/slides/main/video-banner.mp4" type="video/mp4">
                        <source src="/img/slides/main/video-banner.mp4" type="video/ogg">
                    </video>
                </a>
            </div>
            <div class="item">
                <a href="{{ route('products') }}">
                    <img src="/img/slides/main/circu-magical-world.jpg" width="1920" height="800" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/our-magical-rooms?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-the-multiverse-bedroom&utm_campanha=ourmagicalrooms">
                    <img src="/img/slides/main/the-multiverse-bedroom.jpg" width="1920" height="800" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/ebook/stocklist-annual-sale?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales">
                    <img src="/img/slides/main/stocklist-annual-sale.jpg" width="1920" height="800" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>

            <div class="item">
                <a href="{{ route('our-houses-new') }}">
                    <img src="/img/slides/main/green-mint-room-d.jpg" width="1920" height="800" alt="Green Mint Playroom Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/ebook/new-products-2022/?utm_source=website&utm_medium=homeslider&utm_content=circu-new-products-2.0&utm_campaign=newproducts22">
                    <img src="/img/slides/main/new-products-2022.gif" width="1920" height="800" alt="New Products 2022 Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('new-products') }}">
                    <img src="/img/slides/main/new-products-collection.jpg" width="1920" height="800" alt="New Products Collection Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/download-catalogue">
                    <img src="/img/slides/main/new-catalogue-2021.jpg" width="1920" height="800" alt="New Catalogue Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('our-houses-new') }}">
                    <img src="/img/slides/main/little-rising-star-bedroom-desktop.jpg" width="1920" height="800" alt="Little Rising Star Bedroom Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('id-services') }}">
                    <img src="/img/slides/main/id-services-d.jpg" width="1920" height="800" alt="ID Services Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('products') }}">
                    <img src="/img/slides/main/new-collection-bubble-gum.jpg" width="1920" height="800" alt="New Collection Bubble Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
        </div>

        <!-- SLIDE MOBILE -->
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-block d-sm-none">
            <div class="item">
                <video id="vid" width="1920" height="800" class="cd-dot img-fluid" style="width:100% !important;" autoplay muted loop>
                    <source src="/img/slides/main/video-banner-m.mp4" type="video/mp4">
                    <source src="/img/slides/main/video-banner-m.mp4" type="video/ogg">
                </video>
            </div>
            <div class="item">
                <a href="{{ route('products') }}">
                    <img src="/img/slides/main/circu-magical-world-mobile.jpg" width="552" height="432" alt="Circu Magical World" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('our-houses-new') }}">
                    <img src="/img/slides/main/the-multiverse-bedroom-m.jpg" width="1920" height="800" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/stocklist?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales">
                    <img src="/img/slides/main/stocklist-annual-sale-m.jpg" width="1920" height="800" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/stocklist?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-summer-sale-catalogue&utm_campanha=summersale22">
                    <img src="/img/slides/main/summer-sale-mobile.jpg" width="552" height="432" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('our-houses-new') }}">
                    <img src="/img/slides/main/green-mint-room-m.jpg" width="552" height="432" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/ebook/new-products-2022/?utm_source=website&utm_medium=homeslider&utm_content=circu-new-products-2.0&utm_campaign=newproducts22">
                    <img src="/img/slides/main/new-products-2022-mobile.gif" width="552" height="432" alt="New Products 2022 Circu Magical Furniture" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('new-products') }}">
                    <img src="/img/slides/main/new-products-collection-mobile.jpg" width="552" height="432" alt="New Products Collection Circu Magical Furniture" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/download-catalogue">
                    <img src="/img/slides/main/new-catalogue-2021-mobile.jpg" width="552" height="432" alt="New Catalogue Circu Magical Furniture" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('id-services') }}">
                    <img src="/img/slides/main/id-services-m.jpg" width="552" height="432" alt="ID Service Circu Magical Furniture" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="{{ route('products') }}">
                    <img src="/img/slides/main/new-collection-bubble-gum-mobile.jpg" alt="New Collection Circu Magical Furniture" width="768" height="600" class="cd-dot img-fluid">
                </a>
            </div>
        </div>

    </div>
</div>

@include('includes.menu-visual-new-test')
<div class="container-fluid pt-2">
    @include('includes.banners-hotspots')
    <div class="row py-2">
        <div class="col-6 col-lg-3 p-0 ">
            <a href="https://www.circu.net/inspirations/category/interior-design/boys-room/" target="_blank">
                <img src="/img/icons/menu-projects/shop-boy-circu-magical-furniture.jpg" alt="Shop Boy Circu Magical Furniture" class="img-fluid w-100">
                <div class="menu-project-item">
                    <span class="homepage-shop">SHOP</span>
                    <span class="homepage-cat">BOY</span>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3 p-0 ">
            <a href="https://www.circu.net/inspirations/category/interior-design/girls-room/" target="_blank">
                <img src="/img/icons/menu-projects/shop-girl-circu-magical-furniture.jpg" alt="Shop Girl Circu Magical Furniture" class="img-fluid w-100">
                <div class="menu-project-item">
                    <span class="homepage-shop">SHOP</span>
                    <span class="homepage-cat">GIRL</span>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3 p-0">
            <a href="{{ route('our-houses-new') }}" target="_blank">
                <img src="/img/icons/menu-projects/shop-magical-rooms-circu-magical-furniture.jpg" alt="Shop Magical Rooms Circu Magical Furniture" class="img-fluid w-100">
                <div class="menu-project-item">
                    <span class="homepage-shop">SHOP</span>
                    <span class="homepage-cat">MAGICAL ROOMS</span>
                </div>
            </a>
        </div>
        <div class="col-6 col-lg-3 p-0">
            <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                <div class="item">
                    <a href="{{ route('project', ['slug' => 'charlotte-little-kingdom']) }}">
                        <img src="/img/icons/menu-projects/project-1.jpg" alt="Projects Circu Magical Furniture" class="img-fluid w-100">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('project', ['slug' => 'pastel-color-bedroom-full-of-brightness']) }}">
                        <img src="/img/icons/menu-projects/project-2.jpg" alt="Projects Circu Magical Furniture" class="img-fluid w-100">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('project', ['slug' => 'fairytale-in-the-heart-moscow-by-a3-design-studio']) }}">
                        <img src="/img/icons/menu-projects/project-3.jpg" alt="Projects Circu Magical Furniture" class="img-fluid w-100">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('project', ['slug' => 'royal-project-in-the-queen-hometown']) }}">
                        <img src="/img/icons/menu-projects/project-4.jpg" alt="Projects Circu Magical Furniture" class="img-fluid w-100">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('project', ['slug' => 'touch-of-glam-into-a-luxury-apartment']) }}">
                        <img src="/img/icons/menu-projects/project-5.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('project', ['slug' => 'fairytale-bedroom-brought-to-life']) }}">
                        <img src="/img/icons/menu-projects/project-6.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ route('project', ['slug' => 'whimsical-pink-room']) }}">
                        <img src="/img/icons/menu-projects/project-7.jpg" alt="Projects Circu Magical Furniture" width="500" height="425" class="img-fluid">
                    </a>
                </div>
            </div>
            <a href="{{ route('projects') }}">
                <div class="menu-project-item">
                    <span class="homepage-shop">SEE ALL</span>
                    <span class="homepage-cat">PROJECTS</span>
                </div>
            </a>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-12 col-lg-7 mx-auto text-center pt-4 pb-3">
            <h1>ONCE UPON A TIME ...</h1>
            <p class="description"><i>Our hand-crafted and hand-tailored pieces are made by the best and most
                    experienced craftsmen in Portugal, <br>combining the finest materials with a lot of passion, so we
                    can deliver only the highest quality furnishings.</i></p>
        </div>

        <div class="col-12 parallax d-none d-md-block px-0" style="z-index:1;">
            <video width="100%" height="auto" onloadeddata="this.play();" autoplay muted loop playsinline>
                <source src="/includes/video/brand-homepage.mp4" type="video/mp4" />
                <p>Your browser does not support the video tag or the file format of this video.</p>
            </video>
            <a href="{{ route('about') }}" style="z-index:2;">
                <div class="text-hover text-center position-absolute" style="bottom: 10%;top: unset;">
                    <div class="btn-video-homepage grow">EXPLORE OUR CRAFTSMANSHIP</div>
                </div>
            </a>
        </div>

        <div class="col-12 parallax d-block d-md-none px-0" style="z-index:1;">
            <video width="100%" height="auto" onloadeddata="this.play();" autoplay muted loop playsinline>
                <source src="/includes/video/brand-homepage-mobile.mp4" type="video/mp4" />
                <p>Your browser does not support the video tag or the file format of this video.</p>
            </video>
            <a href="{{ route('about') }}" style="z-index:2;">
                <div class="text-hover text-center position-absolute" style="bottom: 10%;top: unset;">
                    <div class="btn-video-homepage grow">EXPLORE OUR CRAFTSMANSHIP</div>
                </div>
            </a>
        </div>

    </div>
    <!-- end row -->

    <div class="row pb-2">

        <div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#9bb1c9;">
            <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-md-1">
                <div class="row">
                    <div class="col-12 col-lg-6 p-lg-0">
                        @include('includes.middle.form-catalogue-2022')
                    </div>
                    <div class="col-12 col-lg-6 pl-lg-0 text-center">
                        <img src="/img/home/banner-form-catalogue-m.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid text-center">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8 p-0 d-none d-lg-block">
            <div class="col-12 p-0">
                <img src="/img/home/bg-banner-ebook.jpg" style="width:100%;" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-none d-lg-block">
            </div>
            <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%; transform: translate(0,-50%);">
                @include('includes.middle.form-catalogue-2022')
            </div>
        </div>
        <div class="col-12 col-lg-4 p-0">
            <a href="https://www.circu.net/stocklist?utm_origem=website&utm_meio=2nslide&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales">
                <img src="/img/pag-styles/modern-luxury/stocklist-annual-sale-mini-banner.jpg" alt="Stocklist Annual Sale Ebook Circu Magical Furniture" class="img-fluid w-100">
            </a>
        </div>
    </div>
</div>


<!-- end container -->
@endsection

@section('footer-includes')
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
        fluidSpeed: 3000,
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
        dots: true,
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