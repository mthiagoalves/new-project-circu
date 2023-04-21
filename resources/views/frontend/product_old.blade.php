@extends('layouts.master')
@section('meta')
<title>{{ $product->name }} {{ $product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name }} - Circu Magical Furniture</title>
<meta name="description" content="{{ $product->meta_description }}" />
<meta name="keywords" content="{{ $product->key_words }}" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="{{ strtoupper($product->name) }} {{ $product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name }} - Circu Magical Furniture" />
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
<!-- <link rel="stylesheet" type="text/css" href="/css/slick.css"/> -->
<style>
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
</style>

@endsection

@section('main-content')

<div class="container max-width-site my-3">

  <div class="row">

    <div class="col-12 col-lg-7 product-slide">
      <div class="row">
        <div class="col-2 product-slide--nav d-none d-lg-inline-block text-center">
          @if((!$samples->isEmpty()))
          @foreach($samples as $sample)
          @php
          $directory = './img/products/'.$product->slug.'/details/'.$sample->slug.'/';
          $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
          @endphp
          @for($i = 1; $i <= $filecount; $i++) @if(file_exists('./img/products/'.$product->slug.'/details/'.$sample->slug.'/'.$product->slug.'-circu-magical-furniture-'.$sample->slug.'-'.$i.'.gif')) <div><img src="/img/products/{{$product->slug}}/details/{{$sample->slug}}/{{$product->slug}}-circu-magical-furniture-{{$sample->slug}}-{{$i}}.gif" class="img-fluid" /></div>
            @else
            <div><img src="/img/products/{{$product->slug}}/details/{{$sample->slug}}/{{$product->slug}}-circu-magical-furniture-{{$sample->slug}}-{{$i}}.jpg" class="img-fluid" /></div>
            @endif
            @endfor
            @endforeach
            @else
            @php
            $directory = './img/products/'.$product->slug.'/details/';
            $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
            @endphp
            @for($i = 1; $i <= $filecount; $i++) @if(file_exists('./img/products/'.$product->slug.'/details/'.$product->slug.'-circu-magical-furniture-'.$i.'.gif')) <div><img src="/img/products/{{$product->slug}}/details/{{$product->slug}}-circu-magical-furniture-{{$i}}.gif" class="img-fluid" />
              </div>
              @else
              <div><img src="/img/products/{{$product->slug}}/details/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" class="img-fluid" /></div>
              @endif
              @endfor
              @endif

              <!-- ambiences -->
              @php
              $directory = './img/products/'.$product->slug.'/details/ambiences/';
              $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
              @endphp
              @for($i = 1; $i <= $filecount; $i++) @if(file_exists('./img/products/'.$product->slug.'/details/ambiences/'.$product->slug.'-circu-magical-furniture-'.$i.'.jpg')) <div><img src="/img/products/{{$product->slug}}/details/ambiences/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" class="img-fluid" />
                </div>
                @endif
                @endfor
                <!-- details -->
                @php
                $directory = './img/products/'.$product->slug.'/details/more/';
                $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                @endphp
                @for($i = 1; $i <= $filecount; $i++) @if(file_exists('./img/products/'.$product->slug.'/details/more/'.$product->slug.'-circu-magical-furniture-'.$i.'.jpg')) <div><img src="/img/products/{{$product->slug}}/details/more/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                  </div>
                  @endif
                  @endfor
        </div>

        <div class="col-12 col-lg-10 product-slide--details" itemscope itemtype="http://schema.org/ImageGallery">
          @if((!$samples->isEmpty()))
          @foreach($samples as $sample)
          @php
          $directory = './img/products/'.$product->slug.'/details/'.$sample->slug.'/';
          $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
          @endphp
          @for($i = 1; $i <= $filecount; $i++) @if(file_exists('./img/products/'.$product->slug.'/details/'.$sample->slug.'/'.$product->slug.'-circu-magical-furniture-'.$sample->slug.'-'.$i.'.gif')) <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-sample="{{$sample->slug}}">
              <a href="/img/products/{{$product->slug}}/zoom/{{$sample->slug}}/{{$product->slug}}-circu-magical-furniture-{{$sample->slug}}-{{$i}}.gif" itemprop="contentUrl" data-size="1679x1108">
                <img src="/img/products/{{$product->slug}}/details/{{$sample->slug}}/{{$product->slug}}-circu-magical-furniture-{{$sample->slug}}-{{$i}}.gif" itemprop="thumbnail" alt="Image description" class="img-fluid" />
              </a>
            </figure>
            @else
            <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-sample="{{$sample->slug}}">
              <a href="/img/products/{{$product->slug}}/zoom/{{$sample->slug}}/{{$product->slug}}-circu-magical-furniture-{{$sample->slug}}-{{$i}}.jpg" itemprop="contentUrl" data-size="1679x1108">
                <img src="/img/products/{{$product->slug}}/details/{{$sample->slug}}/{{$product->slug}}-circu-magical-furniture-{{$sample->slug}}-{{$i}}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
              </a>
            </figure>
            @endif
            @endfor
            @endforeach
            @else
            @php
            $directory = './img/products/'.$product->slug.'/details/';
            $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
            @endphp
            @for($i = 1; $i <= $filecount; $i++) @if(file_exists('./img/products/'.$product->slug.'/details/'.$product->slug.'-circu-magical-furniture-'.$i.'.gif')) <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="/img/products/{{$product->slug}}/zoom/{{$product->slug}}-circu-magical-furniture-{{$i}}.gif" itemprop="contentUrl" data-size="1679x1108">
                  <img src="/img/products/{{$product->slug}}/details/{{$product->slug}}-circu-magical-furniture-{{$i}}.gif" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                </a>
              </figure>
              @else
              <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="/img/products/{{$product->slug}}/zoom/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" itemprop="contentUrl" data-size="1679x1108">
                  <img src="/img/products/{{$product->slug}}/details/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                </a>
              </figure>
              @endif
              @endfor
              @endif

              <!-- ambiences -->
              @php
              $directory = './img/products/'.$product->slug.'/details/ambiences/';
              $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
              @endphp
              @for($i = 1; $i <= $filecount; $i++) @if(file_exists('./img/products/'.$product->slug.'/details/ambiences/'.$product->slug.'-circu-magical-furniture-'.$i.'.jpg')) <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                  <a href="/img/products/{{$product->slug}}/zoom/ambiences/{{$product->slug}}-circu-magical-furniture-{{$i}}.png" itemprop="contentUrl" data-size="1679x1108">
                    <img src="/img/products/{{$product->slug}}/details/ambiences/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                  </a>
                </figure>
                @endif
                @endfor

                <!-- details -->
                @php
                $directory = './img/products/'.$product->slug.'/details/more/';
                $filecount = count(glob($directory . '*.{jpg,gif}', GLOB_BRACE));
                @endphp
                @for($i = 1; $i <= $filecount; $i++) @if(file_exists('./img/products/'.$product->slug.'/details/more/'.$product->slug.'-circu-magical-furniture-'.$i.'.jpg')) <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                    <a href="/img/products/{{$product->slug}}/zoom/more/{{$product->slug}}-circu-magical-furniture-{{$i}}.png" itemprop="contentUrl" data-size="1679x1108">
                      <img src="/img/products/{{$product->slug}}/details/more/{{$product->slug}}-circu-magical-furniture-{{$i}}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid" />
                    </a>
                  </figure>
                  @endif
                  @endfor
        </div>

        <img src="/img/icons/zoom-icon.png" id="zoom_icon" class="position-absolute" style="top:1rem;right:1.8rem;z-index:9;" width="30" height="30">
      </div>
    </div><!-- product-slide -->

    <div class="col-12 col-lg-5 product-details mt-3">

      <div class="row">

        <div class="col-12">

          @if((!$samples->isEmpty()))
          <div class="product-samples d-block d-lg-none mb-4">
            <h6 class="heading-secondary mt-4">PRODUCT OPTIONS</h6>
            @foreach($samples as $sample)
            <a class="trigger-opt-item {{ $loop->first ?  'fcurrent' : '' }} position-relative"><img src="/img/icons/finishes/{{$sample->slug}}-sm.png" width="24" height="24" alt="" data-target="{{$sample->slug}}" data-product="{{$product->slug}}" class="img-fluid mr-1"><span class="custom-check">&#10003;</span></a>
            @endforeach
          </div>
          @endif

          <div class="product-details__intro clearfix col mb-3 p-0">
            <div class="float-left">
              <h1 class="product-details__name">{{ $product->name }}</h1>
              <h2 class="product-details__category">
                {{ $product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name }}
              </h2>
              @if($product->is_limited == true)
              <span class="product-details__le">Limited Edition</span>
              @endif
              <span class="product-details__copyright mt-3">Registered Design ® | Patent Pending ℗ </span>
            </div>

            <!-- floating bar -->
            <div class="product-details__stock text-center float-right print-d-none d-none d-lg-block">
              @if($product->product_shop->external_shop_url != "")
              <a class="btn btn--primary-grey d-flex justify-items-center" href="{{$product->product_shop->external_shop_url}}?utm_source=website&utm_medium=pagproduct&utm_content=circu-shopnow&utm_campaign=onlinestore" target="_blank"><img src="/img/icons/shop-cart.png" class="img-fluid" width="18" height="18"><span>&nbsp; SHOP NOW <i class="fas fa-caret-right"></i></span></a>
              @else
              <a rel="modal:open" class="btn btn--primary-green modal-cursor-disable" href="{{route('modal-product-order', ['name' => $product->slug] )}}"><span>ORDER NOW <i class="fas fa-caret-right"></i></span></a>
              @endif

            </div><!-- product-details__stock -->

          </div><!-- product-details__intro -->

          @if(($product->slug == "booboo-swing") || ($product->slug == "booboo-suspension-sofa") || ($product->slug == "nodo-suspension-chair"))
          <div class="product-details__description mb-4">
            <p class="highlight_text mb-1 d-inline"><i>in partnership with:</i></p>
            <a href="https://www.myface.eu/" target="_blank"><img src="/img/icons/myface-logo.jpg" class="img-fluid" width="100" alt="MyFace"></a>
          </div><!-- product-details__description -->
          @elseif(($product->slug == "hoot-stool"))
          <div class="product-details__description mb-4">
            <p class="highlight_text mb-1 d-inline"><i>in partnership with:</i></p>
            <a href="https://hoot.pt/" target="_blank"><img src="/img/icons/hoot-logo.jpg" class="img-fluid" width="100" alt="Hoot"></a>
          </div><!-- product-details__description -->
          @endif

          <div class="product-details__description mb-3">
            <h6 class="heading-secondary heading-w-b-border">PRODUCT DETAILS</h6>
            <div>{!! $product->product_languages[0]->description !!}</div>
          </div><!-- product-details__description -->

          <div class="product-details__actions mb-3 print-d-none col-12 col-lg-10">
            @php $product_name = $product->name.' '.$product->sub_category->sub_category_languages->where('language_id', '=', '1')->first()->name @endphp

            <div class="row">
              <div class="col-12 block px-1">
                <a rel="modal:open" class="btn btn--primary-green w-100 mb-1 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET PRICE <i class="fas fa-caret-right"></i></span></a>
              </div>

              <div class="col-12 col-sm-6 block px-1 my-1">
                <a rel="modal:open" class="btn btn--primary-grey w-100 modal-cursor-disable" href="{{route('modal-product-info', ['name' => $product->slug] )}}"><span>GET INFO <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
              </div>

              <div class="col-12 col-sm-6 block px-1 my-1">
                <a rel="modal:open" class="btn btn--primary-grey w-100 modal-cursor-disable" href="{{route('modal-product-sheet', ['product' => $product->slug] )}}"><img src="/img/icons/product-sheet.png" class="img-fluid" width="18" height="18"><span>&nbsp;PRODUCT SHEET <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
              </div>

              <div class="col-12 col-sm-6 block px-1 my-1">
                <a rel="modal:open" class="btn btn--primary-grey w-100 modal-cursor-disable" href="{{route('modal-3d-product', ['product' => $product->slug] )}}"><img src="/img/icons/model-3d.png" class="img-fluid" width="18" height="18"><span>&nbsp; REQUEST 3D <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
              </div>

              <div class="col-12 col-sm-6 block px-1 my-1">
                <a class="btn btn--primary-grey w-100" href="{{route('finishes')}}" target="_blank"><span>REQUEST SAMPLES <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
              </div>
              <div class="col-12  px-1 my-1">
                <a class="btn btn--primary-grey w-100 talk-with-us" target="_blank"><span>TALK WITH A DESIGNER <i class="fas fa-caret-right float-right" style="margin-top:2px;"></i></span></a>
              </div>
            </div>

          </div><!-- product-details__actions -->

          @if((!$samples->isEmpty()))
          <div class="product-samples d-none d-lg-block">
            <h6 class="heading-secondary mt-4">PRODUCT OPTIONS</h6>
            @foreach($samples as $sample)
            <a class="trigger-opt-item {{ $loop->first ?  'fcurrent' : '' }} position-relative"><img src="/img/icons/finishes/{{$sample->slug}}-sm.png" width="24" height="24" alt="" data-target="{{$sample->slug}}" data-product="{{$product->slug}}" class="img-fluid mr-1"><span class="custom-check">&#10003;</span></a>
            @endforeach
          </div>
          @endif

        </div>

        <div class="col-12 text-left product_options position-relative print-d-none pt-4">
          <h6 class="heading-secondary mt-4">MAY WE HELP?</h6>
          <p class="d-inline print-on-click"><img src="/img/icons/social/print.png" alt="" width="18" height="18"> Print</p>
          <div class="social-share d-inline">
            <ul class="a2a_kit">
              <li>&nbsp;<i class="fa fa-share-alt"></i>&nbsp;</li>
              <li><a class="a2a_button_email"><img src="/img/icons/social/email.png" alt="share on email"></a>&nbsp;</li>
              <li><a class="a2a_button_whatsapp"><img src="/img/icons/social/whatsapp.png" alt="share on whatsapp"></a></li>
              <li><a class="a2a_button_facebook"><img src="/img/icons/social/facebook.png" alt="share on facebook"></a></li>
              <li><a class="a2a_button_pinterest"><img src="/img/icons/social/pinterest.png" alt="share on pinterest"></a></li>
            </ul>
          </div>
        </div>

      </div>

    </div><!-- product-details -->

  </div>

