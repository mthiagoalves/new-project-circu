@extends('layouts.master') 

@section('main-content')
<div class="container-fluid" id="main-slide">
    
    <div class="row">
        <div class="col-12 p-0 position-relative ">
            <img src="/img/landing/latest-products/new-products-collection.jpg" class="d-none d-sm-block img-fluid">
            <img src="/img/landing/latest-products/new-products-collection-mobile.jpg" class="d-block d-sm-none img-fluid">
        </div>
    </div>
    <!-- end row -->

</div>

<div class="container max-width-site">
    <div class="row">
        <div class="col-12 col-sm-7 mx-auto text-center pt-5">
            <h5 style="color:#98b9b5;">MEET OUR NEW PIECES AND CHOOSE YOUR HERO</h5>
            <p class="description pb-3 mt-2" style="font-size:14px;color:#999999;">It's time to create a new story with our newest characters. <br> Discover all of our new products and choose your favorite hero <br> to be the star in your next kid's room project</p>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-4 product_thumb">
            <a href="http://www.circu.net/products/pixie-chair">
                @if (file_exists('./img/products/carousel/pixie-chair-circu-magical-furniture.jpg'))
                    <img src="/img/products/carousel/pixie-chair-circu-magical-furniture.jpg" class="img-fluid">
                @endif
                <div class="product-caption"> Pixie </div>
                <div class="product-caption-sub"> Chair </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'pixie-chair'] ) }}"><span>GET PRICE</span></a>
            </div>
        </div>

        <div class="col-sm-4 product_thumb">
            <a href="http://www.circu.net/products/little-bunny-chair">
                @if (file_exists('./img/products/carousel/little-bunny-chair-circu-magical-furniture.jpg'))
                    <img src="/img/products/carousel/little-bunny-chair-circu-magical-furniture.jpg" class="img-fluid">
                @endif
                <div class="product-caption"> Little Bunny </div>
                <div class="product-caption-sub"> Chair </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'little-bunny-chair'] ) }}"><span>GET PRICE</span></a>
            </div>
        </div>

        <div class="col-sm-4 product_thumb">
            <a href="http://www.circu.net/products/little-mermaid-chair">
                @if (file_exists('./img/products/carousel/little-mermaid-chair-circu-magical-furniture.jpg'))
                    <img src="/img/products/carousel/little-mermaid-chair-circu-magical-furniture.jpg" class="img-fluid">
                @endif
                <div class="product-caption"> Little Mermaid </div>
                <div class="product-caption-sub"> Chair </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'little-mermaid-chair'] ) }}"><span>GET PRICE</span></a>
            </div>
        </div>

        <div class="col-sm-4 product_thumb">
            <a href="http://www.circu.net/products/puzzled-bookcase-desk">
                <img src="/img/products/puzzled-bookcase-desk/364x368/puzzled-bookcase-desk-circu-magical-furniture-2.jpg" class="img-fluid">
                <div class="product-caption"> Puzzled </div>
                <div class="product-caption-sub"> Bookcase | Desk </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'puzzled-bookcase-desk'] ) }}"><span>GET PRICE</span></a>
            </div>
        </div>

        <div class="col-sm-4 product_thumb">
            <a href="http://www.circu.net/products/puzzled-bookcase-desk">
                <img src="/img/products/puzzled-bookcase-desk/364x368/puzzled-bookcase-desk-circu-magical-furniture-3.jpg" class="img-fluid">
                <div class="product-caption"> Puzzled </div>
                <div class="product-caption-sub"> Bookcase | Desk </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'puzzled-bookcase-desk'] ) }}"><span>GET PRICE</span></a>
            </div>
        </div>

        <div class="col-sm-4 product_thumb">
            <a href="http://www.circu.net/products/puzzled-bookcase-desk">
                <img src="/img/products/puzzled-bookcase-desk/364x368/puzzled-bookcase-desk-circu-magical-furniture-1.jpg" class="img-fluid">
                <div class="product-caption"> Puzzled </div>
                <div class="product-caption-sub"> Bookcase | Desk </div>
            </a>
            <div class="slideToggle">
                <a rel="modal:open" href="{{ route('modal-product-price', ['name' => 'puzzled-bookcase-desk'] ) }}"><span>GET PRICE</span></a>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid">
    <div class="row">
      <div class="col-12 p-0 position-relative ">
            <img src="/img/landing/latest-products/graphic-collection-circu-magical-furniture.gif" class="d-none d-sm-block img-fluid">
            <img src="/img/landing/latest-products/graphic-collection-circu-magical-furniture-mobile.gif" class="d-block d-sm-none img-fluid">
        </div>
    </div>
</div>

<div class="container max-width-site">
    <div class="row">
        
        @foreach ($products_graphic as $product)

            <div class="col-sm-3 product_thumb">
                <a href="http://www.circu.net/products/{{ $product->slug }}">
                    @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
                        <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-fluid">
                    @endif
                    <div class="product-caption"> {{ $product->name }} </div>
                    <div class="product-caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => $product->slug] ) }}"><span>GET PRICE</span></a>
                </div>
            </div>

        @endforeach

    </div>

    <div class="row main_area area_products">
        <div class="col-12 text-center pt-5 pb-2">
            <h5> In every story there is a chapter, don't miss ours </h5>
        </div>

        <div class="col-12 social_actions text-center pt-4 pb-5">
            <a href="https://instagram.com/circu_magical_furniture/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/circu-magicalfurniture/" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.pinterest.com/circudesign/" target="_blank">
                <i class="fab fa-pinterest-p"></i>
            </a>
            <a href="https://www.facebook.com/circumagicalfurniture/" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/circu_magical" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.youtube.com/channel/UC2_hoG6aHFGnqF9SVTkhwxA" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
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