@extends('layouts.master')

@section('main-content')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
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


    .swiper-container {
        width: 100%;
    }

    @media (min-width:640px) {
        .swiper-thankyou .swiper-slide {
            width: auto !important;
        }
    }

    .swiper-thankyou .swiper-pagination-bullet-active {
        opacity: 1;
        background: #a3c2bc !important;
        border: 2px solid #a3c2bc !important;
    }

    .swiper-thankyou .swiper-pagination-bullet {
        opacity: 1;
        background: transparent;
        border: 1px solid #a3c2bc !important;
        border: 2px solid #a3c2bc !important;
        width: 10px;
        height: 10px;
    }
</style>
<div class="container-fluid pb-5 px-0">
    <div class="row">
        <div class="col-12 text-center align-self-center py-5">

            <h4 class="text-uppercase mb-4 pt-2" style="color: #8bb9b6 !important;">THANK YOU FOR CONTACTING US!</h4>

            <div class="row justify-content-center">
                <p class="col-12 col-md-5 font-weight-bold mr-2 ml-2 mb-4" style="color: #666666 !important;line-height: 25px;">

                    Dear {{ $name_user }}, your enquire is being pocessed and our team will enter in contact with you, as soon as possible, to answer all of your questions about our products and magical brand.
                    We sent right now an email to your email {{ $email_user }}. As soon as possible, our team will enter in contact with you with more details about our magical brand and products.

                </p>
            </div>


            <p class="col-12 font-weight-bold mr-2 ml-2 mb-4" style="color: #8bb9b6 !important;">
                <a style="text-decoration:none !important; color: #8bb9b6 !important;font-size: 15px;">Are you in a hurry? Talk with us now!</a>
            </p>
            <div class="row justify-content-center">
                <p class="font-weight-bold mr-3 ml-3 mb-4" style="color: #8bb9b6 !important;">
                    <a href="https://api.whatsapp.com/send?phone=351911780428&text=Hello,%20I%27m%20interested%20in%20knowing%20more%20about%20Circu.%20Can%20you%20help%20me" target="_blank" style="text-decoration:none !important; color: #666666 ;font-size: 15px;"><i style="font-size: 20px;color: #8bb9b6 !important;" class="fab fa-whatsapp"></i><br>Whats App</a>
                </p>
                <p class="font-weight-bold mr-3 ml-3 mb-4" style="color: #8bb9b6 !important;">
                    <a class="talk-with-us" style="text-decoration:none !important; font-size: 15px;color: #666666 ; cursor:pointer;"><i style="font-size: 20px;color: #8bb9b6 !important;" class="far fa-comments"></i><br>Chat Online</a>
                </p>
            </div>
            <p class="col-12 font-weight-bold mr-2 ml-2 mb-4" style="color: #8bb9b6 !important;">
                <a href="{{ URL::previous() }}" style="text-decoration:none !important; color: #8bb9b6 !important;font-size: 15px;"><i class="fas fa-caret-left"></i> <span style="color: #8bb9b6 !important;font-size: 15px; border-bottom:1px solid #8bb9b6;">GO BACK</span></i></a>
            </p>

            <p class="col-12 font-weight-bold mr-2 ml-2 mb-4" style="color: #8bb9b6 !important;font-size: 18px;">
                Meanwhile get inspired to create our room!
            </p>
            <div class="col-12 swiper-thankyou p-0">
                <div class="swiper-container" style="padding-bottom: 40px;">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/22.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/22.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/21.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/21.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/20.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/20.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/interior-design/luxury-girls-bedroom-inspiration/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/16.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/16.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/interior-design/luxury-kids-bedroom-design-inspired-by-the-sea/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/17.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/17.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/uncategorized/bunny-shaped-bed-your-kids-room-needs-is-our-mr-bunny-bed/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/18.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/18.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/interior-design/luxury-kids-bedroom-design-inspired-by-the-sea/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/19.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/19.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/1.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/1.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/2.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/2.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/3.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/3.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/4.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/4.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/5.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/5.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/6.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/6.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/7.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/7.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/8.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/8.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/9.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/9.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/10.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/10.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/11.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/11.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/12.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/12.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/13.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/13.jpg">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                                <img class="img-fluid d-none d-md-block" src="/img/new-thank-you/thank-you-1/slide/desktop/15.jpg">
                                <img class="img-fluid d-block d-md-none" src="/img/new-thank-you/thank-you-1/slide/mobile/15.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 text-center position-absolute" style="bottom: 10%;z-index: 1;">
                        <a href="https://www.circu.net/inspirations/projects/" target="_blank">
                            <p class="m-0 text-uppercase btn-green-underline mt-0">discover more</p>
                        </a>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            @include('includes.thank-you-new.products')
            <div class="row pb-1">
                <div class="col-12 col-md-3 p-1">
                    <a href="https://www.circu.net/stocklist/?utm_source=website&utm_medium=thankyou-page&utm_content=circu-contact&utm_campaign=stocklist&utm_term=hsantos">
                        <div class="position-absolute col-12" style="left: 50%; transform: translate(-50%, 0%);top: 7%;">
                            <p class="m-0" style="color: white; font-size: 20px; font-weight: bold;">READY TO SHIP</p>
                        </div>
                        <img class="img-fluid w-100" src="/img/new-thank-you/thank-you-2/ready-to-ship.jpg">
                        <div class="position-absolute" style="left: 50%; transform: translate(-50%, 0%);bottom: 4%;">
                            <p class="m-0" style="background-color: rgba(255,255,255,0.2); padding: 6px 0px; border: 1.5px solid white; color: white; font-size: 13px; font-weight: bold; width: 210px;">DISCOVER MORE</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 p-1">
                    <a href="https://www.circu.net/ebook/summer-sale/?utm_source=website&utm_medium=thankyou-page&utm_content=summer-sale&utm_campaign=summer-sale&utm_term=summersale22">
                        <div class="position-absolute col-12" style="left: 50%; transform: translate(-50%, 0%);top: 7%;">
                            <p class="m-0" style="color: white; font-size: 20px; font-weight: bold;">SUMMER SALE</p>
                        </div>
                        <img class="img-fluid w-100" src="/img/new-thank-you/thank-you-2/summer-sale.jpg">
                        <div class="position-absolute" style="left: 50%; transform: translate(-50%, 0%);bottom: 4%;">
                            <p class="m-0" style="background-color: rgba(255,255,255,0.2); padding: 6px 0px; border: 1.5px solid white; color: white; font-size: 13px; font-weight: bold; width: 210px;">FREE DOWNLOAD</p>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-3 p-1">
                    <a href="https://www.circu.net/about/?utm_source=website&utm_medium=thankyou-page&utm_content=circu-contact&utm_campaign=brandawareness&utm_term=hsantos">
                        <img class="img-fluid w-100" src="/img/new-thank-you/thank-you-2/video.jpg">
                    </a>
                </div>
                <div class="col-12 col-md-3 p-1">
                    <a href="https://www.circu.net/ebook/100-luxury-kids-rooms/?utm_source=website&utm_medium=thankyou-page&utm_content=circu-contact&utm_campaign=100luxurykidsrooms&utm_term=hsantos">
                        <div class="position-absolute col-12" style="left: 50%; transform: translate(-50%, 0%);top: 7%;">
                            <p class="m-0" style="color: white; font-size: 20px; font-weight: bold;">100 LUXURY KIDS ROOM</p>
                        </div>
                        <img class="img-fluid w-100" src="/img/new-thank-you/thank-you-2/100-luxury-kids-rooms.jpg">
                        <div class="position-absolute" style="left: 50%; transform: translate(-50%, 0%);bottom: 4%;">
                            <p class="m-0" style="background-color: rgba(255,255,255,0.2); padding: 6px 0px; border: 1.5px solid white; color: white; font-size: 13px; font-weight: bold; width: 210px;">FREE DOWNLOAD</p>
                        </div>
                    </a>
                </div>
            </div>
            @include('includes.menu-visual-new')
            <div class="row footer footer-nav py-2">
                <div class="col-12">
                    <div class="row">
                        <div class="col-6 col-sm-3 d-flex flex-column py-3">
                            <img src="/img/box.svg" srcset="/img/box.svg" width="26" height="26" class="img-fluid" onclick='window.location.href="https://www.circu.net/about"' style="cursor:pointer;">
                            <div class="text-center">
                                <a href="{{route('about')}}">
                                    <div class="small">100%</div>Handmade
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 d-flex flex-column py-3">
                            <img src="/img/color-scheme.svg" srcset="/img/color-scheme.svg" width="26" height="26" class="img-fluid" onclick='window.location.href="https://www.circu.net/contact"' style="cursor:pointer;">
                            <div class="text-center">
                                <a href="{{route('contact')}}">
                                    <div class="small">Bespoke &</div>Custom Products
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 d-flex flex-column py-3">
                            <img src="/img/file.svg" srcset="/img/file.svg" width="26" height="26" class="img-fluid" onclick='window.location.href="https://www.circu.net/stocklist"' style="cursor:pointer;">
                            <div class="text-center">
                                <a href="{{route('stocklist')}}">
                                    <div class="small">Ready to Ship &</div> Stocklist
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-sm-3 d-flex flex-column py-3">
                            <img src="/img/fast-time.svg" srcset="/img/fast-time.svg" width="26" height="26" class="img-fluid" onclick='window.location.href="https://www.circu.net/stocklist"' style="cursor:pointer;">
                            <div class="text-center">
                                <a href="{{route('stocklist')}}">
                                    <div class="small">Short</div> Lead Time
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <p class="col-12 font-weight-bold mr-2 ml-2 pt-4" style="color: #8bb9b6 !important;font-size: 19px;font-style: italic;">
                    You can't buy happines but you can buy CIRCU, that's kind of the same thing!
                </p>
            </div>
            <div class="row">
                <div class="col-12 social_actions pb-4">
                    <h5 class="mt-4 mb-2" style="color: #8bb9b6 !important;">Follow us</h5>
                    <a href="https://instagram.com/circu_magical_furniture/" target="_blank">
                        <i style="color: #8bb9b6 !important;" class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/circu-magicalfurniture/" target="_blank">
                        <i style="color: #8bb9b6 !important;" class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.pinterest.com/circudesign/" target="_blank">
                        <i style="color: #8bb9b6 !important;" class="fab fa-pinterest-p"></i>
                    </a>
                    <a href="https://www.facebook.com/circumagicalfurniture/" target="_blank">
                        <i style="color: #8bb9b6 !important;" class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/circu_magical" target="_blank">
                        <i style="color: #8bb9b6 !important;" class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UC2_hoG6aHFGnqF9SVTkhwxA" target="_blank">
                        <i style="color: #8bb9b6 !important;" class="fab fa-youtube"></i>
                    </a>
                    <a rel="modal:open" href="https://www.circu.net/modal-we-chat" class="">
                        <i style="color: #8bb9b6 !important;font-size: 20px;" class="fab fa-lg fa-weixin"></i>
                    </a>
                    <a href="https://www.tiktok.com/@circu_magical_furniture" target="_blank">
                        <i>
                            <svg style="width: 14px;color: #8bb9b6 !important;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="tiktok" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-tiktok fa-w-14">
                                <path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" class=""></path>
                            </svg>
                        </i>
                    </a>
                </div>
            </div>



        </div>
    </div>
</div>

@endsection

@section('meta')
<title>Circu Magical Furniture - Luxury brand for children</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="All Products Circu Magical Furniture - Luxury brand for children" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/products" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection

@section('footer-includes')
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
    $(window).on('load', function() {
        var swiperthnakyoupagee = new Swiper('.swiper-thankyou .swiper-container', {
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 5,
            loop: true,
            autoplay: false,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            disableOnInteraction: false,
            breakpoints: {
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
    });
</script>
@endsection