</div>

 <!-- @foreach($best_sellers as $best_seller)
@if($best_seller->slug == $product->slug)
<div class="container-fluid p-0 my-2 d-none d-md-block">
  <div class="row p-0 m-0">
    <div class="col-12 owl-ambients2 owl-carousel owl-slide owl-theme p-0 position-relative">
      @php
      $filecount_best_seller = $_SERVER['DOCUMENT_ROOT']."/img/products/{{$product->slug}}/best-seller/slide/desktop/";
      $filecount_best_seller = count(glob($filecount_best_seller . '*.{jpg}', GLOB_BRACE));
      @endphp

      @php
      $filecount_best_seller2 = $_SERVER['DOCUMENT_ROOT']."/img/products/{{$product->slug}}/best-seller/slide/mobile/";
      $filecount_best_seller2 = count(glob($filecount_best_seller2 . '*.{jpg}', GLOB_BRACE));
      @endphp

      @if($filecount_best_seller <=2)
        @for($i = 1; $i <= $filecount_best_seller; $i++) 
          <div class="item col-12 p-0 img-size-slide">
            <div class="col-12 col-6 p-0 float-left">
              <img src="/img/products/{{$product->slug}}/best-seller/slide/desktop/{{$product->slug}}-{{$i}}.jpg" class="img-fluid" style="width: 100%;">
            </div>
          </div>
        @endfor
      @else
        @for($i = 1; $i <= $filecount_best_seller; $i++) 
          <div class="item col-12 p-0 ">
            <div class="col-12 p-0 float-left">
              <img src="/img/products/{{$product->slug}}/best-seller/slide/desktop/{{$product->slug}}-{{$i}}.jpg" class="img-fluid" style="width: 100%;">
            </div>
          </div>
        @endfor
      @endif
      
  </div>
