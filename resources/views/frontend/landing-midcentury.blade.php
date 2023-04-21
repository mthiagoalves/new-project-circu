@extends('layouts.master') 

@section('main-content')
<div class="container-fluid" id="main-slide">
    
    <div class="row">
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-none d-md-block">
            <div class="item">
                <a href="{{ route('products') }}">
                    <img src="/img/landing/styles/midcentury-style-circu.jpg" class="cd-dot img-fluid">
                    <div class="position-absolute text-container d-none d-md-inline" style="color: #29544d;">
                        <h2 class="mb-1">MID-CENTURY TRENDS</h2>
                        <h4 class="mb-1">FOR YOUR MAGICAL PROJECTS</h4>
                        <div>Get Inspiration &gt; </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-block d-md-none">
            <div class="item">
                <a href="{{ route('products') }}">
                    <img src="/img/landing/styles/midcentury-style-circu-mobile.jpg" class="cd-dot img-fluid">
                    <div class="position-relative text-container-mobile text-center my-2">
                        <h2 class="mb-1">MID-CENTURY TRENDS</h2>
                        <h4 class="mb-1">FOR YOUR MAGICAL PROJECTS</h4>
                        <div>Get Inspiration &gt; </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end row -->

</div>

<div class="container max-width-site">
    <div class="row">
      <div class="col-12 text-center pt-5 pb-2">
        <h5> TOP MID-CENTURY PRODUCTS </h5>
      </div>
    </div>

    <div class="row">

        <div class="col-12 col-sm-6 col-md-3 product_thumb">
            <a href="{{ route('product', ['product' => 'bun-van']) }}">
                <img src="/img/products/carousel/bun-van-circu-magical-furniture.jpg" class="img-responsive">
                <div class="product-caption"> Bun Van </div>
                <div class="product-caption-sub"> Bed / Room</div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" class="btn-get-price" href="{{route('modal-product-price', ['name' => 'bun-van'] )}}"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 product_thumb">
            <a href="{{ route('product', ['product' => 'teepee-room']) }}">
                <img src="/img/products/carousel/teepee-room-circu-magical-furniture.jpg" class="img-responsive">
                <div class="product-caption">  Teepee Room  </div>
                <div class="product-caption-sub">  Bed / Room </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" class="btn-get-price" href="{{route('modal-product-price', ['name' => 'teepee-room'] )}}"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 product_thumb">
            <a href="{{ route('product', ['product' => 'copper-box']) }}">
                <img src="/img/products/carousel/copper-box-circu-magical-furniture.jpg" class="img-responsive">
                <div class="product-caption"> Copper Toy Box  </div>
                <div class="product-caption-sub"> Toy Box </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" class="btn-get-price" href="{{route('modal-product-price', ['name' => 'copper-box'] )}}"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-md-3 product_thumb">
            <a href="{{ route('product', ['product' => 'teepee-playground']) }}">
                <img src="/img/products/carousel/teepee-playground-circu-magical-furniture.jpg" class="img-responsive">
                <div class="product-caption"> Teepee Play  </div>
                <div class="product-caption-sub"> Playground</div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" class="btn-get-price" href="{{route('modal-product-price', ['name' => 'teepee-playground'] )}}"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid">
    <div class="row row-eq-height">
        <div class="col-12 col-lg-9 p-0 pr-lg-2">
            <div class="row h-100 mr-0 mr-lg-1" style="background-color: #e7f0ef;">
                <div class="col-12 col-md-4 offset-md-1 my-auto text-container px-5 px-lg-0">
                    <h1 class="font-script">Daily Inspiration</h1>
                    <h4 class="mb-1">CIRCU DESIGNER'S SUGGESTIONS</h4>
                    <p>Get ideas & inspiration for your <br> next design project.</p>
                    <a href="https://circu.net/trends" target="_blank" class="btn-full-green">TRENDS 2019 ></a>
                </div>
                <div class="col-12 col-md-7">
                    <a href="https://circu.net/trends" target="_blank"><img src="/img/landing/styles/moodboard-midcentury-style-trends.jpg" class="py-3 img-fluid" alt=""></a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 mb-3 mb-lg-0" style="background-color: #e7f0ef;">
            <div class="row h-100">
                <div class="col-12 text-center my-auto">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <h5>PRESS RELEASE</h5>
                            <p>TRENDS EDITION</p>
                        </div>
                        <div class="col-12">
                            <a href="/press/press-releases/press-release-2019-march-kids-trends-neutral-fur"><img src="/img/landing/styles/press-release-trends.png" class="my-0 my-lg-3 img-fluid" alt=""></a>
                        </div>
                        <div class="col-12">
                            <a href="/press/press-releases/press-release-2019-march-kids-trends-neutral-fur" class="btn-full-green mb-3">DOWNLOAD NOW &gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container max-width-site">
    <div class="row">
      <div class="col-12 text-center pt-5 pb-2">
        <h5> COMPLETE YOUR MID-CENTURY PROJECT </h5>
      </div>
    </div>

    <div class="row">

        <div class="col-12 col-sm-4 col-md-3 product_thumb">
            <a href="http://essentialhome.eu/products/upholstery/mansfield-armchair?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank">
                <img src="/img/landing/styles/midcentury/mansfield-armchair-essential-home.jpg" class="img-fluid">
                <div class="product-caption"> MANSFIELD ARMCHAIR </div>
                <div class="product-caption-sub"> by Essential Home </div>
            </a>
            <div class="slideToggle">
                <a class="btn-get-price" href="http://essentialhome.eu/products/upholstery/mansfield-armchair?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-4 col-md-3 product_thumb">
            <a href="{{ route('product', ['product' => 'diana-floor-lamp']) }}">
                <img src="/img/products/carousel/diana-floor-lamp-circu-magical-furniture.jpg" class="img-fluid">
                <div class="product-caption"> DIANA FLOOR LAMP </div>
                <div class="product-caption-sub"> by Delightfull </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" class="btn-get-price" href="{{route('modal-product-price', ['name' => 'diana-floor-lamp'] )}}"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-4 col-md-3 product_thumb">
            <a href="http://essentialhome.eu/products/accessories/wilde-mirror?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank">
                <img src="/img/landing/styles/midcentury/wilde-mirror-essential-home.jpg" class="img-fluid">
                <div class="product-caption"> WILDE MIRROR </div>
                <div class="product-caption-sub"> by Essential Home </div>
            </a>
            <div class="slideToggle">
                <a class="btn-get-price" href="http://essentialhome.eu/products/accessories/wilde-mirror?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-4 col-md-3 product_thumb">
            <a href="https://www.delightfull.eu/en/heritage/wall/turner?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank">
                <img src="/img/landing/styles/midcentury/turner-wall-delightfull.jpg" class="img-fluid">
                <div class="product-caption"> TURNER WALL LAMP </div>
                <div class="product-caption-sub"> by Delightfull</div>
            </a>
            <div class="slideToggle">
                <a class="btn-get-price" href="https://www.delightfull.eu/en/heritage/wall/turner?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-4 col-md-3 product_thumb">
            <a href="{{ route('product', ['product' => 'atomic-suspension-lamp']) }}">
                <img src="/img/products/carousel/atomic-suspension-lamp-circu-magical-furniture.jpg" class="img-fluid">
                <div class="product-caption"> ATOMIC SUSPENSION LAMP </div>
                <div class="product-caption-sub"> by Delightfull</div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" class="btn-get-price" href="{{route('modal-product-price', ['name' => 'atomic-suspension-lamp'] )}}"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-4 col-md-3 product_thumb">
            <a href="https://essentialhome.eu/products/upholstery/sophia-bed?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank">
                <img src="/img/landing/styles/midcentury/sophia-bed-essential-home.jpg" class="img-fluid">
                <div class="product-caption"> SOPHIA BED </div>
                <div class="product-caption-sub"> by Essential Home </div>
            </a>
            <div class="slideToggle">
                <a class="btn-get-price" href="https://essentialhome.eu/products/upholstery/sophia-bed?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-4 col-md-3 product_thumb">
            <a href="https://www.delightfull.eu/en/heritage/table/basie?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank">
                <img src="/img/landing/styles/midcentury/basie-table-lamp-delightfull.jpg" class="img-fluid">
                <div class="product-caption"> BASIE TABLE LAMP </div>
                <div class="product-caption-sub"> by Delightfull</div>
            </a>
            <div class="slideToggle">
                <a class="btn-get-price" href="https://www.delightfull.eu/en/heritage/table/basie?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

        <div class="col-12 col-sm-4 col-md-3 product_thumb">
            <a href="http://essentialhome.eu/products/upholstery/reeves-chair?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank">
                <img src="/img/landing/styles/midcentury/reeves-chair-essential-home.jpg" class="img-fluid">
                <div class="product-caption"> REEVES CHAIR  </div>
                <div class="product-caption-sub"> by Essential Home </div>
            </a>
            <div class="slideToggle">
                <a class="btn-get-price" href="http://essentialhome.eu/products/upholstery/reeves-chair?utm_source=Circu&utm_medium=website&utm_content=CompleteYourProjects&utm_campaign=HomepageMidcentury" target="_blank"><span>GET <b>PRICE &gt;</b></span></a>
            </div>
        </div>

    </div>
