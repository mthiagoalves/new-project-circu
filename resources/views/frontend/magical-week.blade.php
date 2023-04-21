@extends('layouts.master')
@section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="https://www.circu.net/deals" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection


@section('head-includes')

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
</style>
@endsection
@section('main-content')

<div class="container-fluid p-0">
    <div class="row m-0 p-0">
        <div class="col-12 p-0">
            <img src="/img/landing/magical-week/magical-week.jpg" alt="Circu Magical World" class="cd-dot img-fluid d-none d-sm-block" style="width:100%;">
            <img src="/img/landing/magical-week/magical-week-m.jpg" width="550" height="650" alt="Circu Magical World" class="cd-dot img-fluid d-block d-sm-none" style="width:100%;">
        </div>
    </div>
</div>
<div class="container-fluid pt-2">
    <div class="row">
        <!-- <div class="col-12 text-center">
            <p id="demo"></p>
        </div> -->
        <div class="col-12 text-center">
            <p class="m-0 text-uppercase">A curated selection of our most exclusive pieces floor sample campaign.</p>
            <p class="m-0 text-uppercase">Get premium acess and discover the unique deals with up to 60% off. </p>
            <p class="m-0 text-uppercase">Pick your favorite before it's too late. DONT MISS THIS CHANCE.</p>
        </div>
        <div class="col-12 text-center slideToggle p-0">
            <a rel="modal:open" href="{{route('modal-download-pricelist')}}" class="btn-green-underline modal-cursor-disable"><span style="color:white;"><b>DOWNLOAD</b> PRICELIST <i class="fas fa-caret-right"></i></span></a>
        </div>
    </div>
</div>
<!-- 12 PRODUCTS -->
<div class="container-fluid pt-2">
    <div class="row">
        <?php $number = 1; ?>
        @foreach($products as $product)
        <?php $number++ ?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3 banner-height-2">
                @if($product->slug == 'cloud-sofa')
                <img src="/img/products/thumbnails/{{$product->slug}}-pink-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @else
                <img src="/img/products/thumbnails/{{$product->slug}}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @endif
                @if($product->slug == 'fantasy-air-chest-3-drawers')
                <div class="new-product" style="top: 15%;right: 15%;width: 19%;">
                    <img src="/img/icons/sold-out.png">
                </div>
                @endif
                <div class="product--title">
                    <span class="name">{{$product->name}}</span>
                    <span class="sub_category">{{ucwords($product->sub_category->sub_category_languages[0]->name)}}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price-magical-month/{{$product->slug}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>
            </div>
        </div>
        @if($number == 3)
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3 banner-height-2">
                <div class="col-12 p-0">
                    <img src="/img/products/thumbnails/gum-pink-circu-magical-furniture.png" width="960" height="800" class="img-fluid pink-img">
                    <img src="/img/products/thumbnails/gum-blue-circu-magical-furniture.png" width="960" height="800" class="img-fluid blue-img d-none">
                    <img src="/img/products/thumbnails/gum-multi-circu-magical-furniture.png" width="960" height="800" class="img-fluid multi-img d-none">

                    <div class="position-absolute" style="left: 50%;bottom: 0;transform: translate(-50%, -5px);">
                        <div class="d-inline text-center slick-slide">
                            <img src="/img/icons/finishes/pink.png" width="20" height="20" alt="" class="img-fluid pink-button" style="cursor:pointer;">
                        </div>
                        <div class="d-inline text-center slick-slide blue-button">
                            <img src="/img/icons/finishes/blue.png" width="20" height="20" alt="" class="img-fluid blue-button" style="cursor:pointer;">
                        </div>
                        <div class="d-inline text-center slick-slide multi-button">
                            <img src="/img/icons/finishes/multi-color.png" width="20" height="20" alt="" class="img-fluid multi-button" style="cursor:pointer;">
                        </div>
                    </div>
                </div>
                <div class="product--title">
                    <span class="name">Gum</span>
                    <span class="sub_category">Armchair</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="https://www.circu.net/includes/modal-product-price-gum-chair"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach


    </div>
</div>
<div class="container-fluid pt-5 pb-3">
    <div class="row">
        <div class="col-12 text-center">
            <p class="m-0 text-uppercase">COLORS AND MATERIALS MAY DIFFER FROM THE ONES DISPLAYED.</p>
            <p class="m-0 text-uppercase">OFFER VALID FROM THE 04TH TO THE 31TH OF JANUARY. PRODUCT LIST MAY BE UPDATED MONTHLY. TERMS & CONDITIONS APPLY. SEE MORE HERE.</p>
            <p class="m-0 text-uppercase">FEEL FREE TO CONTACT US FOR MORE INFORMATION.</p>
        </div>
    </div>
</div>
<div class="container-fluid my-3" style="background-color:#9BB1C9;">
    <div class="row">
        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-1">
            <div class="row">
                <div class="col-12 col-lg-6">
                    @include('includes.middle.form-catalogue-new')
                </div>
                <div class="col-12 col-lg-6">
                    <img src="/img/catalogue-circu-all-products.jpg" width="992" height="500" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
                    <img src="/img/catalogue-circu-all-products-mobile.jpg" width="524" height="264" alt="Catalogue Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 menu-filters" id="seating">
    <h2 class="col-12 category_name_title text-center mb-0"><span>ALL CATEGORIES</span></h2>
</div>
@include('includes.menu-visual-new')
<div class="button d-none">
    <a rel="modal:open" href="{{route('modal-entrance-deals')}}" id="formhide">asdas</a>
</div>
<!-- end container -->
@endsection



@section('footer-includes')
<script>
    $(window).load(function() {
        $("a").removeClass("modal-cursor-disable");
    });
</script>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 31, 2020 23:59:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
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

<script>
    $(window).bind('resize load', function() {
        if ($(window).width() > 800) {
            var banners = $('.banner-height-1').height();

            $('.banner-height-2').css('height', banners);
        }

        if ($(window).width() < 767) {
            $('.modal-height').css('height', $(window).height());
        }

    });

    $(document).on('click', '.multi-button', function(event) {
        event.preventDefault();
        console.log('test');
        $(".blue-img").addClass("d-none");
        $(".pink-img").addClass("d-none");
        $(".multi-img").removeClass("d-none");
    });

    $(document).on('click', '.blue-button', function(event) {
        event.preventDefault();
        console.log('test');
        $(".blue-img").removeClass("d-none");
        $(".pink-img").addClass("d-none");
        $(".multi-img").addClass("d-none");
    });

    $(document).on('click', '.pink-button', function(event) {
        event.preventDefault();
        console.log('test');
        $(".pink-img").removeClass("d-none");
        $(".blue-img").addClass("d-none");
        $(".multi-img").addClass("d-none");
    });
</script>
@endsection