</div>
</div> -->

<!-- <div class="container-fluid text-center p-0 swiper-ambients mb-5">

  <div class="col-12 swiper-container ">
    <div class="swiper-wrapper">
      @php
      $directory = $_SERVER['DOCUMENT_ROOT']."/img/products/{{$product->slug}}/best-seller/slide/desktop/";
      $filecount = count(glob($directory . '*.{jpg}', GLOB_BRACE));
      @endphp

      @php
      $directory2 = $_SERVER['DOCUMENT_ROOT']."/img/products/{{$product->slug}}/best-seller/slide/mobile/";
      $filecount2 = count(glob($directory2 . '*.{jpg}', GLOB_BRACE));
      @endphp


      @for($i = 1; $i <= $filecount; $i++) 
       <div class="swiper-slide bigImages d-none d-md-block">

        <img src="/img/products/{{$product->slug}}/best-seller/slide/desktop/{{$product->slug}}-{{$i}}.jpg" alt="Image description" class="img-fluid img-slide d-none d-md-block">

    </div> 
    <div class="swiper-slide bigImages slider-main" itemscope itemtype="http://schema.org/ImageGallery">
      <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-sample="">
        <a href="/img/products/{{$product->slug}}/best-seller/zoom/{{$product->slug}}-{{$i}}.png" itemprop="contentUrl" data-size="1679x1108">
          <img src="/img/products/{{$product->slug}}/best-seller/slide/desktop/{{$product->slug}}-{{$i}}.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid d-none d-md-block" />
          <img src="/img/products/{{$product->slug}}/best-seller/slide/mobile/{{$product->slug}}-{{$i}}-m.jpg" itemprop="thumbnail" alt="Image description" class="img-fluid d-block d-md-none" />
        </a>
      </figure>
    </div>


    @endfor


  </div>
  <div class="swiper-button-prev arrow-banners"></div>
  <div class="swiper-button-next arrow-banners"></div>