</div>

<!-- end container -->
@endsection 

@section('meta')
    <title>Circu Magical Furniture - Luxury brand for children</title>
    <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
    <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
    <meta name="author" content="circu">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Circu Magical Furniture - Luxury brand for children" />
    <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
    <meta property="og:url" content="https://www.circu.net/mid-century" />
    <meta property="og:site_name" content="Circu Magical Furniture" />
    <meta property="og:image" content="https://www.circu.net/images/circu-magical-furniture-logo.png" /> 
@endsection 


@section('head-includes')
  <style>
    p {
      font-family: 'RalewayMedium',sans-serif;
    }
    .product-caption {
      font-size: 0.7rem !important;
    }
    .btn-view-more a {
      font-size: 0.70rem;
      letter-spacing: 1px;
      font-weight: 600;
      width: 80%;
    }
    .input-block {
      margin: 0px 0px 10px;
    }
    .owl-carousel .text-container h2, .owl-carousel .text-container h4,
    .owl-carousel .text-container-mobile h2, .owl-carousel .text-container-mobile h4  {
        color: #112f27;
        font-family: "Raleway", sans-serif;
    }
    .owl-carousel .text-container h2,
    .owl-carousel .text-container-mobile h2 {
        font-size: 1.64rem;
        letter-spacing: 10px;
        font-weight: bolder;
    }
    .owl-carousel .text-container h4,
    .owl-carousel .text-container-mobile h4 {
        font-size: 1rem;
        letter-spacing: 4px;
    }
    .owl-carousel .text-container div,
    .owl-carousel .text-container-mobile div {
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
    .product_thumb .slide-toggle a {
        background-color: #d5d5d5 !important;
    }
    .text-container h4 {
        text-align: left;
    }
    .owl-theme .owl-dots {
        position: relative;
    }
  </style>
@endsection

@section('footer-includes')
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