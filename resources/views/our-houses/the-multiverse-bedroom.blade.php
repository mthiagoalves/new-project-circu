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

    h2.name_title,
    .name_title {
        font-family: 'RalewayMedium', sans-serif;
        font-size: 1rem;
        letter-spacing: 2px;
        padding: 0.5rem 2rem;
        color: #707070 !important;
        font-weight: normal;
        cursor: auto !important;
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
            color: #9bbfbd !important;
            font-size: 17px;
            font-weight: bold;
            text-align: center;
        }

        .text-2-title {
            text-transform: inherit;
            color: #8c8c8c;
            font-size: 13px;
            text-align-last: center;
        }

        .text-3-title {
            text-transform: uppercase;
            color: #8c8c8c;
            font-size: 11px;
            font-weight: bold;
            text-align: center;
        }
    }

    .text-1-title {
        text-transform: uppercase;
        color: #9bbfbd !important;
        font-size: 17px;
        font-weight: bold;
    }

    .text-2-title {
        text-transform: inherit;
        color: #8c8c8c;
        font-size: 13px;
    }

    .text-3-title {
        text-transform: uppercase;
        color: #8c8c8c;
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
        font-weight: bold;
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

    h2.category_name_room_subtitle span {
        background-color: white;
        color: #979797;
        padding: 5px 30px;
    }

    .start_virtual_tour span {
        background-color: white;
        color: #9bbfbd;
        padding: 10px 30px;
        font-family: 'Raleway', sans-serif;
        text-transform: uppercase;
        font-size: 0.8rem;
        letter-spacing: 2px;
        font-weight: bold;
    }

    h2.category_name_room_subtitle_button span {
        background-color: #9bbfbd;
        color: white;
        padding: 5px 30px;
        font-weight: normal;
        cursor: pointer !important;
        font-size: 0.8rem;
        letter-spacing: 2px;
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;

    }

    h2.texto_room {
        text-transform: inherit;
        color: #707070;
        font-size: 13px;
        text-align-last: center;
    }

    @media (min-width:1100px) {
        .title-form-acess {
            text-align: left !important;
        }

        .title-form-acess h1 {
            font-size: 22px !important;
        }

        .div-form-ourhouses {
            padding-right: 2rem !important;
            padding-left: 2rem !important;
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

    /* --------------- linha de produtos --------------- */
    .form-catlogue-r .form-catalogue-middle-banner {
        top: unset !important;
        transform: unset !important;
    }

    @media (max-width:720px) {
        .texto_room {
            text-align: justify !important;
        }
    }

    .text-title-banner1 {
        color: #98b9b5;
        font-size: 1.2rem;
        font-weight: bold;
        letter-spacing: 2px;
    }

    .moodboards-title {
        bottom: 3%;
    }

    @media (max-width:900px) {
        .text-title-banner1 {
            color: #98b9b5;
            font-size: 1rem !important;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        .moodboards-title {
            bottom: 0%;
        }
    }
</style>
@endsection

@section('main-content')
<div class="container-fluid p-0">
    <div class="row m-0 p-0">
        <div class="col-12 p-0 ">
            <img src="/img/our-houses/new/the-multiverse-bedroom/main-banner-d.jpg" class="img-fluid d-none d-md-block" style="width: 100% !important;">
            <img src="/img/our-houses/new/the-multiverse-bedroom/main-banner-m.jpg" class="img-fluid d-block d-md-none" style="width: 100% !important;">
            <div class="col-12 p-0 pt-4">
                <p class="text-uppercase text-center text-title-banner1 pb-0 pb-md-1 mb-0">The Multiverse Bedroom</p>
                <p class="text-uppercase text-center text-title-banner1 pb-2 pb-lg-2">A true realm of comfort and adrenaline for our kids</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 pb-2 pt-1">
    <div class="row justify-content-center m-0">
        <p class="col-12 col-md-9 texto_room text-center mb-0"><span>What we think of as the Circu´s universe could be just one of trillions of universes on an indescribably vast stage called the multiverse, where sleep, study, play, and living areas are the true realm of comfort and peace for our kids.
                Inspired by the Jungle Book, the Mogli Playhouse is the great statement piece of the bedroom, carefully made by the elements and the wonders of nature. It's a dream come true for children who love the outdoors so much they wish to bring it inside. With this playhouse, they are encouraged to creativity, like if they were on the top of the world.
                In the center of the room, the Illusion desk and chairs will bring a touch of magic to the kids´ playroom decor. This irreverent table gives the idea of being suspended in the air, besides being a place where children can play and study. It also features a pencil cup, ideal to store and organize paint and study supplies. At the top, the newest Periwinkle lamps stand out, inspired by the delicate and sweet flower with the same name, helping kids to follow their ambitions and thoughts.
                Last, but not least, the perennially precious and divine Lotus Flower reincarnates through a comfy modern armchair, that perfectly complements, and adds value to the reading corner of the room.
                Such inspirational history and such a recognizable shape could not go unnoticed by Circu, in this multiverse of adventure and fun.</span></p>
    </div>
    @php $room = 'Green Mint Playroom'; @endphp
    <div class="col-12 text-center pt-3 d-none d-md-block">
        <div class="row justify-content-center">
            <a class="btn-green-underline mt-0 m-0 mr-2 modal-cursor-disable" style="padding: 5px 37px 4px !important;" rel="modal:open" href="{{route('modal-get-project-price-room-green-mint-playroom')}}"><span><b>GET PROJECT PRICE</b></span></a>
            <a class="btn-green-underline mt-0 m-0 ml-2 talk-with-us" style="padding: 5px 25px 4px !important;cursor:pointer; color: white;"><span><b>TALK WITH A DESIGNER</b></span></a>
        </div>
    </div>
    <div class="col-12 text-center pt-3 d-block d-md-none">
        <div class="col-12 p-0">
            <a class="btn-green-underline m-0 modal-cursor-disable" style="padding: 5px 37px 4px !important;" rel="modal:open" href="{{route('modal-get-project-price-room-green-mint-playroom')}}"><span><b>GET PROJECT PRICE</b></span></a>
        </div>
        <div class="col-12 p-0 pt-2">
            <a class="btn-green-underline m-0 talk-with-us" style="padding: 5px 25px 4px !important;cursor:pointer; color: white;"><span><b>TALK WITH A DESIGNER</b></span></a>
        </div>
    </div>
</div>

<div class="container-fluid p-0 pb-2 pt-4 ">
    {{-- <div class="col-12 ">
        <h2 class="col-12 name_title text-center mb-0 text-uppercase"><span>Dreamhouse Adventures Bedroom</span></h2>
    </div> --}}
    <div class="row pt-2 m-0">
        <div class="col-12 col-md-6 p-0 pr-0 pr-md-1 pb-2">
            <img src="/img/our-houses/new/the-multiverse-bedroom/banner-1.jpg" class="img-fluid w-100">
            <div class="col-12 p-0 position-absolute moodboards-title" style="z-index:10;">
                <h2 class="col-12 name_title text-center mb-0"><span>INSPIRATION MOODBOARD</span></h2>
            </div>
        </div>
        <div class="col-12 col-md-6 p-0 pl-0 pl-md-1 pb-2">
            <img src="/img/our-houses/new/the-multiverse-bedroom/banner-2.jpg" class="img-fluid w-100">
        </div>
        <div class="col-12 p-0">
            <img src="/img/our-houses/new/the-multiverse-bedroom/banner-3.jpg" class="img-fluid w-100 d-none d-md-block">
            <img src="/img/our-houses/new/the-multiverse-bedroom/banner-3-m.jpg" class="img-fluid w-100 d-block d-md-none">
        </div>
    </div>
</div>

<div class="container-fluid pb-2">
    <h2 class="col-12 category_name_title text-center mb-0"><span>GET THE LOOK</span></h2>
    <div class="row pt-2 ">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
          <div class="product_thumb py-4 px-3">
              <img src="/img/products/thumbnails/mogli-playhouse-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
              
              <div class="product--title">
                  <span class="name">MOGLY PLAYHOUSE</span>
                  <span class="sub_category">bed/gym</span>
              </div>

              <div class="col-12 clearfix position-relative mt-1 p-0">
                  <div class="slideToggle">
                      <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/mogli-playhouse"><span>GET
                              <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                  </div>
              </div>

              <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
              </div>
              
              <div class="product-box--content">
                      <div>
                          <a href="https://www.circu.net/products/mogli-playhouse">
                              <img src="/img/products/thumbnails-covers/mogli-playhouse-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                          </a>
                      </div>
                  <div class="col-12 clearfix position-relative mt-3 p-0">
                      <div class="slideToggle">
                          <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/mogli-playhouse"><span>GET
                                  <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                      </div>
                  </div>
              </div>

          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
          <div class="product_thumb py-4 px-3">
              <img src="/img/products/thumbnails/illusion-table-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
              
              <div class="product--title">
                  <span class="name">ILLUSION</span>
                  <span class="sub_category">table</span>
              </div>

              <div class="col-12 clearfix position-relative mt-1 p-0">
                  <div class="slideToggle">
                      <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/illusion-table"><span>GET
                              <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                  </div>
              </div>

              <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
              </div>
              
              <div class="product-box--content">
                      <div>
                          <a href="https://www.circu.net/products/illusion-table">
                              <img src="/img/products/thumbnails-covers/illusion-table-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                          </a>
                      </div>
                  <div class="col-12 clearfix position-relative mt-3 p-0">
                      <div class="slideToggle">
                          <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/illusion-table"><span>GET
                                  <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                      </div>
                  </div>
              </div>

          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
          <div class="product_thumb py-4 px-3">
              <img src="/img/products/thumbnails/lotus-armchair-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
              
              <div class="product--title">
                  <span class="name">LOTUS</span>
                  <span class="sub_category">armchair</span>
              </div>

              <div class="col-12 clearfix position-relative mt-1 p-0">
                  <div class="slideToggle">
                      <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/lotus-armchair"><span>GET
                              <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                  </div>
              </div>

              <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
              </div>
              
              <div class="product-box--content">
                      <div>
                          <a href="https://www.circu.net/products/lotus-armchair">
                              <img src="/img/products/thumbnails-covers/lotus-armchair-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                          </a>
                      </div>
                  <div class="col-12 clearfix position-relative mt-3 p-0">
                      <div class="slideToggle">
                          <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/lotus-armchair"><span>GET
                                  <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                      </div>
                  </div>
              </div>

          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
          <div class="product_thumb py-4 px-3">
              <img src="/img/products/thumbnails/cloud-shelf-small-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
              
              <div class="product--title">
                  <span class="name">CLOUD SMALL</span>
                  <span class="sub_category">shelf</span>
              </div>

              <div class="col-12 clearfix position-relative mt-1 p-0">
                  <div class="slideToggle">
                      <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-shelf-small"><span>GET
                              <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                  </div>
              </div>

              <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
              </div>
              
              <div class="product-box--content">
                      <div>
                          <a href="https://www.circu.net/products/cloud-shelf-small">
                              <img src="/img/products/thumbnails-covers/cloud-shelf-small-circu-magical-furniture.png" width="500" height="420" alt="" class="img-fluid">
                          </a>
                      </div>
                  <div class="col-12 clearfix position-relative mt-3 p-0">
                      <div class="slideToggle">
                          <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/cloud-shelf-small"><span>GET
                                  <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                      </div>
                  </div>
              </div>

          </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 pb-2">
    <div class="row pt-2 m-0">
        <div class="col-12 col-md-6 p-0 pr-0 pr-md-1 pb-2">
            <img src="/img/our-houses/new/the-multiverse-bedroom/banner-4.jpg" class="img-fluid w-100">
            {{-- <div class="col-12 p-0 position-absolute moodboards-title" style="z-index:10;">
                <h2 class="col-12 name_title text-center mb-0"><span>INSPIRATION MOODBOARD</span></h2>
            </div> --}}
        </div>
        <div class="col-12 col-md-6 p-0 pl-0 pl-md-1 pb-2">
            <img src="/img/our-houses/new/the-multiverse-bedroom/banner-5.jpg" class="img-fluid w-100">
        </div>
        <div class="col-12 ">
            <h2 class="col-12 name_title text-center mb-0 text-uppercase"><span>THE MULTIVERSE BEDROOM</span></h2>
        </div>
        <div class="col-12 p-0">
            <img src="/img/our-houses/new/the-multiverse-bedroom/banner-6.jpg" class="img-fluid w-100 d-none d-md-block">
            <img src="/img/our-houses/new/the-multiverse-bedroom/banner-6-m.jpg" class="img-fluid w-100 d-block d-md-none">
        </div>

    </div>
</div>
<div class="container-fluid pb-2">
    <h2 class="col-12 category_name_title text-center mb-0"><span>GET THE LOOK</span></h2>
    <div class="row pt-2 ">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3">
                <img src="/img/products/thumbnails/animal-stool-elephant-circu-magical-furniture.png" width="960" height="800" class="img-fluid">

                <div class="product--title">
                    <span class="name">ELEPHANT STOOL</span>
                    <span class="sub_category">stool</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/animal-stool-elephant"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
                </div>
                <div class="product-box--content">
                    <div>
                        <a href="https://www.circu.net/products/animal-stool-elephant">
                            <img src="/img/products/thumbnails-covers/animal-stool-elephant-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/animal-stool-elephant"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3">
                <img src="/img/products/thumbnails/illusion-chair-white-bear-circu-magical-furniture.png" width="960" height="800" class="img-fluid">

                <div class="product--title">
                    <span class="name">ILLUSION WHITE BEAR</span>
                    <span class="sub_category">chair</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/illusion-chair-white-bear"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
                </div>
                <div class="product-box--content">
                    <div>
                        <a href="https://www.circu.net/products/illusion-chair-white-bear">
                            <img src="/img/products/thumbnails-covers/illusion-chair-white-bear-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/illusion-chair-white-bear"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3">
                <img src="/img/products/thumbnails/periwinkle-wall-lamp-circu-magical-furniture.png" width="960" height="800" class="img-fluid">

                <div class="product--title">
                    <span class="name">PERIWINKLE</span>
                    <span class="sub_category">wall lamp</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/periwinkle-wall-lamp"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
                </div>
                <div class="product-box--content">
                    <div>
                        <a href="https://www.circu.net/products/periwinkle-wall-lamp">
                            <img src="/img/products/thumbnails-covers/periwinkle-wall-lamp-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/periwinkle-wall-lamp"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 product-box">
            <div class="product_thumb py-4 px-3">
                <img src="/img/products/thumbnails/the-rhinos-troupe-round-rug-circu-magical-furniture.png" width="960" height="800" class="img-fluid">

                <div class="product--title">
                    <span class="name">THE RHINO’S TROUPE ROUND</span>
                    <span class="sub_category">rug</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/the-rhinos-troupe-round-rug"><span>GET
                                <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new.png">
                </div>
                <div class="product-box--content">
                    <div>
                        <a href="https://www.circu.net/products/the-rhinos-troupe-round-rug">
                            <img src="/img/products/thumbnails-covers/the-rhinos-troupe-round-rug-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0" href="https://www.circu.net/includes/modal-product-price/the-rhinos-troupe-round-rug"><span>GET
                                    <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0 pt-2 pb-2">
    <div class="col-12 p-0">
        <p class="col-12 texto_room text-center mb-0 px-3 px-md-0 pb-2 pb-md-0"><span>Circu's Designers are ready to help you create your own magical kid's room.<br>Contact us today to know more about out Interior Design Service.</span></p>
    </div>
    <div class="col-12 text-center pt-2">
        <a class="btn-green-underline mt-0 " href="https://www.circu.net/interior-design-service"><span><b>BOOK NOW YOUR FREE CONSULTATION</b></span></a>
    </div>
</div>
<div class="container-fluid p-0 pb-2 pt-4">
    <div class="col-12 ">
        <h2 class="col-12 name_title text-center mb-0"><span>SEE ALL MAGICAL KIDS BEDROOMS AND PLAYGROUNDS</span></h2>
    </div>
</div>
<div class="container-fluid p-0">
    <div class="row m-0">
        <!-- SLIDE DESKTOP -->
        <div class="col-12 owl-rooms owl-carousel owl-slide owl-theme p-0 position-relative ">
            <div class="item">
                <a href="{{route('spaceman-room')}}">
                    <img src="/img/our-houses/new/banners-rooms/1.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>GOODNIGHT SPACEMAN</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="https://www.caffelattehome.com/an-exceptional-contemporary-modern-16-million-penthouse-in-monaco/" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/2.jpg" width="800" height="900" alt="New Products Collection" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>INSIDE THE CLOUDS</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.covethouse.eu/modern-eclectic-home-decor-by-ptang-studio-limited-and-covet-house/" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/3.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>BUBBLE GUM</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/a-room-above-the-clouds" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/a-room-above-the-clouds.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>A ROOM ABOVE THE CLOUDS</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/dreamhouse-adventures-bedroom" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/16.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>DREAMHOUSE ADVENTURE BEDROOM</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/candyland-playroom" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/15.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>CANDYLAND PLAYROOM</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.covethouse.eu/high-end-contemporary-condo-in-los-angeles-rooms/?vrnotaccess=vrtour&utm_source=website&utm_medium=pagproduct&utm_content=circu-ourmagicalrooms&utm_campaign=ourmagicalrooms" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/14.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE RISING STAR</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/an-undersea-adventure-by-bymura" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/13.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>AN UNDERSEA ADVENTURE BY BYMURA</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/an-outer-space-mission-room" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/12.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>AN OUTER SPACE MISSION</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.covethouse.eu/opulent-modern-classic-villa-in-riyadh/?utm_source=website&utm_medium=banner&utm_content=circu-chourhouses-opulentriyadh&utm_campaign=ourmagicalrooms" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/11.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>IN A CLOUDY SKY, BE A GOLDEN STAR</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.covethouse.eu/millionaires-modern-apartment-in-nyc/?utm_source=website&utm_medium=endbanner&utm_content=circu-newcovetnyc&utm_campaign=ourmagicalrooms" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/10.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>MILLIONAIRES MODERN APARTMENT IN NYC</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="{{route('jungle-fun')}}">
                    <img src="/img/our-houses/new/banners-rooms/4.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>JUNGLE FUN</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/our-magical-boy-room">
                    <img src="/img/our-houses/new/banners-rooms/5.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE-BOY</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.covethouse.eu/modern-eclectic-home-decor-by-ptang-studio-limited-and-covet-house/" target="_blank">
                    <img src="/img/our-houses/new/banners-rooms/6.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>ROAD TRIP</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/our-magical-girl-room">
                    <img src="/img/our-houses/new/banners-rooms/7.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>LITTLE-GIRL</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>DISCOVER MORE</span></h2>
                    </div>
                </a>
            </div>
            <div class="item">

                <img src="/img/our-houses/new/banners-rooms/8.jpg" width="800" height="900" alt="Circu Magical World" class="cd-dot img-fluid" style="width:100% !important;">
                <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:3.7%;">
                    <h2 class="col-12 category_name_room_title text-center mb-0 pb-1" style="color:white !important; "><span>GRAPHIC</span></h2>
                    <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>COMING SOON</span></h2>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-2" style="clear:both;">
    <div class="row pb-2">
        <div class="col-12 col-lg-8 p-0 d-block d-lg-none" style="background-color:#9bb1c9;">
            <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-1">
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
                <img src="/img/home/bg-banner-ebook.jpg" style="width:100%;" class="img-fluid d-none d-lg-block">
            </div>
            <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%; transform: translate(0,-50%);">
                @include('includes.middle.form-catalogue-2022')
            </div>
        </div>
        <div class="col-12 col-lg-4 p-0">
            <a rel="modal:open" class="modal-cursor-disable" href="{{route('modal-download-pricelist-our-houses')}}">
                <img src="/img/our-houses/banner-pricelist.jpg" alt="Pricelist Our Houses 2021" width="800" height="800" class="img-fluid" style="width: 100% !important;">
            </a>
        </div>
    </div>
</div>
@include('includes.menu-visual-new')
@endsection

@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script>
    $('.talk-with-us').click(function() {
        SnapEngage.startLink();
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
    $('.talk-with-us').click(function() {
        SnapEngage.startLink();
    });
    jQuery('.form-access-vt input[name="email"]').on('change', function() {
        jQuery('.formvisible').css('display', 'block');
    });
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

    $('.owl-rooms').owlCarousel({
        loop: true,
        margin: 3,
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
                items: 3
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
            $('.get-img-height-width').css('height', $('.give-img-height-width').height() - 0.50);
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
            $('.get-img-height-width').css('height', $('.give-img-height-width').height() - 0.50);
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