</div>

</div> -->
<!-- @else
@endif
@endforeach  -->

<div class="container-fluid">

  <div class="row">

    @if(session('message'))
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

    <div class="tab-content col-12 col-lg-10 offset-lg-1 py-3" id="firstTabContent">

      <div class="tab-pane fade show active print-margin-x" id="additional_info" role="tabpanel" aria-labelledby="additional_info-tab">
        <div class="row">
          <div class="col-12 col-md-4 product_technical">
            {!! $product->product_languages[0]->tec_info !!}
          </div>
          <div class="col-12 col-md-4 product_technical">
            {!! $product->product_languages[0]->dimensions !!}
          </div>
          @php
          $directory = $_SERVER['DOCUMENT_ROOT']."/img/products/".$product->slug."/".$product->slug."-human-scale";
          $filecount = count(glob($directory . '*.{jpg}', GLOB_BRACE));
          @endphp
          @if($filecount == 1)
          <div class="col-12 col-md-4 text-center">
            <img data-src="/img/products/{{$product->slug}}/{{$product->slug}}-human-scale.jpg" class="img-fluid" width="400" height="250" alt="" srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=">
          </div>
          @else
          @endif
        </div>
      </div>

      <div class="tab-pane fade print-d-none" id="download_area" role="tabpanel" aria-labelledby="download_area-tab">

        <div class="row">

          <div class="col-12 col-xl-9">
            <!-- form -->
            @include('includes.form-product.form-product-downloads')
            <!-- -->
          </div>

          <div class="d-none d-xl-block col-xl-3">
            <img data-src="/img/icons/product-page-download-catalogue.jpg" alt="" srcset="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" width="360" height="360" class="img-fluid mt-5">
          </div>

        </div>

      </div>

      <div class="tab-pane fade print-d-none" id="talk_with" role="tabpanel" aria-labelledby="talk_with-tab">
        <div class="row">

          <div class="col-12 col-lg-6 product_custom">
            <p><b>CUSTOMIZATION</b> <br>Circu prouds itself of offering a wide range of finishes, allowing you to costumize the products to your taste. Keep in mind that any changes must be made while contacting the brand's representatives and upcharges may be added.</p>
            <p><b>BESPOKE</b> <br>For a bespoke project, you must fill up a form stating the type of project that you're seeking so the brand can argue if it is possible to create it or not. Above all, security protocols must always be respected and followed. </p>
          </div>

          <div class="col-12 col-lg-6">
            <!-- form -->
            @include('includes.form-product.form-product-customization')
            <!-- -->
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

