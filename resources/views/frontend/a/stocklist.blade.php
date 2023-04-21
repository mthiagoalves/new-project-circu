@extends('layouts.master')

@section('main-content')

<div class="container-fluid p-0" id="main-slide">
  <div class="row">
    <div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative d-none d-sm-block">
      <div class="item">
        <a href="https://www.circu.net/stocklist?utm_origem=website&utm_meio=topbanner-categoria&utm_conteudo=circu-annual-sale-22&utm_campanha=annualsales">
          <img src="/img/slides/main/stocklist-annual-sale.jpg" alt="Stocklist Annual Sale Circu Magical Furniture" class="d-none d-sm-block">
          <img src="/img/slides/main/stocklist-annual-sale-m.jpg" alt="Stocklist Annual Sale Circu Magical Furniture" class="d-block d-sm-none">
        </a>
      </div>
      <div class="item">
        <a href="https://www.circu.net/our-magical-rooms?utm_origem=website&utm_meio=homeslider&utm_conteudo=circu-the-multiverse-bedroom&utm_campanha=ourmagicalrooms">
          <img src="/img/slides/main/the-multiverse-bedroom.jpg" width="1920" height="800" alt="Summer Sale Stocklist Circu Magical Furniture" class="cd-dot img-fluid" style="width:100% !important;">
        </a>
      </div>

      <!-- <div class="col-12 position-absolute title-banner-rooms d-none d-md-block" style="bottom: 15%;z-index:11;left:2%;">
        <a rel="modal:open" class="modal-cursor-disable" href="https://www.circu.net/includes/modal-download-stocklist">
          <div class="btn-banner-rooms grow">DOWNLOAD STOCKLIST</div>
        </a>
      </div>
      <div class="col-12 position-absolute text-center title-banner-rooms d-block d-md-none" style="bottom: 2%;z-index:11;">
        <a rel="modal:open" class="modal-cursor-disable" href="https://www.circu.net/includes/modal-download-stocklist">
          <div class="btn-banner-rooms grow">DOWNLOAD STOCKLIST</div>
        </a>
      </div> -->
      {{-- <div class="icon-scroll-gif d-none d-md-inline"> --}}


    </div>
  </div>
</div>

