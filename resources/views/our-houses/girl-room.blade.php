@extends('layouts.master')
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.css" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/default-skin/default-skin.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
    .pswp {
        z-index: 10052;
    }

    .pswp img {
        object-fit: contain;
    }

    h2.category_name_title,
    .category_name_title {
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 1.3rem;
        letter-spacing: 3px;
        padding: 0.5rem 2rem;
        color: #9fbfbc !important;
        font-weight: normal;
        cursor: auto !important;
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
        /*display: block;*/
    }

    .product--title .sub_category {
        text-transform: lowercase;
        /*display: block;*/
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
        display: inline-block !important;
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

    .owl-carousel .owl-dots.disabled,
    .owl-carousel .owl-nav.disabled {
        display: block !important;
    }

    .horizontal {
        width: 60% !important;
    }

    .vertical {
        width: 20% !important;
    }

    .form-ebook-interior-designers-middle-banner .input-block {
        margin: 0px 0px 0.4rem !important;
        width: 100%;
    }

    .text-1-title {
        text-transform: uppercase;
        color: white;
        font-size: 17px;
        font-weight: bold;
    }

    .text-2-title {
        text-transform: inherit;
        color: white;
        font-size: 13px;
    }

    .text-3-title {
        text-transform: uppercase;
        color: white;
        font-size: 11px;
        font-weight: bold;
    }

    h2.category_name_room_title {
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 1.1rem;
        letter-spacing: 2px;
        padding: 0.5rem 2rem;
        color: #9fbfbc !important;
        font-weight: normal;
        cursor: pointer !important;
    }

    h2.category_name_room_subtitle {
        font-family: 'RalewayMedium', sans-serif;
        text-transform: uppercase;
        font-size: 0.7rem;
        letter-spacing: 2px;
        padding: 0.5rem 2rem;
        color: #9fbfbc !important;
        font-weight: normal;
        cursor: pointer !important;
    }

    @media (min-width:1100px) {
        .div-form-ourhouses {
            padding-right: 5rem !important;
            padding-left: 5rem !important;
        }

        .div-form-ourhouses .div-button-submit {
            position: absolute !important;
        }

        .div-text-banner-center-paddings {
            padding-right: 3rem !important;
            padding-left: 3rem !important;
        }
    }

    .btn-video {
        background-color: rgb(255, 255, 255, 0.8);
        padding: 7px 30px;
        color: #a9c6c3;
        letter-spacing: 2px;
        font-size: 0.75rem;
        font-weight: 600;
        display: inline-block;
        cursor: pointer;
    }

    .owl-products .owl-item {
        z-index: 1;
    }

    .pswp__ui--fit .pswp__top-bar,
    .pswp__ui--fit .pswp__caption,
    .pswp__top-bar,
    .pswp__caption {
        background-color: #a9c6c3 !important;
    }

    .pswp__button--arrow--left:before,
    .pswp__button--arrow--right:before {
        content: '';
        top: 35px;
        background-color: #a9c6c3 !important;
        height: 30px;
        width: 32px;
        position: absolute;
    }

    .btn-green-underline {
        font-size: 12px;
        letter-spacing: 1px;
        padding: 5px 20px 4px;
        margin: 0 !important;
        z-index: 2;
        background-color: #98b9b5;
        color: #FFFFFF;
        border: 1px solid #98b9b5;
        display: inline-block;
    }
</style>
@endsection

@section('main-content')
<div class="container-fluid p-0">
    <div class="row m-0 p-0">
        <div class="col-12 p-0">
            <img src="/img/our-houses/single-page/girl-room/banners/banner-d.jpg" class="img-fluid img-height d-none d-md-block" style="width: 100%;">
            <img src="/img/our-houses/single-page/girl-room/banners/banner-m.jpg" class="img-fluid img-height-mobile d-block d-md-none" style="width: 100%;">
            <a href="https://www.circu.net/virtual-tour/our-houses-girl-room-2021/" target="_blank" style="z-index:2;">
                <div class="text-hover text-center position-absolute" style="bottom: 6%;top: unset;">
                    <div class="btn-video grow">START VIRTUAL TOUR</div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid p-0 pt-2 section-form">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>LITTLE-GIRL BEDROOM</span></h2>
    </div>
</div>

<!-- <div class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="/img/our-houses/single-page/boy-room/images/boy-room-1-vertical.jpg" itemprop="contentUrl" data-size="1679x1108">
            <img src="/img/our-houses/single-page/boy-room/images/boy-room-1-vertical.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <figcaption itemprop="caption description">Image caption</figcaption>
    </figure>

    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="/img/our-houses/single-page/boy-room/images/boy-room-2-vertical.jpg" itemprop="contentUrl" data-size="1679x1108">
            <img src="/img/our-houses/single-page/boy-room/images/boy-room-2-vertical.jpg" itemprop="thumbnail" alt="Image description" />
        </a>
        <figcaption itemprop="caption description">Image caption</figcaption>
    </figure>


</div> -->

<div class="container-fluid p-0 ">
    <div class="row m-0 p-0 my-gallery" id="gallery">


        <figure class="col-12 col-md-3 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-1-vertical.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-1-vertical.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>

        <figure class="col-12 col-md-3 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-2-vertical.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-2-vertical.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>

        <figure class="col-12 col-md-3 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-3-vertical.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-3-vertical.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>

        <figure class="col-12 col-md-3 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-4-vertical.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-4-vertical.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>

        <figure class="col-12 col-md-6 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-1-horizontal.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-1-horizontal.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>

        <figure class="col-12 col-md-3 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-5-vertical.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-5-vertical.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>

        <figure class="col-12 col-md-3 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-6-vertical.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-6-vertical.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>
        <figure class="col-12 col-md-3 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-7-vertical.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-7-vertical.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>

        <figure class="col-12 col-md-3 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-8-vertical.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-8-vertical.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>
        <figure class="col-12 col-md-6 p-0 m-0" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
            <a href="/img/our-houses/single-page/girl-room/images/girl-room-2-horizontal.jpg" itemprop="contentUrl" data-width="1679" data-height="1108">
                <img src="/img/our-houses/single-page/girl-room/images/girl-room-2-horizontal.jpg" itemprop="thumbnail" alt="Boy Room" style="width: 100%;height: 100%;padding-bottom: 2px;padding-right: 2px;" />
            </a>
        </figure>
    </div>
</div>

<!-- <div class="container-fluid p-0 py-2">
    <div class="row m-0 p-0 d-none d-md-block">
        <div class="col-6 float-left">
            <div class="col-12 text-right slideToggle p-0">
                <a rel="modal:open" href="" class="btn-green-underline modal-cursor-disable" style="width: 210px;text-align: center;"><span style="color:white;"><b>GET THE LOOK</b></span></a>
            </div>
        </div>
        <div class="col-6 float-left">
            <div class="col-12 text-left slideToggle p-0">
                <a rel="modal:open" href="" class="btn-green-underline modal-cursor-disable" style="width: 210px;text-align: center;"><span style="color:white;"><b>DESIGN SERVICE</b></span></a>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid p-0 pt-2">
    <div class="col-12 text-center slideToggle p-0 py-3">
        <a rel="modal:open" href="{{ route('modal-download-hr-images-girl') }}" class="btn-green-underline "><span style="color:white;"><b>GET HR IMAGES</b></span></a>
    </div>
</div>


<div class="container-fluid p-0 pt-2" style="clear:both;">
    <div class="row m-0 p-0">
        <div class="col-12 p-0 d-none d-md-block">
            <video width="100%" height="auto" onloadeddata="this.play();" autoplay="" muted="" loop="" playsinline="">
                <source src="/img/our-houses/single-page/girl-room/girl-room-d.mp4" type="video/mp4">
            </video>
        </div>
        <div class="col-12 p-0 d-block d-md-none">
            <video width="100%" height="auto" onloadeddata="this.play();" autoplay="" muted="" loop="" playsinline="">
                <source src="/img/our-houses/single-page/girl-room/girl-room-m.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<div class="container-fluid p-0 pt-2">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>OUR MAGICAL PIECES</span></h2>
    </div>
</div>
<div class="container-fluid p-0">
    <div class="col-12 owl-products owl-carousel owl-slide owl-theme p-0 position-relative">
        @foreach($all_products as $key => $category)
        @foreach($category as $product)
        @if($product->slug == "cloud-shelf-small" || $product->slug == "cloud-shelf-big" || $product->slug == "gold-box" || $product->slug == "cloud-nightstand" || $product->slug == "cloud-stool-puff" || $product->slug == "cloud-chest-6-drawers" || $product->slug == "fantasy-air-nightstand" || $product->slug =="cloud-mirror" || $product->slug == "cloud-lamp-small" || $product->slug == "fantasy-air-bookcase-limited-edition" || $product->slug == "cloud-shelf-big" || $product->slug == "diana-table-lamp" || $product->slug == "magical-mirror" || $product->slug == "cloud-lamp-big" || $product->slug == "cloud-lamp-small" || $product->slug == "diana-table-lamp" || $product->slug == "cloud-sofa" || $product->slug == "fantasy-air-shelf-small" || $product->slug == "animal-stool-elephant" || $product->slug == "animal-stool-bird")
        <div class="item col-12 product-box my-4 float-left">
            <div class="product_thumb py-4">
                @if(file_exists('./img/products/thumbnails/'.$product->slug.'-circu-magical-furniture.png'))
                <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.png" width="960" height="800" class="img-fluid">
                @else
                <img src="/img/products/thumbnails/{{ $product->slug }}-circu-magical-furniture.gif" width="960" height="800" class="img-fluid">
                @endif

                <div class="product--title">
                    <span class="name">{{ $product->name }}</span>
                    <span class="sub_category">{{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
                </div>

                <div class="col-12 clearfix position-relative mt-1 p-0">
                    <div class="slideToggle">
                        <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                    </div>
                </div>

                @if( $product->is_new && ($product->slug == "bubble-gum-bed") || ($product->slug == "bubble-gum-bench") || ($product->slug == "bubble-gum-dressing-table") || ($product->slug == "bubble-gum-chest-3-drawers") || ($product->slug == "bubble-gum-chest-2-drawers") || ($product->slug == "bubble-gum-desk") || ($product->slug == "bubble-slide") || ($product->slug == "bubble-drop") || ($product->slug == "bubble-loop") || ($product->slug =="bubble-gum-playground") || ($product->slug == "bubble-gum-big-mirror") || ($product->slug == "bubble-gum-small-mirror") || ($product->slug == "cotton-candy-sofa") || ($product->slug == "rainbow-sofa"))
                <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                    <img src="/img/icons/product-new-collection.png">
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
                        <div class="d-inline text-center px-1">
                            <img src="/img/icons/finishes/{{$product_sample->sample->slug}}-sm.png" width="20" height="20" alt="" class="img-fluid" style="width: 20px;height: 20px;">
                        </div>
                        @endforeach
                    </div>

                    @else
                    <div>
                        <a href="{{ route('product', ['product' => $product->slug]) }}">
                            <img src="/img/products/thumbnails-covers/{{ $product->slug }}-circu-magical-furniture.jpg" width="500" height="420" alt="" class="img-fluid">
                        </a>
                    </div>
                    @endif
                    <div class="col-12 clearfix position-relative mt-3 p-0">
                        <div class="slideToggle">
                            <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable" href="{{route('modal-product-price', ['name' => $product->slug] )}}"><span>GET <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endif
        @endforeach
        @endforeach


    </div>
</div>

<!-- <div class="container-fluid p-0 pt-2">
    <div class="col-12 text-center slideToggle p-0 py-3">
        <a rel="modal:open" href="{{ route('modal-download-ebook-our-houses') }}" class="btn-green-underline modal-cursor-disable"><span style="color:white;"><b>DOWNLOAD EBOOK</b></span></a>
    </div>
</div> -->

<div class="container-fluid p-0 pt-2">
    <div class="col-12 ">
        <h2 class="col-12 category_name_title text-center mb-0"><span>SEE MORE BEDROOMS</span></h2>
    </div>
</div>
<div class="container-fluid p-0 ">
    <div class="row m-0 p-0">
        <div class="col-12 p-0">
            <div class="col-12 col-md-3 p-0 float-left" style="cursor:pointer;">
                <a href="https://www.circu.net/our-magical-boy-room">
                    <img src="/img/our-houses/single-page/banners/boy-bedroom.jpg" class="img-fluid" style="width: 100%;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-0" style="color:white !important; "><span>LITTLE-BOY BEDROOM</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>VIEW MORE ></span></h2>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 p-0 float-left" style="cursor:pointer;">
                <a href="https://www.covethouse.eu/85-million-modern-classic-villa-in-st-petersburg/?utm_source=website&utm_medium=partners-pagproduct&utm_content=circu-ourmagicalrooms&utm_campaign=ourhouses">
                    <img src="/img/our-houses/single-page/banners/teen-bedroom.jpg" class="img-fluid" style="width: 100%;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-0" style="color:white !important; "><span>TEEN BEDROOM</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>VIEW MORE ></span></h2>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 p-0 float-left" style="cursor:pointer;">
                <a href="https://www.covethouse.eu/85-million-modern-classic-villa-in-st-petersburg/?utm_source=website&utm_medium=partners-pagproduct&utm_content=circu-ourmagicalrooms&utm_campaign=ourhouses">
                    <img src="/img/our-houses/single-page/banners/kid-bedroom.jpg" class="img-fluid" style="width: 100%;">
                    <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                        <h2 class="col-12 category_name_room_title text-center mb-0 pb-0" style="color:white !important; "><span>KIDS BEDROOM</span></h2>
                        <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span>VIEW MORE ></span></h2>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-3 p-0 float-left" style="cursor:pointer;">
                <img src="/img/our-houses/single-page/banners/play-bedroom.jpg" class="img-fluid" style="width: 100%;">
                <div class="col-12 p-0 position-absolute" style="z-index:10;bottom:2%;">
                    <h2 class="col-12 category_name_room_title text-center mb-0 pb-0" style="color:white !important; "><span>SOON PLAYROOM</span></h2>
                    <h2 class="col-12 category_name_room_subtitle text-center mb-0" style="color:white !important; "><span> </span></h2>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container-fluid pt-2" style="clear:both;">
    <div class="row pb-2">

        <div class="col-12 col-lg-8 p-0 d-block d-lg-none">
            <div class="col-12 col-xl-11 offset-0 offset-xl-1 py-1">
                <div class="row">
                    <div class="col-12 col-lg-6 p-0">
                        <img src="/img/our-houses/banner-form-ebook-m1.jpg" alt="Ebook Circu Kid's Luxury Furniture" style="width: 100%;" class="img-fluid text-center">
                        <div class="col-12 position-absolute" style="top: 50%;transform: translate(0, -35%);">
                            @include('our-houses.form-new-ebook')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-8 p-0 d-none d-lg-block ">
            <div class="col-12 p-0 ">
                <img src="/img/our-houses/banner-form-ebook.jpg" style="width:100%;height:100%;" class="img-fluid d-none d-lg-block">
            </div>
            <div class="col-12 col-lg-6 pr-lg-0 position-absolute form-catlogue-r" style="top: 50%;left: 2%; transform: translate(0,-50%);">
                @include('our-houses.form-new-ebook')
            </div>
        </div>
        <div class="col-12 col-lg-4 p-0 ">
            <a rel="modal:open" href="{{route('modal-download-pricelist-our-houses')}}">
                <img src="/img/our-houses/banner-pricelist.jpg" alt="New Catalogue 2021" class="img-fluid img-size-form" style="width:100%;height:100%;">
            </a>
        </div>
    </div>
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
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

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

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

        </div>

    </div>

</div>
@include('includes.menu-visual-new')
@endsection

@section('footer-includes')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.0/photoswipe-ui-default.min.js"></script>
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        @if(Session::has('thank_you_note'))
        setTimeout(function() {
            $('#form-ourhouses').click();
        }, 1000);
        @endif
    });




    // Init empty gallery array
    var container = [];

    // Loop over gallery items and push it to the array
    $('#gallery').find('figure').each(function(index) {
        var $link = $(this).find('a'),
            item = {
                src: $link.attr('href'),
                w: $link.data('width'),
                h: $link.data('height')
            };
        container.push(item);
    });

    // Define click event on gallery item
    $('#gallery a').click(function(event) {

        // Prevent location change
        event.preventDefault();

        // Define object and gallery options
        var $pswp = $('.pswp')[0],
            options = {
                index: $(this).parent('figure').index(),
                bgOpacity: 1,
                showHideOpacity: true
            };

        console.log($(this).parent('figure').index());

        // Initialize PhotoSwipe
        var gallery = new PhotoSwipe($pswp, PhotoSwipeUI_Default, container, options);
        gallery.init();
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

    $('.owl-products').owlCarousel({
        loop: true,
        margin: 1,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left p-0 pl-2 arrow-banners'></i>", "<i class='fas fa-chevron-right p-0 pr-2 arrow-banners'></i>"],
        autoplay: false,
        fluidSpeed: 1500,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            768: {
                items: 4,
                nav: true
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

    $(document).on('click', '.boy-room', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
        }, 1000);
    });

    $(document).on('click', '.girl-room', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
        }, 1000);
    });

    $(document).on('click', '.covet-room', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('.section-form').offset().top - $('.downbar').height() - $('.topbar').height() - $('.topbar').height() - 120
        }, 1000);
    });

    $(window).ready(function() {

        var uh = $('.topbar').height(),
            lh = $('.downbar').height(),
            hh = uh + lh,
            hhm = $('.downbar').height(),
            wh = $(window).height(),
            ww = $(window).width(),
            wh2 = $(window).height() / 2;

        if (ww < 920) {
            $('.div-text-banner-center').css('height', $('.img-height-mobile').height());
        } else {
            $('.div-text-banner-center').css('height', $('.img-height').height());
            $('.form-catlogue-r').css('height', $('.img-size-form').height());
            $('.heigh-div-form-image').css('height', $('.heigh-div-form').height());

        }

    });

    $(window).resize(function() {

        var uh = $('.topbar').height(),
            lh = $('.downbar').height(),
            hh = uh + lh,
            hhm = $('.downbar').height(),
            wh = $(window).height(),
            ww = $(window).width(),
            wh2 = $(window).height() / 2;

        if (ww < 920) {
            $('.div-text-banner-center').css('height', $('.img-height-mobile').height());
        } else {
            $('.div-text-banner-center').css('height', $('.img-height').height());
            $('.form-catlogue-r').css('height', $('.img-size-form').height());
            $('.heigh-div-form-image').css('height', $('.heigh-div-form').height());

        }

    });

    $(".country-ebook").change(function() {
        var selected_option = $(this).val();
        if (selected_option === 'United States') {
            $('.state-ebook').removeClass('d-none').children().attr('data-parsley-required', 'true');
        }
        if (selected_option != 'United States') {
            $('.state-ebook').addClass('d-none').children().attr('data-parsley-required', 'false');
        }
    });
</script>

@endsection