@extends('layouts.master-pressroom')

@section('main-content')

    <div class="container">

      <div class="row">

        <div class="col-xs-12">
            <div class="slide_animated flexslider">
                <ul class="slides slide_home_main">
                    <li><img src="/img/slides/about/production-circu-magical-furniture-01.jpg" class="img-responsive"/></li>
                    <li><img src="/img/slides/about/production-circu-magical-furniture-02.jpg" class="img-responsive"/></li>
                    <li><img src="/img/slides/about/production-circu-magical-furniture-03.jpg" class="img-responsive"/></li>
                    <li><img src="/img/slides/about/production-circu-magical-furniture-04.jpg" class="img-responsive"/></li>
                    <li><img src="/img/slides/about/production-circu-magical-furniture-05.jpg" class="img-responsive"/></li>
                </ul>
            </div>
        </div>

      </div><!-- end row -->

    </div> <!-- end container -->

    <div class="container container-inner">

      <div class="col-xs-12 product_description">
          <h1><i>About Us</i></h1>
          <h4>Welcome to the world of CIRCU, a world full of magic and fantasy, where your dreams turn into reality!</h4>
          <p>Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies and magical world.<br>
          Our hand-crafted and hand-tailored pieces are made in Portugal with the finest materials, combined with a lot of  passion, so we can deliver only the highest quality furnishings.</p>

          <p>OUR MISSION<br>
          Design unique, exclusive and magical furniture with an exceptional design.</p>
           
          <p>OUR VISION<br>
          CIRCU’s vision is focused on being part of the child's world, being present in the most ambitious, luxurious and charming decoration projects and interiors for children.</p>
           
          <p>WHAT TO EXPECT<br>
          CIRCU’s world is a world full of magic and fantasy, where children dreams turn into reality! CIRCU wants to create spaces where children fall asleep playing, surrounded by life and joy. We want to create moments and unique experiences where our pieces will be a link between the real world and children dreams.</p>
           
          <p>VALUES<br>
          MAGIC | Our pieces are the true realization of children’s dreams.<br>
          PURITY | Children are what moves us.<br>
          NAIVETY | A present value  in our pieces, appealing to the heart of any child.<br>
          COLOR | Our pieces are colorful representing the pinnacle of fun, freedom and life.<br>
          SOUL | Our pieces have an unique identity, that is what makes them magical.</p>

          <p>AVAILIBILITY OF CIRCU<br>
          CIRCU pieces are available to the design trade and are distributed internationally in the finest interior design boutiques and the finest Kids stores.</p>

          <p>For orders within Europe and all countries:<br>
          Phone: +351 914 929 073<br>
          Email: <a href="mailto:info@circu.net">info@circu.net</a></p>
          <p></p>
      </div>

      <div class="row">

        <div class="col-xs-12">
          <div class="separator"><h3 class="background"> <span> MAGICAL PIECES </span></h3></div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
        <div class="product_thumb_similar">
        <a href="/pressroom/products/rocky-rocket">
        <img src="/img/products/carousel/rocky-rocket-circu-magical-furniture.jpg" class="img-responsive">
        </a>
        <div class="product-caption"> ROCKY ROCKET</div>
        <div class="product-caption-sub"> ARMCHAIR </div>
        <div class="product-caption-highlight"> Limited Edition </div>
        </div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
        <div class="product_thumb_similar">
        <a href="/pressroom/products/fantasy-air-balloon">
        <img src="/img/products/carousel/fantasy-air-balloon-circu-magical-furniture.jpg" class="img-responsive">
        </a>
        <div class="product-caption"> FANTASY AIR BALLOON</div>
        <div class="product-caption-sub"> BED & SOFA </div>
        <div class="product-caption-highlight"> Limited Edition </div>
        </div>
        </div>

        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-sm-4 col-md-2">
        <div class="product_thumb_similar">
        <a href="/pressroom/products/sky-b-plane-bed">
        <img src="/img/products/carousel/sky-b-plane-bed-circu-magical-furniture.jpg" class="img-responsive">
        </a>
        <div class="product-caption"> SKY B PLANE </div>
        <div class="product-caption-sub"> BED </div>
        </div>
        </div>

        <div class="clearfix visible-sm"></div>

        <div class="col-xs-6 col-sm-4 col-md-2">
        <div class="product_thumb_similar">
        <a href="/pressroom/products/bun-van">
        <img src="/img/products/carousel/bun-van-circu-magical-furniture.jpg" class="img-responsive">
        </a>
        <div class="product-caption"> BUN VAN </div>
        <div class="product-caption-sub"> BED / ROOM </div>
        </div>
        </div>

        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-sm-4 col-md-2">
        <div class="product_thumb_similar">
        <a href="/pressroom/products/teepee-room">
        <img src="/img/products/carousel/teepee-room-circu-magical-furniture.jpg" class="img-responsive">
        </a>
        <div class="product-caption"> TEEPEE ROOM</div>
        <div class="product-caption-sub"> BED / ROOM </div>
        </div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-2">
        <div class="product_thumb_similar">
        <a href="/pressroom/products/cloud-lamp-big">
        <img src="/img/products/carousel/cloud-lamp-big-circu-magical-furniture.gif" class="img-responsive">
        </a>
        <div class="product-caption"> CLOUD LAMP </div>
        <div class="product-caption-sub"> LIGHTING </div>
        </div>
        </div>

      </div>

      <div class="row"><div class="col-xs-12">
        <a href="{{ route('catalogue') }}"><img src="/img/download-catalogue-circu-magical-furniture.jpg"></a>
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
  <meta property="og:url" content="http://www.circu.net/pressroom/about"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:price:amount" content="0.0" />
  <meta property="og:price:currency" content="USD" />
  <meta property="og:availability" content="preorder" />
  <meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection