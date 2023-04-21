@extends('layouts.master')

@section('main-content')

    <div class="container">
        
        <div class="row">
        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-none d-md-block">
            <div class="item">
                <a rel="modal:open" href="{{ route('modal-new-products', ['name' => 'jan-maison-et-objet-paris-2019'] ) }}"><img src="/img/events/jan-maison-et-objet-paris-2019/new-products-mo-2019.jpg" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://circu.net/virtual-tour/maison-et-objet-paris-january-2019/?utm_source=Circu&utm_medium=slideshow&utm_content=virtual-tour-mo-2019&utm_campaign=virtual-tour" target="_blank"><img src="/img/slides/main/virtual-tour-maison-objet-2019.jpg" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/trends?utm_source=Circu-trends&utm_medium=slideshow&utm_content=Trends-2019&utm_campaign=trendbook"><img src="/img/slides/main/trends-ideas-2019-circu-magical-furniture.jpg" class="cd-dot img-fluid">
                </a>
            </div>
            
            {{-- <div class="item">
                <a href="{{ route('category', ['category' => 'lighting']) }}"><img src="/img/slides/main/lighting-collection-circu-magical-furniture.jpg" class="cd-dot img-fluid">
                    <div class="position-absolute text-container d-none d-md-inline">
                        <h2>NEW LIGHTING COLLECTION</h2>
                        <div>Discover Diana Table > </div>
                    </div>
                </a>
            </div> --}}
            
        </div>

        <div class="col-12 owl-main owl-carousel owl-slide owl-theme nopadding position-relative d-block d-md-none">
            <div class="item">
                <a rel="modal:open" href="{{ route('modal-new-products', ['name' => 'jan-maison-et-objet-paris-2019'] ) }}"><img src="/img/slides/main/new-products-mo-2019-mobile.jpg" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://circu.net/virtual-tour/maison-et-objet-paris-january-2019/?utm_source=Circu&utm_medium=slideshow&utm_content=virtual-tour-mo-2019&utm_campaign=virtual-tour" target="_blank"><img src="/img/slides/main/virtual-tour-maison-objet-2019-mobile.jpg" class="cd-dot img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="https://www.circu.net/trends?utm_source=Circu-trends&utm_medium=slideshow&utm_content=Trends-2019&utm_campaign=trendbook"><img src="/img/slides/main/trends-ideas-2019-circu-magical-furniture-mobile.jpg" class="cd-dot img-fluid">
                </a>
            </div>
        </div>
    </div>
    <!-- end row -->

        <div class="row content_fair_area marg_top_big">

            <div class="col-12 col-md-12 text-center">
                <h1>Thank you for visiting us at Maison et Objet 2019</h1>

                <p>From 18th to 22nd of January, Circu was present at Maison et Objet, Paris 2019.</p>

                <p>Circu is proud to be part of this Paris adventure once again with special pieces and the reveal, in first hands our new collection.</p>

                <p>We would like to thank you all for visiting our stand this year and we hope you enjoyed to discover our enchanted furniture.</p>

                <p>We look forward to seeing you again in the near future.</p>

                {{-- <div title="Add to Calendar" class="addeventatc">
                    Add to Calendar
                    <span class="start">18/01/2019 08:00 AM</span>
                    <span class="end">22/01/2019 10:00 AM</span>
                    <span class="timezone">Europe/Paris</span>
                    <span class="title">Maison et Objet 2019</span>
                    <span class="location">Circu @ Hall 8 | Stand C20</span>
                </div> --}}

                <div class="slideToggle">
                    {{-- <a rel="modal:open" href="{{ route('modal-book-meeting', ['name' => 'jan-maison-et-objet-paris-2019'] ) }}" class="col-lg-3 col-md-6 col-sm-12"><span>BOOK MEETING</span></a> --}}
                    <a rel="modal:open" href="{{ route('modal-press-release', ['name' => 'jan-maison-et-objet-paris-2019'] ) }}" class="col-lg-3 col-md-6 col-sm-12"><span>DOWNLOAD PRESSKIT</span></a>
                </div>

            </div>

        </div>

        <div class="row main_area">
          <div class="rotateslider-container" id="slider">
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-01.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-02.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-03.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-04.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-05.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-06.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-07.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-08.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-09.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-10.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-11.jpg"></div>
            <div class="rotateslider-item"><img src="/img/events/jan-maison-et-objet-paris-2019/maison-objet-2019-jan-circu-12.jpg"></div>
            
            <span class="arrow right js-rotateslider-arrow" data-action="next"></span>
            <span class="arrow left js-rotateslider-arrow" data-action="prev"></span>
          </div>
        </div>

        <div class="row main_area area_products">
          {{-- <div class="col-12"><div class="separator"><h3 class="background red"> <span> OUR MAGICAL VIDEOS FROM <b>MAISON ET OBJET</b></span></h3></div></div> --}}

            <div class="col-12 text-center pt-3 pb-2">
                <h5> OUR MAGICAL VIDEOS FROM <b>MAISON ET OBJET</b> </h5>
            </div>

          <div class="col-12 col-sm-10 offset-sm-1">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/p7t_Y7yHbSI?rel=0" allowfullscreen></iframe>
          </div>
          </div>

          {{-- <div class="col-xs-6">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eDRDqhU7OVU?rel=0" allowfullscreen></iframe>
          </div>
          </div> --}}
        </div>

    
        <div class="row main_area area_products">
            <div class="col-12 text-center pt-5 pb-2">
                <h5> <b>PRODUCTS AT</b> MAISON ET OBJET 2019 </h5>
            </div>

            {{-- <div class="col-12">
                <div class="separator">
                    <h3 class="background red"> 
                        <span> <b>PRODUCTS AT</b> MAISON ET OBJET 2019</span>
                    </h3>
                </div>
            </div> --}}

            @foreach ($products as $product)

            <div class="col-sm-3 product_thumb">
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

        <div class="row main_area area_products visible-sm visible-md visible-lg">
            <div class="col-12"><a href="https://www.circu.net/download-catalogue" target="_blank"><img src="/img/events/jan-maison-et-objet-paris-2019/press-release-circu.jpg" target="_blank" class="img-responsive" alt="Coveted Edition Magazine - Twelve Edition"></a></div>
        </div>

        {{-- <div class="row main_area area_products visible-sm visible-md visible-lg">
            <div class="col-xs-12"><a href="https://covetedition.com/coveted-edition-magazine-twelve-edition/" target="_blank"><img src="/img/events/jan-maison-et-objet-paris-2019/magazine-circu.jpg" class="img-responsive" alt="Coveted Edition Magazine - Twelve Edition"></a></div>
        </div> --}}

    </div>

    <!--  <div class="container container-inner">

    </div> -->


@endsection

@section('head-includes')

<title>Maison et Objet 2019 | Circu Magical Furniture</title>
<meta name="description" content="circu magical furniture" />
<meta name="author" content="circu">
<meta name="keywords" content="maison et object" />
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
    {{-- <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script> --}}
    <script src="https://www.jqueryscript.net/demo/Basic-3D-Image-Rotator-with-jQuery-CSS3-rotateSlider/src/js/jquery.rotateSlider.js"></script>
    <script src="https://www.jqueryscript.net/demo/Basic-3D-Image-Rotator-with-jQuery-CSS3-rotateSlider/src/js/app.js"></script>
    <script>
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

        $('#slider').rotateSlider();
    </script>
@endsection