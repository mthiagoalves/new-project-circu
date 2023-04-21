@extends('layouts.master')

@section('main-content')

  <div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0">
        <img src="/img/landing/fresh-summer-sales.jpg" class="img-fluid" />
      </div>
    </div>
  </div>

  <div class="container max-width-site">

    <div class="row">

      <div class="col-12 col-lg-10 offset-lg-1 mb-5 text-center">
          
        <div class="col-12 mt-5">
          
          <h1 class="product-details__name" style="font-size:2rem;">Fresh Summer Sale</h1>
          <h2 class="product-details__category mb-4" style="font-size:0.9rem;">Save Up to 10% on this ready-to-ship Items</h2>
           
			     <p>Bring freshness into your summer with our stock sale. <br> Enjoy extra discounts, that can go up to 10%, on this selection of ready to ship furniture that will bring a splash of fun into your designs. <br>Click on get price and discover all of the available discounts.</p>
        </div>
      
      </div><!-- .col -->

    </div><!-- .row -->
  
  </div

  <div class="container">
    <div class="row main_area area_products">

        @foreach ($products as $product)

        <div class="col-6 col-md-4 product_thumb">
            <a href="http://www.circu.net/products/{{ $product->slug }}">
                @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
                    <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                @else
                    <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-responsive">
                @endif
                <div class="product-caption"> {{ $product->name }} </div>
                <div class="product-caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>
                @if (($product->id == 11) || ($product->id == 12))
	                <div class="new-product">
	                    <img src="/img/icons/special-discount.png">
	                </div>
                @endif
            </a>
            <div class="slideToggle">
                <a rel="modal:open" href="{{ route('modal-campaign-price', ['name' => $product->slug] ) }}"><span>GET PRICE</span></a>
            </div>
            </div>

        @endforeach

    </div>
  </div>

@endsection

@section('meta')
  <title>Fresh Summer Sales Circu Magical Furniture</title>
  <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Fresh Summer Sales Circu Magical Furniture" />
  <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta property="og:url" content="https://www.circu.net/fresh-summer-sales"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:price:amount" content="0.0" />
  <meta property="og:price:currency" content="USD" />
  <meta property="og:availability" content="preorder" />
  <meta property="og:image" content="https://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection

@section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css"/>
<style>
  .main-slider {
    position: relative;
    width: 100%;
    height: 38vw;
    min-height: 8vw;
    margin-bottom: 50px;
    opacity: 0;
    visibility: hidden;
    transition: all 1.2s ease;
  }
  .main-slider.slick-initialized {
    opacity: 1;
    visibility: visible;
  }

  #main_slider .slick-slide {
    position: relative;
    height: 38vw;
  }
  #main_slider .slick-slide::before {
    background-color: #000;
    opacity: 0.3;
    z-index: 1;
  }
  #main_slider .slick-slide video {
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
  }
  #main_slider .slick-slide iframe {
    position: relative;
    pointer-events: none;
  }
  #main_slider .slick-slide figure {
    position: relative;
    height: 100%;
  }
  #main_slider .slick-slide .slide-image {
    opacity: 0;
    height: 100%;
    background-size: cover;
    background-position: center;
    transition: all 0.8s ease;
  }
  #main_slider .slick-slide .slide-image.show {
    opacity: 1;
  }
  #main_slider .slick-slide .image-entity {
    width: 100%;
    opacity: 0;
    visibility: hidden;
  }
  #main_slider  .slick-slide .loading {
    position: absolute;
    top: 44%;
    left: 0;
    width: 100%;
  }
  #main_slider .slick-slide .slide-media {
    -webkit-animation: slideOut 0.4s cubic-bezier(0.4, 0.29, 0.01, 1);
            animation: slideOut 0.4s cubic-bezier(0.4, 0.29, 0.01, 1);
  }
  #main_slider .slick-slide.slick-active {
    z-index: 1;
  }
  #main_slider .slick-slide.slick-active .slide-media {
    -webkit-animation: slideIn 2.4s cubic-bezier(0.4, 0.29, 0.01, 1);
            animation: slideIn 2.4s cubic-bezier(0.4, 0.29, 0.01, 1);
  }
  #main_slider .slick-slide.slick-active .caption {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
    transition: all 0.7s cubic-bezier(0.32, 0.34, 0, 1.62) 0.6s;
  }
  .center .slick-slide:not(.slick-current) img {
    opacity: 0.4;
    filter: alpha(opacity=40); /* msie */
  }
  .slick-dots {
    padding: 0;
  }
  .slick-dots li {
    display: inline-block;
    vertical-align: top;
    margin: 0;
  }
  .slick-dots li button {
   background: none repeat scroll 0 0 #ffffff;
   border: 1px solid #29544d;
  }
  .slick-dots li button:focus {
    outline: none;
  }
  .slick-dots li button:hover {
    opacity: 1;
  }
  .slick-dots li.slick-active button {
    border: 1px solid #29544d;
    background: #29544d;
  }