<div class="container-fluid print-d-none mb-2">

  <div class="row">

    <div class="col-12 col-lg-6">
      <div class="row">
        <h2 class="col-12 category_name_title text-center mb-0"><span>SIMILAR PRODUCTS</span></h2>

        <div class="col-12 owl-more-products owl-carousel owl-slide owl-theme px-0">
          @foreach($product->similar->product_similars as $similar)
          <div class="item product-box">
            <div class="product_thumb py-4">
              <a href="{{ route('product', ['product' => $similar->product->slug]) }}">
                @if(file_exists('./img/products/thumbnails/'.$similar->product->slug.'-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $similar->product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @else
                <img src="/img/products/thumbnails/{{ $similar->product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                @endif

                <div class="product--title">
                  <span class="name">{{ $similar->product->name }} {{ ucwords($similar->product->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                @if( $similar->product->is_new && ($similar->product->slug == "bubble-gum-bed") || ($similar->product->slug == "bubble-gum-bench") || ($similar->product->slug == "bubble-gum-dressing-table") || ($similar->product->slug == "bubble-gum-chest-3-drawers") || ($similar->product->slug == "bubble-gum-chest-2-drawers") || ($similar->product->slug == "bubble-gum-desk") || ($similar->product->slug == "bubble-slide") || ($similar->product->slug == "bubble-loop") || ($similar->product->slug == "bubble-drop") || ($similar->product->slug =="bubble-gum-playground") || ($similar->product->slug == "bubble-gum-big-mirror") || ($similar->product->slug == "bubble-gum-small-mirror") || ($similar->product->slug == "cotton-candy-sofa") || ($similar->product->slug == "rainbow-sofa"))
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                  <img src="/img/icons/product-new-collection.png">
                </div>

                @elseif($similar->product->is_new)
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                  <img src="/img/icons/product-new.png">
                </div>
                @endif
              </a>

              <div class="col-12 clearfix position-relative mt-2 p-0">
                <div class="slideToggle">
                  <a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $similar->product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
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
          @foreach($product->similar->product_matches as $similar)
          <div class="item product-box">
            <div class="product_thumb py-4">
              <a href="{{ route('product', ['product' => $similar->product->slug]) }}">
                @if(file_exists('./img/products/thumbnails/'.$similar->product->slug.'-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $similar->product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @else
                <img src="/img/products/thumbnails/{{ $similar->product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                @endif

                <div class="product--title">
                  <span class="name">{{ $similar->product->name }} {{ ucwords($similar->product->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                @if( $similar->product->is_new && ($similar->product->slug == "bubble-gum-bed") || ($similar->product->slug == "bubble-gum-bench") || ($similar->product->slug == "bubble-gum-dressing-table") || ($similar->product->slug == "bubble-gum-chest-3-drawers") || ($similar->product->slug == "bubble-gum-chest-2-drawers") || ($similar->product->slug == "bubble-gum-desk") || ($similar->product->slug == "bubble-slide") || ($similar->product->slug == "bubble-loop") || ($similar->product->slug == "bubble-drop") || ($similar->product->slug =="bubble-gum-playground") || ($similar->product->slug == "bubble-gum-big-mirror") || ($similar->product->slug == "bubble-gum-small-mirror") || ($similar->product->slug == "cotton-candy-sofa") || ($similar->product->slug == "rainbow-sofa"))
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                  <img src="/img/icons/product-new-collection.png">
                </div>

                @elseif($similar->product->is_new)
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                  <img src="/img/icons/product-new.png">
                </div>
                @endif
              </a>

              <div class="col-12 clearfix position-relative mt-2 p-0">
                <div class="slideToggle">
                  <a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', ['name' => $similar->product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
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
      <a href="{{route('catalogue')}}">
        <img src="/img/home/banner-catalogue.jpg" alt="New Catalogue Circu Magical Furniture" width="800" height="800" class="img-fluid">
      </a>
    </div>
    <div class="col-12 col-md-4 p-0">
      <a href="{{ route('landing-ebook', ['ebook' => 'best-kids-interior-designers']) }}">
        <img src="/img/home/banner-ebook-best-20-kids-interior.gif" alt="Ebook Best Kid's Interior Designers" width="800" height="800" class="img-fluid">
      </a>
    </div>
    <div class="col-12 col-md-4 p-0">
      <a href="/trends" target="_blank">
        <img src="/img/home/banner-moodboards.jpg" alt="Moodboards Circu" width="800" height="800" class="img-fluid">
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

      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>

      <div class="pswp__bottom-bar py-2 align-items-center d-flex">
        <div class="col-6 text-left float-left">
          <h6 class="heading-secondary d-inline mr-1">MAY WE HELP?</h6>
          <p class="d-inline print-on-click"><img src="/img/icons/social/print.png" alt="" width="18" height="18"> Print</p>
          <div class="social-share d-inline">
            <ul class="a2a_kit">
              <li>&nbsp;<i class="fa fa-share-alt"></i>&nbsp;</li>
              <li><a class="a2a_button_email"><img src="/img/icons/social/email.png" alt="share on email"></a>&nbsp;</li>
              <li><a class="a2a_button_whatsapp"><img src="/img/icons/social/whatsapp.png" alt="share on whatsapp"></a></li>
              <li><a class="a2a_button_facebook"><img src="/img/icons/social/facebook.png" alt="share on facebook"></a></li>
              <li><a class="a2a_button_pinterest"><img src="/img/icons/social/pinterest.png" alt="share on pinterest"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-6 text-right float-right">
          <a rel="modal:open" class="btn btn--primary-green w-50 mb-1" href="{{route('modal-product-price', ['name' => $product->slug] )}}" style="margin-right:12%;"><span>GET PRICE <i class="fas fa-caret-right"></i></span></a>
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

<script type="text/javascript">
  $(window).load(function() {
    $("a").removeClass("modal-cursor-disable");
  });
  $('.talk-with-us').click(function() {
    SnapEngage.startLink();
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
      disableOnInteraction: false,
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
  });
  $('.owl-ambients2').owlCarousel({

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
        item:3
      }
    }
  });

  $('.img-size-slide').each(function() {
    var width = $(this).children().children().width();
    var height = $(this).children().children().height();

    if (width > height) {
      $(this).addClass('col-md-6');
    } else {
      $(this).addClass('col-md-3');
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
        items: 3
      }
    }
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
          console.log(index2);

          //$('.slider-main').slick('slickGoTo', index2);
          $('.product-slide--details').slick('slickGoTo', index2);

        });

      };

      // custom slide
      $('.trigger-opt-item').on('click', function(e) {
        $(this).addClass("fcurrent").siblings().removeClass("fcurrent");
        $search_term = $(e.target).attr("data-target");

        var sliders_custom = document.querySelectorAll(`.slick-slide[data-sample='${$search_term}']`);

        $slider_custom_index = sliders_custom[0].attributes['data-slick-index'].value;

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
    initPhotoSwipeFromDOM('.slider-main');
    initPhotoSwipeFromDOM('.product-slide--details');


    $('.print-on-click').click(function() {
      window.print();
    });
    var slickMainFrame = {
      slidesToShow: 1,
      useTransform: false,
      asNavFor: '.product-slide--nav',
      nextArrow: '<span class="lnr lnr-chevron-right" style="font-size:20px;position: absolute;top: 50%;right: 20px;z-index: 99;cursor:pointer;"></span>',
      prevArrow: '<span class="lnr lnr-chevron-left" style="font-size:20px;position: absolute;top: 50%;left: 20px;z-index: 99;cursor:pointer;"></span>',
      autoplaySpeed: 4000,
      speed: 600,
    };
    var slickNav = {
      slidesToShow: 5,
      useTransform: false,
      asNavFor: '.product-slide--details',
      focusOnSelect: true,
      vertical: true,
      verticalSwiping: true,
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
      navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"],
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

    var elm = $('.slider-nav '),
      getSlick = elm.slick('getSlick');

    if (getSlick.slideCount <= getSlick.options.slidesToShow) {
      elm.addClass('slick-no-slide');
    } else {
      elm.removeClass('slick-no-slide');
    }

  });
</script>
@endsection