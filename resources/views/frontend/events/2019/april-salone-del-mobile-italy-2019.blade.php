@extends('layouts.master')

@section('main-content')
<div class="container">
        <div class="row" id="alert-box">
            <div class="col--12"> @if(session()->has('message'))
                <div class="alert alert-success"> {{ session()->get('message') }} </div> @endif </div>
        </div>
    </div>
    <div class="container-fluid">
        
      <div class="row">
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative">
         <div class="item">
                <a href="https://circu.net/virtual-tour/salone-del-mobile-italy-april-2019?utm_source=Circu&utm_medium=slideshow&utm_content=banner-landing&utm_campaign=isaloni2019VT"><img src="/img/slides/main/apr-salone-del-mobile-italy-2019-VT.jpg" class="cd-dot img-fluid d-none d-md-block"><img src="/img/slides/main/apr-salone-del-mobile-italy-2019-VT-mobile.jpg" class="cd-dot img-fluid d-block d-md-none">
                </a>
            </div>
          <div class="item">
            <a rel="modal:open" href="{{route('modal-ebook-ch')}}"><img src="/img/events/apr-salone-del-mobile-italy-2019/banner-novelties-isaloni.jpg" class="cd-dot img-fluid d-none d-md-block"><img src="/img/events/apr-salone-del-mobile-italy-2019/banner-novelties-isaloni-mobile.jpg" class="cd-dot img-fluid d-block d-md-none"></a>
          </div>
        </div>
      </div>
    </div>
    <!-- end row -->
    
    <div class="container max-width-site">
        <div class="row content_fair_area marg_top_big">

            <div class="col-12 col-md-12 text-center">
                <h1>Salone del Mobile Milano 2019 is about to become even more magical…</h1>

                <p>From the 9th to the 14th of April, Circu will be a part of Salone del Mobile Milano 2019.<br>
                We will once again have the honour of presenting our magical designs at the world’s main design stage. Our new collection will most certainly steal the show’s spotlight.<br>
                Inspired by modern themes and magical worlds, Circu creates the most unique and dreamy designs. Our pieces allow children to create their very own fairy tale, where they’re the heroes in their stories.</p>

                {{-- <div title="Add to Calendar" class="my-3 addeventatc">
                    Add to Calendar
                    <span class="start">04/09/2019 08:00 AM</span>
                    <span class="end">04/14/2019 08:00 AM</span>
                    <span class="timezone">Europe/Paris</span>
                    <span class="title">Salone del Mobile Milano</span>
                    <span class="location">Pavillion 4 | Stand E08 - E12 - D07 - D21</span>
                </div> --}} 

                <!-- <div class="slideToggle">
                    <a rel="modal:open" href="{ { route('modal-book-meeting', ['name' => 'jan-maison-et-objet-paris-2019'] ) }}" class="col-lg-3 col-md-6 col-sm-12"><span>BOOK MEETING</span></a> 
                    <a rel="modal:open" href="{ { route('modal-press-release', ['name' => 'jan-maison-et-objet-paris-2019'] ) }}" class="col-lg-3 col-md-6 col-sm-12"><span>DOWNLOAD PRESSKIT</span></a>
                </div> -->

            </div>

        </div>
        <div class="row main_area d-none d-md-block">
          <div class="rotateslider-container" id="slider">
           @for ($i=1; $i<=8; $i++)
            <div class="rotateslider-item"><img src="/img/events/apr-salone-del-mobile-italy-2019/salone-del-mobile-italy-2019-circu-{{$i}}.jpg"></div>
            @endfor
            <span class="arrow right js-rotateslider-arrow" data-action="next"></span>
            <span class="arrow left js-rotateslider-arrow" data-action="prev"></span>
          </div>
        </div>
        
        <div class="row main_area area_products">

            <div class="col-12 text-center pt-3 pb-2">
                <h5> OUR MAGICAL VIDEOS FROM <b>SALONE DEL MOBILE</b> </h5>
            </div>

          <div class="col-12 col-sm-10 offset-sm-1">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gGbuE2Glpzk?rel=0" allowfullscreen></iframe>
          </div>
          </div>

        </div>
    </div>
    <div class="container max-width-site">
        <div class="row main_area area_products visible-sm visible-md visible-lg">
         <div class="col-12 owl-banners owl-carousel owl-slide owl-theme">
         <div class="item"> <a rel="modal:open" href="{{route('modal-ebook-ch')}}"><img src="/img/events/apr-salone-del-mobile-italy-2019/banner-newproductsisaloni.jpg" class="cd-dot img-fluid d-none d-md-block"><img src="/img/events/apr-salone-del-mobile-italy-2019/banner-newproductsisaloni-mobile.jpg" class="cd-dot img-fluid d-block d-md-none"></a></div>
         <div class="item"><a href="{{ route('catalogue') }}">
          <img src="/img/download-catalogue-circu-magical-furniture.jpg" class="img-fluid d-none d-md-block" alt="Circu New Magical Catalogue"><img src="/img/download-catalogue-circu-magical-furniture-mobile.jpg" class="img-fluid d-block d-md-none" alt="Circu New Magical Catalogue"></a></div>
             
        </div>
        </div>

    </div>

    <div class="container max-width-site">
        <div class="row main_area area_products">
            <div class="col-12 text-center pt-2 pb-2">
                <h5> <b>Products at</b> Salone del Mobile Milano </h5>
            </div>

            @foreach ($products as $product)

            <div class="col-6 col-sm-4 product_thumb" id="{{ $product->id }}">
                <a href="http://www.circu.net/products/{{ $product->slug }}">
                    @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
                        <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-responsive">
                    @else
                        <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-responsive">
                    @endif
                    <div class="product-caption"> {{ $product->name }} </div>
                    <div class="product-caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>
                    @if ($product->is_new)
                        <div class="new-product">
                            <img src="/img/icons/new-product.png">
                        </div>
                    @endif
                </a>
                <div class="slideToggle">
                    <a rel="modal:open" href="{{ route('modal-product-price', ['name' => $product->slug] ) }}"><span>GET PRICE</span></a>
                </div>
                </div>

            @endforeach

        </div>