<div class="container-fluid pt-2">

  <div class="row">

    @foreach( $all_products as $key => $category)

    @if(count($category) > 0)
    <div class="col-12" id="{{$key}}" style="padding:12px;">
      <a name="{{ $key }}" href="#"></a>
      <h2 class="col-12 category_name_title text-center mb-0"><span>{{ ucwords($key) }}</span></h2>
      </a>
    </div>

    @foreach($category as $product )
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
      <div class="product_thumb py-4">
        @if(file_exists('./img/products/thumbnails/'.$product->slug.'-circu-magical-furniture.png'))
        @if($product->slug == 'rainbow-sofa')
        <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture-pink.png" width="960" height="800" class="img-fluid">
        @else
        <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
        @endif

        @else
        <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
        @endif

        <div class="product--title">
          <span class="name">{{ $product->name }}</span>
          <br class="d-block d-lg-none">
          <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
        </div>

        <div class="col-12 clearfix position-relative mt-1 p-0">
          <div class="slideToggle">
            <a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', $product->slug )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
          </div>
        </div>

        @if( $product->is_new && ($product->slug == "bubble-gum-bed") || ($product->slug == "bubble-gum-bench") || ($product->slug == "bubble-gum-dressing-table") || ($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-chest-2-drawers") || ($product->slug == "bubble-gum-desk") || ($product->slug == "bubble-slide") || ($product->slug == "bubble-loop") || ($product->slug == "bubble-drop") || ($product->slug =="bubble-gum-playground") || ($product->slug == "bubble-gum-big-mirror") || ($product->slug == "bubble-gum-small-mirror") || ($product->slug == "cotton-candy-sofa") || ($product->slug == "rainbow-sofa"))
        <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
          <img src="/img/icons/product-new-collection.png">
        </div>

        @elseif($product->is_new)
        <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
          <img src="/img/icons/product-new.png">
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
            @if($product_sample->is_options == null)
            <div class="d-inline text-center">
              <img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid">
            </div>
            @endif
            @endforeach
          </div>

          @else
          <div>
            <a href="{{ route('product', ['product' => $product->slug]) }}">
              <img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
            </a>
          </div>
          @endif

          <!-- <div class="product--title my-2"> 
                <span class="name">{{ $product->name }}</span>  
                <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span> 
              </div> -->

          <div class="col-12 clearfix position-relative mt-3 p-0">
            <div class="slideToggle">
              <a rel="modal:open" class="btn-green-underline mt-0" href="{{route('modal-product-price', $product->slug )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
            </div>
          </div>
        </div>

      </div>
    </div>
    @endforeach

    @if($key == "beds")
    <!-- <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/big-beds-new-products-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/cloud-bed"'>

        <div class="position-absolute" style="bottom:3%;right:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">GET THE LOOK > </div>
      </div> -->
    <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-tristen-bed-circu-circu-magical-furniture.jpg');background-position:center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/tristen-bed"'>
      <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">TRISTEN BED | <span style="font-size:0.9rem;">SEE MORE ></span></div>
    </div>
    <div class="container-fluid my-3" style="background-color:#a1b2ac;">
      <div class="row">
        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
          <div class="row">

            <div class="col-12 col-lg-6">
              @include('includes.middle.form-stocklist-annual-sale')
            </div>
            <div class="col-12 col-lg-6">
              <img src="/img/stocklist-annual-sale-bannerform.jpg" width="992" height="500" alt="Stocklist Annual Sale Circu" class="img-fluid d-none d-sm-block">
              <img src="/img/stocklist-annual-sale-bannerform-m-new.jpg" width="524" height="264" alt="Stocklist Annual Sale Circu" class="img-fluid d-block d-sm-none">
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif

    @if($key == "storage")
    <div class="d-none d-lg-block col-lg-3 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-bubble-gum-gym-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/bubble-gum-gym"'>
      <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">BUBBLE GUM GYM | <span style="font-size:0.9rem;">SEE MORE ></span></div>
    </div>
    @endif

    @if($key == "play-learn")

    <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-the-multiverse-bedroom.jpg');background-position:bottom;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/our-magical-rooms"'>
      <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">OUR MAGICAL ROOMS | <span style="font-size:0.9rem;">SEE MORE &gt;</span></div>
    </div>
    @endif

    @if($key == "lighting")
    <!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/thumbnails-covers/big-play-and-learn-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/sky-desk"'>
        <div class="position-absolute" style="bottom:3%;right:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">GET THE LOOK > </div>
      </div> -->
    <!-- <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-cloud-lamp-big-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="https://www.circu.net/products/cloud-lamp-big"'>
      <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">CLOUD LAMP BIG | <span style="font-size:0.9rem;">SEE MORE &gt;</span></div>
    </div> -->
    <div class="container-fluid my-3" style="background-color:#a1b2ac;">
      <div class="row">
        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
          <div class="row">
            <div class="col-12 col-lg-6">
              @include('includes.middle.form-stocklist-annual-sale')
            </div>
            <div class="col-12 col-lg-6">
              <img src="/img/stocklist-annual-sale-bannerform.jpg" width="992" height="500" alt="Stocklist Annual Sale Circu" class="img-fluid d-none d-sm-block">
              <img src="/img/stocklist-annual-sale-bannerform-m-new.jpg" width="524" height="264" alt="Stocklist Annual Sale Circu" class="img-fluid d-block d-sm-none">
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif

    @if($key == "play-learn")
    {{-- <div class="d-none d-lg-block col-lg-9 product-box has-overlay" 
            style="background-image:url('/img/products/thumbnails-covers/big-seating-new-collection-circu.jpg');background-position:center center;background-size:cover;cursor:pointer;" 
            onclick='window.location.href="https://www.circu.net/products/little-bunny-chair"'>
            
            <div class="position-absolute" style="bottom:3%;left:3%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">GET THE LOOK > </div>
          </div> --}}
    <div class="container-fluid my-3" style="background-color:#a1b2ac;">
      <div class="row">
        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
          <div class="row">
            <div class="col-12 col-lg-6">
              @include('includes.middle.form-stocklist-annual-sale')
            </div>
            <div class="col-12 col-lg-6">
              <img src="/img/stocklist-annual-sale-bannerform.jpg" width="992" height="500" alt="Stocklist Annual Sale Circu" class="img-fluid d-none d-sm-block">
              <img src="/img/stocklist-annual-sale-bannerform-m-new.jpg" width="524" height="264" alt="Stocklist Annual Sale Circu" class="img-fluid d-block d-sm-none">
            </div>
          </div>
        </div>
      </div>
    </div>
    @endif

    @if($key == "rugs")
    <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-cloud-sofa-circu-magical-furniture.jpg');background-position:center bottom;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/the-jungle-game-rug"'>
      <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">THE JUNGLE GAME RUG RUG | <span style="font-size:0.9rem;">SEE MORE &gt;</span></div>
    </div>
    @endif

    @if($key == "seating")

    <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/medium-lotus-sofa-circu-magical-furniture.jpg');background-position:center bottom;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/lotus-sofa"'>
      <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">LOTUS SOFA | <span style="font-size:0.9rem;">SEE MORE &gt;</span></div>
    </div>
    @endif

    @if($key == "mirrors")
    <div class="d-none d-lg-block col-lg-6 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/small-chameleon-pink-mirror-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/chameleon-mirror"'>
        <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">CHAMELEON MIRROR | <span style="font-size:0.9rem;">SEE MORE &gt;</span></div>
      </div>
    @endif
    @if($key == "others")
    <div class="d-none d-lg-block col-lg-9 product-box has-overlay" style="background-image:url('/img/products/blank-spaces/big-fantasy-air-balloon-lounge-circu-magical-furniture.jpg');background-position:center center;background-size:cover;cursor:pointer;" onclick='window.location.href="/products/fantasy-air-balloon-lounge"'>
        <div class="position-absolute" style="bottom:3%;left:2%;text-align:center;color:#FFFFFF;font-size:1.1rem;font-weight:bold;letter-spacing: 1px;">FANTASY AIR BALLOON LOUNGE | <span style="font-size:0.9rem;">SEE MORE &gt;</span></div>
      </div>
    @endif

    @endif
    @endforeach

    <br><br>

  </div><!-- end row -->

</div>

<div class="container-fluid my-3" style="background-color:#ffffff;">
    <div class="row">
        <div class="col-12 col-xl-10 offset-0 offset-xl-1 py-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    @include('includes.middle.form-ebook-new')
                </div>
                <div class="col-12 col-lg-6">
                    <a href="https://www.circu.net/ebook/new-products-2023?utm_origem=website&utm_meio=banner-pagstock&utm_conteudo=circu-newproducts-23&utm_campanha=newproducts">
                        <img src="/img/new-products-2023-banner-form.png" width="992" height="500" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-none d-sm-block">
                        <img src="/img/new-products-2023-banner-form-m-new.png" width="524" height="264" alt="New Products 2023 Ebook Circu Kid's Luxury Furniture" class="img-fluid d-block d-sm-none">
                      </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript">

    jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
    jQuery('.formvisibleMobile').css('display', 'block');
    });
  $(document).ready(function() {
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
        slidesToShow: 10,
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

    $('.owl-main').owlCarousel({
      loop: true,
      margin: 10,
      lazyLoad: false,
      dots: false,
      nav: true,
      navText: ["<i class='fas fa-chevron-left p-0 arrow-banners'></i>",
        "<i class='fas fa-chevron-right p-0 arrow-banners'></i>"
      ],
      autoplay: true,
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
  });
</script>
@endsection

@section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
  .owl-carousel .owl-item img,
  .owl-slide_animated .owl-item img {
    display: block;
    width: 100% !important;
    margin: 0 auto;
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

  .form-format {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 1;
  }

  @media only screen and (max-width: 575px) {
    .form-format {
      bottom: 240px;
    }
  }

  @media only screen and (max-width: 400px) {
    .form-format {
      bottom: 0px;
    }
  }

  .owl-next i{
    right: 2%;
    position: absolute;
    font-size: 1.6rem;
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center;
    text-shadow: 3px 3px 16px #272634;
  }

  .owl-prev i {
    left: 2%;
    position: absolute;
    font-size: 1.6rem;
    background-repeat: no-repeat;
    background-size: 100%;
    background-position: center;
    text-shadow: 3px 3px 16px #272634;
}
</style>
@endsection

@section('meta')
<title>{{$meta_data->meta_title}}</title>
<meta name="description" content="{{$meta_data->meta_description}}" />
<meta name="keywords" content="{{$meta_data->key_words}}" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$meta_data->meta_title}}" />
<meta property="og:description" content="{{$meta_data->meta_description}}" />
<meta property="og:url" content="http://www.circu.net/stocklist" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:image" content="http://www.circu.net/images/circu-magical-furniture-logo.png" />
@endsection