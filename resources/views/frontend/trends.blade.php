@extends('layouts.master-trends')
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
  .section-menu .outline-3 {
    outline: 3px solid white;
    outline-offset: -3px;
  }

  h2.category_name_title,
  .category_name_title {
    font-family: 'RalewayMedium', sans-serif;
    text-transform: uppercase;
    font-size: 1.1rem;
    letter-spacing: 2px;
    padding: 0.5rem 2rem;
    color: #666666 !important;
    font-weight: normal;
    cursor: pointer;
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
  }

  .product--title .sub_category {
    text-transform: lowercase;
  }

  .slick-slider .slick-track {
    transform: translate3d(0px, 0px, 0px) !important;
  }

  .slick-slide img {
    display: inline-block !important;
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
    -webkit-box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 0px 8px 0px rgba(0, 0, 0, 0.3);
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

  /* slide ambiences */
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

  /* end slide ambiences */

  .section-moodboards .owl-moodboards-products .owl-stage-outer {
    padding-bottom: 0.5em;
    padding-top: 0.5em;
  }

  .section-moodboards .owl-moodboards-products .active:hover {
    z-index: 99;
  }

  .section-moodboards .owl-moodboards .owl-nav {
    top: 30%;
  }

  .section-moodboards .owl-moodboards-products .owl-nav {
    top: 45%;
  }

  .title-moodboards-menu {
    color: white;
    font-weight: 600;
    font-size: 1em;
  }

  .section-moodboards .title-moodboards {
    font-weight: 600;
    font-size: 1em;
    text-transform: uppercase;
    color: #98b9b5;
    margin: 0;
    padding-top: 1em;
  }

  .owl-moodboards-products .slider-button-prev i,
  .owl-moodboards-products .slider-button-next i {
    color: #ababab !important;
  }

  .swiper-button-next::after,
  .swiper-button-prev::after {
    font-size: 22px !important;
    font-weight: bold;
  }

  .swiper-button-next,
  .swiper-button-prev {
    color: #98b9b5 !important;
  }

  .swiper-button-next,
  .swiper-button-prev {
    top: 30% !important;
    color: #98b9b5 !important;
  }

  .swiper-button-prev,
  .swiper-rtl .swiper-button-next {
    left: 35px !important;
    right: auto;
  }

  .swiper-button-next,
  .swiper-rtl .swiper-button-prev {
    right: 35px !important;
    left: auto;
  }
</style>
@endsection

@section('main-content')
<div class="container-fluid p-0 section-menu">
  <div class="row">
    <div class="col-12 col-md-6 p-0 outline-3 scroll-down" data-category="boy" style="cursor:pointer;">
      <img src="/img/trends/menu/boy.jpg" class="img-fluid w-100"></img>
      <div class="col-12 position-absolute text-center" style="bottom:0;">
        <p class="title-moodboards-menu">BOY</p>
      </div>
    </div>
    <div class="col-12 col-md-6 p-0 outline-3 scroll-down" data-category="girl" style="cursor:pointer;">
      <img src="/img/trends/menu/girl.jpg" class="img-fluid w-100"></img>
      <div class="col-12 position-absolute text-center" style="bottom:0;">
        <p class="title-moodboards-menu">GIRL</p>
      </div>
    </div>
    <div class="col-6 col-md-3 p-0 outline-3 scroll-down" data-category="neutral" style="cursor:pointer;">
      <img src="/img/trends/menu/neutral.jpg" class="img-fluid w-100"></img>
      <div class="col-12 position-absolute text-center" style="bottom:0;">
        <p class="title-moodboards-menu">NEUTRAL</p>
      </div>
    </div>
    <div class="col-6 col-md-3 p-0 outline-3 scroll-down" data-category="trendy" style="cursor:pointer;">
      <img src="/img/trends/menu/trendy.jpg" class="img-fluid w-100"></img>
      <div class="col-12 position-absolute text-center" style="bottom:0;">
        <p class="title-moodboards-menu">TRENDY</p>
      </div>
    </div>
    <div class="col-6 col-md-3 p-0 outline-3 scroll-down" data-category="crush" style="cursor:pointer;">
      <img src="/img/trends/menu/crush.jpg" class="img-fluid w-100"></img>
      <div class="col-12 position-absolute text-center" style="bottom:0;">
        <p class="title-moodboards-menu">CRUSH</p>
      </div>
    </div>
    <div class="col-6 col-md-3 p-0 outline-3 scroll-down" data-category="magic" style="cursor:pointer;">
      <img src="/img/trends/menu/magic.jpg" class="img-fluid w-100"></img>
      <div class="col-12 position-absolute text-center" style="bottom:0;">
        <p class="title-moodboards-menu">MAGIC</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid moodboards-swiper py-5 px-0 section-moodboards">
  <div class="row swiper-container">
    <div class="swiper-wrapper">
      @foreach($modboards as $modboard)
      <div class="swiper-slide flex-column filter {{$modboard->article_languages[0]->description}} " data-category="{{$modboard->article_languages[0]->description}}" style="cursor:grab;">
        <img src="/img/trends/all-moodboards/{{$modboard->slug}}.jpg" width="1920" height="700" class="cd-dot img-fluid d-none d-md-block" alt="">
        <img src="/img/trends/all-moodboards/{{$modboard->slug}}-mobile.jpg" width="800" height="900" class="cd-dot img-fluid d-block d-md-none" alt="">
        <div class="col-12 text-center pt-2">
          <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-download-moodboard', ['moodboard' => $modboard->slug] )}}"><span><b>DOWNLOAD NOW</b></span></a>
        </div>
        <p class="title-moodboards">trending products</p>
        <div class="col-12 owl-moodboards-products owl-carousel owl-slide owl-theme p-0 justify-content-center d-flex">
          @foreach($modboard->article_products as $products)
          <div class="item product-box">
            <div class="product_thumb py-4 px-3">
              @if(file_exists('./img/products/thumbnails/'.$products->product->slug.'-circu-magical-furniture.png'))
              <img src="/img/products/thumbnails/{{ $products->product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
              @else
              <img src="/img/products/thumbnails/{{ $products->product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
              @endif

              <div class="product--title">
                <span class="name">{{ $products->product->name }}</span>
                <span class="sub_category">{{ ucwords($products->product->sub_category->sub_category_languages[0]->name) }}</span>
              </div>

              <div class="col-12 clearfix position-relative mt-1 p-0">
                <div class="slideToggle">
                  <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $products->product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                </div>
              </div>

              @if( $products->product->is_new && ($products->product->slug == "bubble-gum-bed") || ($products->product->slug == "bubble-gum-bench") || ($products->product->slug == "bubble-gum-dressing-table") || ($products->product->slug == "bubble-gum-chest-3-drawers") || ($products->product->slug == "bubble-gum-chest-2-drawers") || ($products->product->slug == "bubble-gum-desk") || ($products->product->slug == "bubble-slide") || ($products->product->slug == "bubble-loop") || ($products->product->slug == "bubble-drop") || ($products->product->slug =="bubble-gum-playground") || ($products->product->slug == "bubble-gum-big-mirror") || ($products->product->slug == "bubble-gum-small-mirror") || ($products->product->slug == "cotton-candy-sofa") || ($products->product->slug == "rainbow-sofa"))
              <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                <img src="/img/icons/product-new-collection.png">
              </div>

              @elseif($products->product->is_new)
              <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                <img src="/img/icons/product-new.png">
              </div>

              @endif

              <div class="product-box--content">
                @if($products->product->product_samples->count() > 0 && $products->product->slug != 'dainty-armchair')
                <div class="col-12 slider-for text-center">
                  @foreach($products->product->product_samples as $product_sample)
                  <div>
                    <a href="{{ route('product', ['product' => $products->product->slug]) }}">
                      <img src="/img/products/{{ $products->product->slug }}/finishes/{{ $products->product->slug }}-circu-magical-furniture-{{$product_sample->sample->slug}}.png" width="960" height="800" alt="" class="img-fluid">
                    </a>
                  </div>
                  @endforeach
                </div>
                <div class="col-12 product-samples slider-nav text-center p-0">
                  @foreach($products->product->product_samples as $product_sample)
                  @if($product_sample->is_options == null)
                  <div class="d-inline text-center">
                    <img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid" style="width:20px !important;">
                  </div>
                  @endif
                  @endforeach
                </div>

                @else
                <div>
                  <a href="{{ route('product', ['product' => $products->product->slug]) }}">
                    <img src="/img/products/thumbnails-covers/{{ $products->product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                  </a>
                </div>
                @endif
                <div class="col-12 clearfix position-relative mt-3 p-0">
                  <div class="slideToggle">
                    <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $products->product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                  </div>
                </div>
              </div>

            </div>
          </div>

          @endforeach
        </div>
      </div>
      @endforeach
    </div>
    <div class="swiper-button-next">
      <i class="arrow arrow-right"></i>
    </div>
    <div class="swiper-button-prev">
      <i class="arrow arrow-left"></i>
    </div>
    <p id="no-moodboards" style="display:none;">no moodboards in this category</p>
  </div>
</div>
<div class="container-fluid">
  @include('includes.footer.to-inspire')
</div>



<div class="container-fluid py-2">

  <div class="row d-none d-md-block">
    <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme p-0">
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

<div class="container-fluid p-0 pb-2">
  <div class="col-12 p-0 ">
    <div class="col-12 p-0 ">
      <video id="myVideo1" class="videomy myVideo d-none d-md-block w-100" onloadeddata="this.play();" autoplay="" muted="" loop="" playsinline="" style="position:relative;">
        <source class="d-none d-md-block" src="https://www.circu.net/includes/video/trends-desktop.mp4" loop="" muted="" controls="" autoplay="" type="video/mp4">
        <source class="d-none d-md-block" src="https://www.circu.net/includes/video/trends-desktop.mp4" loop="" muted="" controls="" autoplay="" type="video/webm">
      </video>
      <video id="myVideo1" class="videomy myVideo d-block d-md-none w-100" onloadeddata="this.play();" autoplay="" muted="" loop="" playsinline="" style="position:relative;">
        <source class="d-block d-md-none" src="https://www.circu.net/includes/video/trends-mobile.mp4" loop="" muted="" controls="" autoplay="" type="video/mp4">
        <source class="d-block d-md-none" src="https://www.circu.net/includes/video/trends-mobile.mp4" loop="" muted="" controls="" autoplay="" type="video/webm">
      </video>
      <div class="position-absolute" style="bottom:2%;left:2.5%;">
        <div class="play-video">
          <img class="img-d-none" id="soundimage" style="width: 30px;float: none !important;margin-top: -3px;filter: invert(100%);" src="/img/about/volume-up.svg">
        </div>
      </div>
    </div>
  </div>
</div>

@include('includes.menu-visual-new')
@endsection

@section('footer-includes')
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
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

  var slide = $('.owl-moodboards').owlCarousel({
    loop: false,
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

  $('.owl-moodboards-products').owlCarousel({
    loop: false,
    margin: 1,
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
        items: 4
      }
    }
  });

  $(document).ready(function() {
    $("video").prop('muted', true);

    $("video").click(function() {
      $(this).prop('muted', !$(this).prop('muted'));
    });

    $(".play-video").click(function() {
      $("video").prop('muted', !$("video").prop('muted'));
    });
    var flag = 0;
    $(".play-video").click(function() {
      if (flag == 0) {
        $("#soundimage").attr("src", "/img/about/no-sound.svg");
        flag = 1;
      } else if (flag == 1) {
        $("#soundimage").attr("src", "/img/about/volume-up.svg");
        flag = 0;
      }
    });
  });

  $(document).ready(function() {






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
    $('.slider-for').each(function(num, elem) {
      console.log(num);
      $_this = $(this);
      $_next = $(this).next('.slider-nav');
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
        asNavFor: $_next
      });

      elem.next('.slider-nav').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: $_this,
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
      $(this).prev('.slider-for').slick('slickGoTo', $(this).data('slickIndex'));
    });

    var elm = $('.slider-nav'),
      getSlick = elm.slick('getSlick');

    if (getSlick.slideCount <= getSlick.options.slidesToShow) {
      elm.addClass('slick-no-slide');
    } else {
      elm.removeClass('slick-no-slide');
    }


  });

  var moodboard_swiper = new Swiper('.moodboards-swiper .swiper-container', {
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 5,
    loop: false,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  $(document).on('click', '.scroll-down', function(event) {

    $('.moodboards-swiper .swiper-slide').show();
    $('.moodboards-swiper .swiper-slide').not($('.moodboards-swiper .' + $(this).attr("data-category").replace(' ', '.'))).hide();
    console.log($('.moodboards-swiper .' + $(this).attr("data-category")).length);
    if ($('.moodboards-swiper .' + $(this).attr("data-category")).length == 0) {
      $('#no-moodboards').show();
    } else {
      $('#no-moodboards').hide();
    }

    window.addEventListener('load', () => {
      var moodboard_swiper = new Swiper('.moodboards-swiper .swiper-container', {
        slidesPerView: 1,
        centeredSlides: false,
        spaceBetween: 5,
        loop: false,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        }
      });
    }, false);


    moodboard_swiper.setTranslate(0);
    moodboard_swiper.updateSlides();

    $('html, body').animate({
      scrollTop: $('.section-moodboards').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 15
    }, 1000);

  });
</script>

@endsection