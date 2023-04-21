@extends('layouts.master')

@section('main-content')
<div class="container-fluid" id="main-slide">

  <div class="row">
    <div class="col-12 owl-main owl-carousel owl-slide owl-theme p-0 position-relative d-none d-sm-block">
      @foreach($projects as $project)
        @if($project->slug == 'circu-new-showroom')
          <div class="item">
            <a href="/circu-new-showroom">
              <img src="/img/projects/{{$project->slug}}/{{$project->slug}}.jpg" width="1920" height="800" class="cd-dot img-fluid d-none d-sm-block">
              <img src="/img/projects/{{$project->slug}}/{{$project->slug}}-mobile.jpg" width="768" height="600" class="cd-dot img-fluid d-block d-sm-none">
            </a>
          </div>
        @else
          <div class="item">
            <a href="{{route('project', ['slug' => $project->slug] )}}">
              <img src="/img/projects/{{$project->slug}}/{{$project->slug}}.jpg" width="1920" height="800" class="cd-dot img-fluid d-none d-sm-block">
              <img src="/img/projects/{{$project->slug}}/{{$project->slug}}-mobile.jpg" width="768" height="600" class="cd-dot img-fluid d-block d-sm-none">
            </a>
          </div>
        @endif
      @endforeach
    </div>
  </div>

</div>

<div class="container max-width-site pt-3">

  <div class="row">

    <div class="col-12 text-center pt-5 pb-2">
      <h5> DESIGN PROJECTS AROUND THE GLOBE </h5>
    </div>

    <div class="col-12">
      <div class="row">
        @foreach($projects as $project)
          @if($project->slug == 'circu-new-showroom')
            <div class="col-12 col-md-6 my-3">
              
              <a href="/circu-new-showroom" class="project_thumbnail">
                <img src="/img/projects/{{$project->slug}}/slide/{{$project->slug}}-1.jpg" class="img-fluid">
                <div class="content-overlay"></div>
                <div class="content-details fadeIn-bottom">
                  <p class="mx-auto">&#43;</p>
                </div>
              </a>
              <div class="product-box--title my-3 text-center">
                <a href="/circu-new-showroom">{{ $project->article_languages[0]->title }}</a>
              </div>
            </div>
            @else
              <div class="col-12 col-md-6 my-3">
                
                <a href="{{route('project', ['slug' => $project->slug] )}}" class="project_thumbnail">
                  <img src="/img/projects/{{$project->slug}}/slide/{{$project->slug}}-1.jpg" class="img-fluid">
                  <div class="content-overlay"></div>
                  <div class="content-details fadeIn-bottom">
                    <p class="mx-auto">&#43;</p>
                  </div>
                </a>
                <div class="product-box--title my-3 text-center">
                  <a href="{{route('project', ['slug' => $project->slug] )}}">{{ $project->article_languages[0]->title }} </a>
                </div>
              </div>
            @endif
        @endforeach
      </div>
    </div>

  </div><!-- end row -->

