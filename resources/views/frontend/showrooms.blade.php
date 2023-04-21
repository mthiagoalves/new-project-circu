@extends('layouts.master')

@section('main-content')

<div class="container-fluid">

  <div class="row">
    <div class="col-12 p-0 text-center">
      <img src="/img/landing/showrooms/slide/showroom-nyc.jpg" class="d-none d-sm-block img-fluid w-100" alt="Showroom NYC">
      <img src="/img/landing/showrooms/slide/showroom-nyc-mobile.jpg" class="d-block d-sm-none img-fluid" alt="Showroom NYC">
    </div>
  </div>

</div>

<div class="container max-width-site my-4">

  <div class="row">
    <div class="col-12 col-lg-8 offset-lg-2 mx-auto text-center py-2 py-md-5">
      <h5 class="text-uppercase">Covet NYC launched a new and improved staging project <br> in the Heart of Midtown.</h5>
      <p class="description pb-3">
        This new luxury apartment showcases 12 luxury brands, including our CIRCU Magical Furniture, in a room where our pieces fill the space with uniqueness and magic. <br>
        Book a meeting now, and visit the place where dreams are made and design will inspire you!</p>
      <a rel="modal:open" href="{{ route('modal-book-meeting', ['event' => 'Covet NYC 2.0 Book a Meeting']) }}" class="btn-border-green grow">BOOK A MEETING <i class="fas fa-caret-right"></i></a>
    </div>
  </div>

  <div class="col-12 text-center pt-5 pb-2">
    <h5> WHAT TO EXPECT</h5>
  </div>

  <div class="col-12 owl-ambiences owl-carousel owl-slide owl-theme position-relative">
    @foreach ($products as $product)
    <div class="item">
      <div class="col-12 product_thumb">
        <a href="http://www.circu.net/products/{{ $product->slug }}">
          @if (file_exists('./img/products/carousel/'. $product->slug .'-circu-magical-furniture.jpg'))
          <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.jpg" class="img-fluid">
          @else
          <img src="/img/products/carousel/{{ $product->slug }}-circu-magical-furniture.gif" class="img-fluid">
          @endif
          <div class="product-caption"> {{ $product->name }} </div>
          <div class="product-caption-sub"> {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</div>
          @if($product->is_new)
          <div class="new-product">
            <img src="/img/icons/new-product.png">
          </div>
          @endif
        </a>
        <div class="slideToggle">
          <a rel="modal:open" href="{{ route('modal-product-price', ['name' => $product->slug] ) }}"><span>GET PRICE</span></a>
        </div>
      </div>
    </div>
    @endforeach
  </div>

</div>

<div class="container my-4">
  <div class="row">

    <div class="col-12 col-md-6">

      <div class="row">
        <div class="col-12 text-center pt-5 pb-4">
          <h5> OTHER SHOWROOMS</h5>
        </div>

        <form method="post" class="form-parsley col-12 col-lg-10 offset-lg-1 mb-3 mb-md-0" action="{{ route('process.book-meeting') }}">

          <div class="row">

            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
              {{Session::get('message')}}
            </div>
            @endif

            @include('includes.errors')

            <div class="col-12">
              <input type="hidden" name="origin" class="origin" />
              <input type="hidden" name="referrer" class="referrer" />
              <input type="hidden" name="lead_path" class="lead_path" />

              {{ csrf_field() }}

              <div class="input-block {{ $errors->has('event') ? 'has-error' : '' }}">
                <span class="txt-request">Showroom:*</span>
                <select name="event" class="custom-select event" data-parsley-required="true" value="{{ old('event') }}">
                  <option></option>
                  <option value="Covet NYC">Covet NYC</option>
                  <option value="Covet Douro">Covet Douro</option>
                  <option value="Covet London">Covet London</option>
                  <option value="Covet Paris">Covet Paris</option>
                </select>
              </div>

              <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                <span class="txt-request">Name:*</span>
                <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
              </div>

              <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                <span class="txt-request">Email:*</span>
                <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
              </div>

              <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                <span class="txt-request">Phone:</span>
                <input type="text" name="phone" class="form-control phone" data-parsley-required="false" value="{{ old('phone') }}" />
              </div>

              <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                <span class="txt-request">Occupation:*</span>
                <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                  @include('includes.options-occupation')
                </select>
              </div>

              <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                <span class="txt-request">Company:*</span>
                <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
              </div>

              <div class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
                <span class="txt-request">Country:*</span>
                <select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
                  @include('includes.options-country')
                </select>
              </div>

              <button type="submit" onclick="ga('send','event','Book a Meeting','Request Meeting','showroom-bookameeting');" id="request-pricelist-tag" class="btn-request-piece col">REQUEST MEETING</button>

            </div>


          </div>

        </form>
      </div>

    </div><!-- .col -->


    <div class="col-12 col-md-6 owl-main owl-carousel owl-slide owl-theme nopadding">
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-01-covet-nyc.jpg" alt="Covet New York" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-02-covet-nyc.jpg" alt="Covet New York" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-03-covet-nyc.jpg" alt="Covet New York" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-04-covet-nyc.jpg" alt="Covet New York" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-05-covet-nyc.jpg" alt="Covet New York" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-06-covet-london.jpg" alt="Covet London" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-06-covet-london.jpg" alt="Covet London" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-07-covet-london.jpg" alt="Covet London" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-09-covet-paris.jpg" alt="Covet Paris" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-10-covet-paris.jpg" alt="Covet Paris" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-04-covet-douro.jpg" alt="Covet Douro" class="cd-dot img-fluid">
      </div>
      <div class="item">
        <img src="/img/landing/showrooms/slide/circu-showrooms-05-covet-douro.jpg" alt="Covet Douro" class="cd-dot img-fluid">
      </div>
    </div><!-- .col -->
  </div><!-- .row -->

</div>

<div class="container-fluid">
  <div class="row" style="background-color: #f1f1f1;">
    <div class="col-12 text-center pt-5 pb-2">
      <h5> 360 Magical Experience </h5>
    </div>
    <div class="col-12 pb-5">
      <div class="row five-cols">

        <div class="col-6 col-md-1 text-center">
          <a href="https://covethouse.eu/virtual-tours/london/" target="_blank"><img src="/img/landing/showrooms/virtual-tour/covet-london.png" alt="" class="img-fluid"></a>
          <p class="product-caption">Covet London</p>
        </div>

        <div class="col-6 col-md-1 text-center">
          <a href="http://covethouse.eu/virtual-tours/paris/" target="_blank"><img src="/img/landing/showrooms/virtual-tour/covet-paris.png" alt="" class="img-fluid"></a>
          <p class="product-caption">Covet Paris</p>
        </div>

        <div class="col-6 col-md-1 text-center">
          <a href="http://covethouse.eu/virtual-tours/maison-et-objet-jan-2020/" target="_blank"><img src="/img/landing/showrooms/virtual-tour/covet-lounge.png" alt="" class="img-fluid"></a>
          <p class="product-caption">Maison et Objet 2020</p>
        </div>

        <div class="col-6 col-md-1 text-center">
          <a href="http://covethouse.eu/virtual-tours/douro/" target="_blank"><img src="/img/landing/showrooms/virtual-tour/covet-douro.png" alt="" class="img-fluid"></a>
          <p class="product-caption">Covet Douro</p>
        </div>

        <div class="col-6 col-md-1 text-center">
          <img src="/img/landing/showrooms/virtual-tour/covet-nyc.png" alt="" class="img-fluid">
          <p class="product-caption">Covet NYC <br> <i>available soon</i></p>
        </div>

      </div>
    </div><!-- .col-12 -->
  </div><!-- .row -->
</div>

<div class="container max-width-site">
  <div class="row">
    <div class="col-12 py-5 showrooms--contact">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="row">

            <div class="col-12">
              <p>
                <img src="/img/icons/flag-usa.png" alt="" class="img-fluid mr-2"><b>COVET NYC</b> <br>
                <i class="far fa-clock mr-1"></i>Monday to Friday - 10AM to 5PM. By appointment only. <br>
                <i class="fas fa-map-marker-alt mr-1"></i>157 West 57th Street 45 C . New York, NY 10019 <br>
                <i class="fas fa-headphones mr-1"></i>+1 646 991 9257 <br>
              </p>
            </div>

            <div class="col-12">
              <p>
                <img src="/img/icons/flag-portugal.png" alt="" class="img-fluid mr-2"><b>COVET DOURO</b> <br>
                <i class="far fa-clock mr-1"></i>By appointment only. <br>
                <i class="fas fa-map-marker-alt mr-1"></i>Avenida Clube de Caçadores, 4604 . 4515-654 Porto, Portugal <br>
                <i class="fas fa-headphones mr-1"></i>+351 915 204 663 <br>
              </p>
            </div>

          </div>
        </div>

        <div class="col-12 col-md-6">
          <div class="row">

            <div class="col-12">
              <p>
                <img src="/img/icons/flag-uk.png" alt="" class="img-fluid mr-2"><b>COVET LONDON</b> <br>
                <i class="far fa-clock mr-1"></i>Monday to Friday (9AM to 7PM) Saturday (9AM to 2PM) by appointment only<br>
                <!-- <i class="fas fa-map-marker-alt mr-1"></i>1 Regal House Lensbury Avenue . Fulham London . SW6 2GZ (2 minutes from the Chelsea Design Center) <br> -->
                <i class="fas fa-headphones mr-1"></i>+44(0) 203 592 6789 <br>
              </p>
            </div>

            <div class="col-12">
              <p>
                <img src="/img/icons/flag-france.png" alt="" class="img-fluid mr-2"><b>COVET PARIS</b> <br>
                <i class="far fa-clock mr-1"></i>Monday to Friday - 9:30AM to 6PM . Saturday to Sunday - 9:30AM to 7PM <br>
                <i class="fas fa-map-marker-alt mr-1"></i>154 Rue des Rosiers, 93400 Saint-Ouen (inside the Flea Market) <br>
                <i class="fas fa-headphones mr-1"></i>+33 622 334 259 <br>
              </p>
            </div>

          </div>
        </div>


      </div>
    </div><!-- .col-12 -->
  </div><!-- .row -->

</div><!-- container-->

@endsection

@section('meta')
<title>Showrooms of Circu Magical Furniture</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Showrooms - Circu Magical Furniture" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/showrooms" />
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
<script>
  $('.owl-ambiences').owlCarousel({
    loop: true,
    margin: 6,
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
        items: 2
      },
      768: {
        items: 4
      }
    }
  });
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