.center-element {
  top: 50%;
  transform: translateY(-50%);
}
.contdonwblock .contnumber {
    border-bottom: 1px dashed #89bab6;
    color: #89bab6;
    width: 100%;
    margin: 0 auto;
    height: 60px;
    line-height: 60px;
    font-size: 24px;
    font-weight: 600;
}
.contdonwblock {
    color: white;
}
.contdonwblock p {
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 11px;
}
</style>
@endsection

@section('footer-includes')
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript">
var slideWrapper = $(".main-slider"),
    iframes = slideWrapper.find('.embed-player'),
    lazyImages = slideWrapper.find('.slide-image'),
    lazyCounter = 0;

// POST commands to YouTube or Vimeo API
function postMessageToPlayer(player, command){
  if (player == null || command == null) return;
  player.contentWindow.postMessage(JSON.stringify(command), "*");
}

// When the slide is changing
function playPauseVideo(slick, control){
  var currentSlide, slideType, startTime, player, video;

  currentSlide = slick.find(".slick-current");
  slideType = currentSlide.attr("class").split(" ")[1];
  player = currentSlide.find("iframe").get(0);
  startTime = currentSlide.data("video-start");

  if (slideType === "youtube") {
    switch (control) {
      case "play":
        postMessageToPlayer(player, {
          "event": "command",
          "func": "mute"
        });
        postMessageToPlayer(player, {
          "event": "command",
          "func": "playVideo"
        });
        break;
      case "pause":
        postMessageToPlayer(player, {
          "event": "command",
          "func": "pauseVideo"
        });
        break;
    }
  } else if (slideType === "video") {
    video = currentSlide.children("video").get(0);
    if (video != null) {
      if (control === "play"){
        video.play();
      } else {
        video.pause();
      }
    }
  }
}

// Resize player
function resizePlayer(iframes, ratio) {
  if (!iframes[0]) return;
  var win = $(".main-slider"),
      width = win.width(),
      playerWidth,
      height = win.height(),
      playerHeight,
      ratio = ratio || 16/9;

  iframes.each(function(){
    var current = $(this);
    if (width / ratio < height) {
      playerWidth = Math.ceil(height * ratio);
      current.width(playerWidth).height(height).css({
        left: (width - playerWidth) / 2,
         top: 0
        });
    } else {
      playerHeight = Math.ceil(width / ratio);
      current.width(width).height(playerHeight).css({
        left: 0,
        top: (height - playerHeight) / 2
      });
    }
  });
}

// DOM Ready
$(function() {
  // Initialize
  slideWrapper.on("init", function(slick){
    slick = $(slick.currentTarget);
    setTimeout(function(){
      playPauseVideo(slick,"play");
    }, 1000);
    resizePlayer(iframes, 16/9);
  });
  slideWrapper.on("beforeChange", function(event, slick) {
    slick = $(slick.$slider);
    playPauseVideo(slick,"pause");
  });
  slideWrapper.on("afterChange", function(event, slick) {
    slick = $(slick.$slider);
    playPauseVideo(slick,"play");
  });
  slideWrapper.on("lazyLoaded", function(event, slick, image, imageSource) {
    lazyCounter++;
    if (lazyCounter === lazyImages.length){
      lazyImages.addClass('show');
      // slideWrapper.slick("slickPlay");
    }
  });

  //start the slider
  slideWrapper.slick({
    // fade:true,
    autoplaySpeed:4000,
    lazyLoad:"progressive",
    speed:600,
    arrows:false,
    dots:true,
    cssEase:"cubic-bezier(0.87, 0.03, 0.41, 0.9)"
  });
});

// Resize event
$(window).on("resize.slickVideoPlayer", function(){  
  resizePlayer(iframes, 16/9);
});
</script>  
  <script>
    $('.center').slick({
      dots: true,
      arrows: false,
      slidesToShow: 3,
      variableWidth: true,
      slidesToScroll: 1,
      autoplay: true,
      centerMode: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            slidesToShow: 1
          }
        }
      ]
    });
  </script>
@endsection