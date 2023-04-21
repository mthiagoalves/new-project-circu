@extends('layouts.master')

@section('main-content')

    <div class="container-fluid">
    
      <div class="row">
        <div class="col-12 p-0 d-none d-md-inline">
          <video width="100%" height="auto" onloadeddata="this.play();" poster="poster.png" playsinline loop muted>
             <source src="/includes/video/brand-about.mp4" type="video/mp4" />
            <!-- <source src="video.mp4.webm" type="video/webm" />
            <source src="video.mp4.ogg" type="video/ogg" /> -->
            <p>Your browser does not support the video tag or the file format of this video.</p>
          </video>
        </div>

        <div class="col-12 p-0 d-inline d-md-none">
          <video width="100%" height="auto" onloadeddata="this.play();" poster="poster.png" playsinline loop muted>
             <source src="/includes/video/brand-about-mobile.mp4" type="video/mp4" />
            <!-- <source src="video.mp4.webm" type="video/webm" />
            <source src="video.mp4.ogg" type="video/ogg" /> -->
            <p>Your browser does not support the video tag or the file format of this video.</p>
          </video>
        </div><!-- .col-12 -->
      </div><!-- .row -->

    </div>

    <div class="container-fluid">

    	<div class="col-12 col-lg-10 offset-lg-1 product_description my-5">
			<h1 class="product-details__name">Welcome to the world of CIRCU, 
			<br>a world full of magic and fantasy, where your dreams turn into reality!</h1>

			<p>CIRCU was built under a dream! The dream is to allow children to live their own fantasies and create a magical world for them to fly under an imagination that has no limit.<br>
			With our hand-crafted and hand-tailored pieces made in Portugal with the finest materials, we deliver only the highest quality furnishings that turn children's dreams into reality! <br>
			From airplane beds, rocket armchairs to a crib inspired on a hot air balloon, our pieces create moments and experiences between children's real-world and their fantasies.</p>

			<h2 class="product-details__category">OUR MISSION</h2>
			<p class="mt-0">Design unique, exclusive and magical furniture with an exceptional design.</p>

			<h2 class="product-details__category">OUR VISION</h2>
			<p class="mt-0">CIRCU’s vision is focused on being part of the child's world, being present in the most ambitious, luxurious and charming decoration projects and interiors for children.</p>

			<h2 class="product-details__category">WHAT TO EXPECT</h2>
			<p class="mt-0">CIRCU’s world is a world full of magic and fantasy, where children dreams turn into reality! CIRCU wants to create spaces where children fall asleep playing, surrounded by life and joy. We want to create moments and unique experiences where our pieces will be a link between the real world and children dreams.</p>

			<h2 class="product-details__category">VALUES</h2>
			<p class="mt-0">MAGIC | Our pieces are the true realization of children’s dreams.<br>
			PURITY | Children are what moves us.<br>
			NAIVETY | A present value  in our pieces, appealing to the heart of any child.<br>
			COLOR | Our pieces are colorful representing the pinnacle of fun, freedom and life.<br>
			SOUL | Our pieces have an unique identity, that is what makes them magical.</p>

			<h2 class="product-details__category">AVAILABILITY OF CIRCU</h2>
			<p class="mt-0">CIRCU pieces are available to the design trade and are distributed internationally in the finest interior design boutiques and the finest Kids stores.</p>

			<h2 class="product-details__category">For orders within Europe and all countries:</h2>
			<p class="mt-0">Phone: +351 914 929 073<br>
			Email: <a href="mailto:info@circu.net">info@circu.net</a></p>
			<p></p>
      	</div>

      <div class="row">

        <div class="col-12 text-center pt-5 pb-2">
          <h5 class="title_highlight border_b_grey py-2 mb-4"> MAGICAL PRODUCTS </h5>
        </div>

        <div class="col-6 col-sm-4 col-md-2 product_thumb">
        <a href="{{ route('product', ['product' => 'rocky-rocket']) }}">
        <img src="/img/products/carousel/rocky-rocket-circu-magical-furniture.jpg" class="img-fluid">
        </a>
        <div class="product-caption"> ROCKY ROCKET</div>
        <div class="product-caption-sub"> ARMCHAIR </div>
        </div>

        <div class="col-6 col-sm-4 col-md-2 product_thumb">
        <a href="{{ route('product', ['product' => 'fantasy-air-balloon']) }}">
        <img src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" class="img-fluid">
        </a>
        <div class="product-caption"> FANTASY AIR BALLOON</div>
        <div class="product-caption-sub"> BED & SOFA </div>
        </div>

        <div class="clearfix visible-xs"></div>

        <div class="col-6 col-sm-4 col-md-2 product_thumb">
        <a href="{{ route('product', ['product' => 'sky-b-plane-bed']) }}">
        <img src="/img/products/carousel/sky-b-plane-bed-circu-magical-furniture.jpg" class="img-fluid">
        </a>
        <div class="product-caption"> SKY B PLANE </div>
        <div class="product-caption-sub"> BED </div>
        </div>

        <div class="clearfix visible-sm"></div>

        <div class="col-6 col-sm-4 col-md-2 product_thumb">
        <a href="{{ route('product', ['product' => 'bun-van']) }}">
        <img src="/img/products/carousel/bun-van-circu-magical-furniture.jpg" class="img-fluid">
        </a>
        <div class="product-caption"> BUN VAN </div>
        <div class="product-caption-sub"> BED / ROOM </div>
        </div>

        <div class="clearfix visible-xs"></div>

        <div class="col-6 col-sm-4 col-md-2 product_thumb">
        <a href="{{ route('product', ['product' => 'teepee-room']) }}">
        <img src="/img/products/carousel/teepee-room-circu-magical-furniture.jpg" class="img-fluid">
        </a>
        <div class="product-caption"> TEEPEE ROOM</div>
        <div class="product-caption-sub"> BED / ROOM </div>
        </div>

        <div class="col-6 col-sm-4 col-md-2 product_thumb">
        <a href="{{ route('product', ['product' => 'cloud-lamp-big']) }}">
        <img src="/img/products/carousel/cloud-lamp-big-circu-magical-furniture.gif" class="img-fluid">
        </a>
        <div class="product-caption"> CLOUD LAMP </div>
        <div class="product-caption-sub"> LIGHTING </div>
        </div>

      </div>

    </div><!-- end container-inner -->

@endsection

@section('meta')
  <title>About - Circu Magical Furniture</title>
  <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="About - Circu Magical Furniture" />
  <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta property="og:url" content="http://www.circu.net/about"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:price:amount" content="0.0" />
  <meta property="og:price:currency" content="USD" />
  <meta property="og:availability" content="preorder" />
  <meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
  <link rel="stylesheet" href="https://vjs.zencdn.net/7.4.1/video-js.css">
@endsection

@section('footer-includes')
  <script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
  <script src="/js/Youtube.min.js"></script>
  <script type="text/javascript">
    $('.owl-main').owlCarousel({
        loop: true, 
        margin: 10, 
        lazyLoad: false, 
        dots: true, 
        nav: false, 
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
@endsection