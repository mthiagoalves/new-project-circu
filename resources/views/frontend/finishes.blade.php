@extends('layouts.master')

@section('main-content')

<div class="container max-width-site my-3">

  <div class="row justify-content-md-center">

    <div class="col-12 col-sm-6 mx-auto text-center pt-5 pb-3">
        <h1>FINISHES</h1>
        <p class="description py-3"><i>Circu presents you a range of product finishes with a careful selection of fabrics, wood veneers, lacquers and original translucent colors. Ancient techniques such as application of metallic leafs, copper and brass work complete our extraordinary finishings list.</i></p>
    </div>
    
      @foreach( $all_finishes as $key => $finish)

      <div class="col-12"><div class="separator"><h3 class="background"> <span> {{ strtoupper($key) }} </span></h3></div></div>

        @foreach($finish as $sample )
          
          <div class="col-12 col-sm-6 col-md-4 col-lg-2 product_thumb product-box">
            <img src="/img/icons/finishes/{{$sample->slug}}.png" width="150" height="150" class="img-fluid">
            <div class="product-caption mt-2">@php $term = str_replace('-', ' ', $sample->slug); @endphp {{$term}}</div>
          </div>

        @endforeach

      @endforeach
      
  </div>

</div>


@endsection

@section('footer-includes')
  <script type="text/javascript" src="/js/slick.min.js"></script>
  <script type="text/javascript" src="/js/addtoany.js"></script>
  <script>
  $('.trigger-opt-item').on('click', function(e) {
    $search_term = $(e.target).attr("data-target");
    $product_slug = $(e.target).attr("data-product");

    $.ajax({
      url: 'https://www.circu.net/filter-samples/'+$product_slug+'/'+$search_term, 
      type: 'GET', 
      success: function (data) {
        $('#product-samples').fadeIn().html(data);
        $('html, body').animate({
          scrollTop: $("#product-samples").offset().top-150
        }, 500);

        var lastScrollTop = 0;
        window.addEventListener("scroll", function(){ 
        var st = window.pageYOffset || document.documentElement.scrollTop; 
        if (st < lastScrollTop){
          $("#product-samples").fadeOut();
        }
        lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
        }, false);
      }
    });
  });

  </script>

  <script type="text/javascript">
    $(document).ready(function() {
    $('.fas.fa-print').click(function() {
      window.print();
    });
      $('.product-slide--details').slick({
        slidesToShow: 1,
        useTransform: false,
        asNavFor: '.product-slide--nav',
        nextArrow: '<span class="lnr lnr-chevron-right" style="font-size:20px;position: absolute;top: 50%;right: 20px;z-index: 99;cursor:pointer;"></span>',
        prevArrow: '<span class="lnr lnr-chevron-left" style="font-size:20px;position: absolute;top: 50%;left: 20px;z-index: 99;cursor:pointer;"></span>',
        autoplaySpeed:4000,
        speed:600,
    })

    $('.product-slide--nav').slick({
      slidesToShow: 6,
      useTransform: false,
      asNavFor: '.product-slide--details',
      focusOnSelect: true,
      vertical: true,
      verticalSwiping: true,
      nextArrow: '<span class="lnr lnr-chevron-down" style="font-size:20px;z-index: 99;cursor:pointer;"></span>',
      prevArrow: '<span class="lnr lnr-chevron-up" style="font-size:20px;z-index: 99;cursor:pointer;"></span>',
    });

    $('.product-slide--press').slick({
      slidesToShow: 8,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      variableWidth: true,
      arrows: false,
    });

    $('.product--slide-covers').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      arrows: false,
      dots: true,
    });
  
    });
  </script>
@endsection

@section('head-includes')
  <link rel="stylesheet" type="text/css" href="/css/slick.css"/>
  <style>
  .videoplayer_product {
      float: none;
      clear: both;
      width: 100%;
      height: auto;
      position: relative;
      padding-bottom: 68%;
      padding-top: 25px;
  }
  .slick-slider .slick-track, .slick-slider .slick-list { transform: none; }
  
  </style>

@endsection

@section('meta')
  <title> Finishes of Circu Magical Furniture</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="circu">
  <meta property="og:type" content="product" />
  <meta property="og:title" content="Finishes of Circu Magical Furniture" />
  <meta property="og:description" content="Circu presents you a range of product finishes with a careful selection of fabrics, wood veneers, lacquers and original translucent colors." />
  <meta property="og:url" content="https://www.circu.net/finishes"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:price:amount" content="0.0" />
  <meta property="og:price:currency" content="USD" />
  <meta property="og:availability" content="preorder" />
  <meta property="og:image" content="https://www.circu.net/img/slides/home-ambiences/sky-one-plane-bed-circu-magical-furniture.jpg" />
@endsection