</div>
    <div class="container-fluid"> 
        <div class="row main_area area_products visible-sm visible-md visible-lg">
            <div class="col-12"><a href="http://covetedition.com/coveted-edition-magazine-thirteenth-edition/" target="_blank"><img src="/img/events/apr-salone-del-mobile-italy-2019/banner-coveted-landingisaloni-circu.jpg" target="_blank" class="img-responsive" alt="Coveted Edition Magazine - Thirteenth Edition"></a></div>
        </div>
    </div>


    <!--  <div class="container container-inner">

    </div> -->

@endsection

@section('head-includes')

<title>Salone del Mobile 2019 | Circu Magical Furniture</title>
@if (Session::has('data'))
<meta http-equiv="refresh" content="3;url={{ Session::get('data') }}"> @endif
<meta name="description" content="circu magical furniture" />
<meta name="author" content="circu">
<meta name="keywords" content="Salone del Mobile 2019" />
<link REL="SHORTCUT ICON" HREF="https://circu.net/favicon-circu-magical-furniture.jpg">

<style>
    .rotateslider-container {
      position: relative;
      width: 1000px;
      height: 500px;
      margin-left: auto;
      margin-right: auto;
    }

    .rotateslider-container .rotateslider-item {
      position: absolute;
      left: 50%;
      top: 50%;
      -webkit-transform: translateY(-50%) translateX(-50%) scale(0.6);
      -ms-transform: translateY(-50%) translateX(-50%) scale(0.6);
      transform: translateY(-50%) translateX(-50%) scale(0.6);
      opacity: 0;
      -webkit-filter: blur(5px);
      filter: blur(5px);
      -webkit-transition: all 0.3s ease;
      transition: all 0.3s ease;
    }

    .rotateslider-container .rotateslider-item.next {
      left: 80%;
      opacity: 0.5;
    }

    .rotateslider-container .rotateslider-item.prev {
      left: 20%;
      opacity: 0.5;
    }

    .rotateslider-container .rotateslider-item.now {
      opacity: 1;
      -webkit-filter: blur(0px);
      filter: blur(0px);
      top: 50%;
      left: 50%;
      -webkit-transform: translateY(-50%) translateX(-50%) scale(1);
      -ms-transform: translateY(-50%) translateX(-50%) scale(1);
      transform: translateY(-50%) translateX(-50%) scale(1);
    }

    .rotateslider-container .arrow {
      display: inline-block;
      width: 50px;
      height: 50px;
      position: absolute;
      top: 50%;
      margin-top: -25px;
      cursor: pointer;
      color: #fff;
      text-align: center;
    }
    .rotateslider-container .arrow.left { 
        left: 0;
        background: url('/img/prev.png') no-repeat;
      width:66px;
    height:66px;
     }
    .rotateslider-container .arrow.right { 
        right: 0;
        background: url('/img/next.png') no-repeat;
          width:66px;
        height:66px; 
    }
</style>
@endsection

@section('footer-includes')
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>
    <script src="https://www.jqueryscript.net/demo/Basic-3D-Image-Rotator-with-jQuery-CSS3-rotateSlider/src/js/jquery.rotateSlider.js"></script>
    <script src="https://www.jqueryscript.net/demo/Basic-3D-Image-Rotator-with-jQuery-CSS3-rotateSlider/src/js/app.js"></script>
    <script>
        $('.owl-main').owlCarousel({
        loop: true, 
        margin: 10, 
        lazyLoad: false, 
        dots: false, 
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
            $('.owl-banners').owlCarousel({
        loop: true, 
        margin: 10, 
        lazyLoad: false, 
        dots: false, 
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

        $('#slider').rotateSlider();
    </script>
@endsection