</div><!-- container-->
<div class="container-fluid py-2">
  <div class="row">
    @foreach($products1 as $product1)
    <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box">
      <div class="product_thumb py-4">
        @if(file_exists('./img/products/thumbnails/'.$product1->slug.'-circu-magical-furniture.png'))
        <img src="/img/products/thumbnails/{{ $product1->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
        @else
        <img src="/img/products/thumbnails/{{ $product1->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
        @endif

        <div class="product--title">
          <span class="name">{{ $product1->name }}</span>
          <span class="sub_category">{{ ucwords($product1->sub_category->sub_category_languages[0]->name) }}</span>
        </div>

        <div class="col-12 clearfix position-relative mt-1 p-0">
          <div class="slideToggle">
            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product1->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
          </div>
        </div>

        @if( $product1->is_new && ($product1->slug == "bubble-gum-bed") || ($product1->slug == "bubble-gum-bench") || ($product1->slug == "bubble-gum-dressing-table") || ($product1->slug == "bubble-gum-chest-3-drawers") || ($product1->slug == "bubble-gum-chest-2-drawers") || ($product1->slug == "bubble-gum-desk") || ($product1->slug == "bubble-slide") || ($product1->slug == "bubble-loop") || ($product1->slug == "bubble-drop") || ($product1->slug =="bubble-gum-playground") || ($product1->slug == "bubble-gum-big-mirror") || ($product1->slug == "bubble-gum-small-mirror") || ($product1->slug == "cotton-candy-sofa") || ($product1->slug == "rainbow-sofa"))
        <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
          <img src="/img/icons/product-new-collection.png">
        </div>

        @elseif($product1->is_new)
        <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
          <img src="/img/icons/product-new.png">
        </div>

        @endif

        <div class="product-box--content">
          @if($product1->product_samples->count() > 0 && $product1->slug != 'dainty-armchair')
          <div class="col-12 slider-for text-center">
            @foreach($product1->product_samples as $product_sample)
            <div>
              <a href="{{ route('product', ['product' => $product1->slug]) }}">
                <img src="/img/products/{{ $product1->slug }}/finishes/{{ $product1->slug }}-circu-magical-furniture-{{$product_sample->sample->slug}}.png" width="960" height="800" alt="" class="img-fluid">
              </a>
            </div>
            @endforeach
          </div>
          <div class="col-12 product-samples slider-nav text-center p-0">
            @foreach($product1->product_samples as $product_sample)
            @if($product_sample->is_options == null)
            <div class="d-inline text-center">
              <img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid">
            </div>
            @endif
            @endforeach
          </div>

          @else
          <div>
            <a href="{{ route('product', ['product' => $product1->slug]) }}">
              <img src="/img/products/thumbnails-covers/{{ $product1->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
            </a>
          </div>
          @endif
          <div class="col-12 clearfix position-relative mt-3 p-0">
            <div class="slideToggle">
              <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product1->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
            </div>
          </div>
        </div>

      </div>
    </div>


    @endforeach


  </div>
</div>

<!-- form -->
@include('includes.middle.form-download-pricelist-showroom')

@endsection

@section('meta')
<title>Projects by Circu Magical Furniture</title>
<meta name="description" content="Projects by Circu Magical Furniture" />
<meta name="keywords" content="press release circu magical furniture" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="Projects by Circu Magical Furniture" />
<meta property="og:url" content="https://www.circu.net/projects" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
@endsection

@section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
  .project_thumbnail {
    position: relative;
    overflow: hidden;
    display: table;
    cursor: pointer;
  }

  .project_thumbnail .content-overlay {
    background: rgba(0, 0, 0, 0.4);
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
  }

  .project_thumbnail:hover .content-overlay {
    opacity: 1;
  }

  .content-details {
    position: absolute;
    text-align: center;
    padding-left: 1em;
    padding-right: 1em;
    width: 100%;
    top: 50%;
    left: 50%;
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s;
  }

  .project_thumbnail:hover .content-details {
    top: 50%;
    left: 50%;
    opacity: 1;
  }

  .content-details p {
    color: #fff;
    font-size: 3.5em;
    width: 60px;
    height: 60px;
    line-height: 60px;
    border-radius: 50%;
    border: 1px solid #FFFFFF;
    background: rgba(159, 191, 188, 0.6);
    text-align: center;
  }

  .fadeIn-bottom {
    top: 80%;
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

  .slick-slide {
    padding: 0px 3px;
    cursor: pointer;
  }

  /* --------------- linha de produtos --------------- */
</style>
@endsection

@section('footer-includes')
<script type="text/javascript" src="/js/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>

<script type="text/javascript">
  jQuery('.form-d-block-mobile input[name="email"]').on('change', function() {
	    jQuery('.formvisibleMobile').css('display', 'block');
	    });
  $('.owl-main').owlCarousel({
    loop: true,
    nav: true,
	   navText: ["<i class='fas fa-chevron-left p-0 arrow-banners'></i>",
	       "<i class='fas fa-chevron-right p-0 arrow-banners'></i>"
	   ],
    margin: 10,
    lazyLoad: false,
    dots: true,
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
</script>
<script>
  // if ($.cookie('popupEntrance') == null) {
  //     $(window).bind('load', function() {
  //         setTimeout(function() {
  //             $('#formhide')[0].click();
  //         }, 1000);
  //     });
  //     var date = new Date();
  //     var minutes = 1440;
  //     date.setTime(date.getTime() + (minutes * 60 * 1000));
  //     $.cookie('popupEntrance', '1', {
  //         expires: date
  //     });
  // }

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
@endsection