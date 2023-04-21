@extends('layouts.master')
@section('meta')
<title>Search - Circu Magical Furniture</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Search - Circu Magical Furniture" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/about" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection
@section('head-includes')
<link rel="stylesheet" type="text/css" href="/css/slick.css" />
<style>
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
@section('main-content')
<div class="container-fluid">
  <div class="row">
    <div class="col-12 text-center py-5">
      <div class="row">
        <div class="col-12">
          <p class="section-title">Found {{ count($searchResults) }} products with match with "{{ $term }}"</p>
        </div>
      </div>
      <div class="row">
        @foreach ($searchResults as $product_item)

        <div class="col-6 col-sm-6 col-md-4 col-lg-3 product-box ">
          <div class="product_thumb py-4">
              <a href="{{ route('product', ['product' => $product_item->slug]) }}">
                  @if (file_exists('./img/products/thumbnails/' . $product_item->slug . '-circu-magical-furniture.png'))
                      <img src="/img/products/thumbnails/{{ $product_item->slug }}-circu-magical-furniture.png"
                          width="960" height="800" class="img-fluid">
                  @else
                      <img src="/img/products/thumbnails/{{ $product_item->slug }}-circu-magical-furniture.gif"
                          width="960" height="800" class="img-fluid">
                  @endif

                  <div class="product--title">
                      <span class="name">{{ $product_item->name }}</span>
                      <br class="d-block d-md-none">
                      <span
                          class="sub_category">{{ ucwords($product_item->sub_category->sub_category_languages[0]->name) }}</span>
                  </div>
              </a>
              <div class="col-12 clearfix position-relative mt-1 p-0">
                  <div class="slideToggle">
                      <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable"
                          href="{{ route('modal-product-price',  $product_item->slug) }}"><span>GET
                              <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                  </div>
              </div>

              @if (($product_item->is_new && $product_item->slug == 'bubble-gum-bed') || $product_item->slug == 'bubble-gum-bench' || $product_item->slug == 'bubble-gum-dressing-table' || $product_item->slug == 'bubble-gum-chest-3-drawers' || $product_item->slug == 'bubble-gum-chest-2-drawers' || $product_item->slug == 'bubble-gum-desk' || $product_item->slug == 'bubble-slide' || $product_item->slug == 'bubble-loop' || $product_item->slug == 'bubble-drop' || $product_item->slug == 'bubble-gum-playground' || $product_item->slug == 'bubble-gum-big-mirror' || $product_item->slug == 'bubble-gum-small-mirror' || $product_item->slug == 'cotton-candy-sofa' || $product_item->slug == 'rainbow-sofa')
                  <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                      <img src="/img/icons/product-new-collection.png">
                  </div>
              @elseif($product_item->is_new)
                  <div class="new-product" style="top: 2%;right: 2%;width: 19%;">
                      <img src="/img/icons/product-new.png">
                  </div>
              @endif

              <div class="product-box--content d-none d-md-block">
                  @if ($product_item->product_samples->count() > 1 && $product_item->slug != 'dainty-armchair')
                      <div class="col-12 slider-for text-center">
                          @foreach ($product_item->product_samples as $product_sample)
                              <div>
                                  <a href="{{ route('product', ['product' => $product_item->slug]) }}">
                                      <img src="/img/products/{{ $product_item->slug }}/finishes/{{ $product_item->slug }}-circu-magical-furniture-{{ $product_sample->sample->slug }}.png"
                                          width="960" height="800" alt="" class="img-fluid">
                                  </a>
                              </div>
                          @endforeach
                      </div>
                      <div class="col-12 product-samples slider-nav text-center p-0">
                          @foreach ($product_item->product_samples as $product_sample)
                              @if ($product_sample->is_options == null)
                                  <div class="d-inline text-center">
                                      <img src="/img/icons/finishes/{{ $product_sample->sample->slug }}-sm.png"
                                          width="20" height="20" alt="" class="img-fluid">
                                  </div>
                              @endif
                          @endforeach
                      </div>
                  @else
                      <div>
                          <a href="{{ route('product', ['product' => $product_item->slug]) }}">
                              <img src="/img/products/thumbnails-covers/{{ $product_item->slug }}-circu-magical-furniture.jpg"
                                  width="500" height="420" alt="" class="img-fluid">
                          </a>
                      </div>
                  @endif
                  <div class="col-12 clearfix position-relative mt-3 p-0">
                      <div class="slideToggle">
                          <a rel="modal:open" class="btn-green-underline mt-0 modal-cursor-disable"
                              href="{{ route('modal-product-price',  $product_item->slug) }}"><span>GET
                                  <b>PRICE <i class="fas fa-caret-right"></i></b></span></a>
                      </div>
                  </div>
              </div>

          </div>
      </div>
        @endforeach
      </div>
    </div>
  </div>
</div>


@endsection



@section('footer-includes')
<script type="text/javascript" src="/js/slick.min.js"></script>
<script type="text/javascript">
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
                    slidesToShow: 15,
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
  $('.owl-novelties').owlCarousel({
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
      768: {
        items: 1
      }
    }
  });
</script>
@endsection