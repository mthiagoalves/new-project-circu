@extends('layouts.master')
@section('meta')
<title>Press - Circu Magical Furniture</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Press - Circu Magical Furniture" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/press/" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection
@section('head-includes')
<style>
  
    p {
        font-family: 'RalewayMedium', sans-serif;
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
    .eight-cols .owl-next i,
    .eight-cols .owl-prev i{
        font-size: 1rem !important;
    }

    .eight-cols .product-box .product-caption{
        top: 3%;
        color: #ffffff !important;
        font-size: 0.8rem !important;
    }

    .eight-cols .product-box a,
    .eight-cols .product-box a:hover{
        color: #ffffff !important;
        font-weight: 600;
        font-size: 0.8rem;
        letter-spacing: 1px;
        border-bottom: 1px solid #ffffff;
    }
    .videowrapper{
      height: 100% !important;
    }

    .btn-get-price:focus{
      outline:none !important;
    }
    .eight-cols .owl-prev i{
      left: 4% !important;
    }
    .eight-cols .owl-next i{
      right: 4% !important;
    }

    @media (max-width: 640px){
      .product-caption{
        font-size: 0.4rem !important;
      }
      .card-item{
        height: 230px;
      }
      .open-form{
        display: none;
      } 
    }
</style>
@endsection
@section('main-content')
<div class="container-fluid p-0">
    <div class="row m-0 outer eight-cols">
        <div class="col-6 col-md-3 col-lg-1 product-item product-box text-center p-0" style="background-color: #aed2df;">
            <div class="col-12 p-0">
                <div class="product-caption my-1 position-absolute" style="z-index: 2;"> NOVELTIES </div>
                <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                  <div class="item">
                    <a href="{{ route('new-products') }}">
                      <img src="/img/press/menu/new/dolly-playhouse.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('new-products') }}">
                      <img src="/img/press/menu/new/cloud-desk.png" class="img-fluid w-100">
                    </a>
                  </div>
                </div>
            </div>
          <div class="col-12 position-absolute" style="bottom:2%;z-index: 1;"><a href="{{ route('new-products') }}">KNOW MORE</a></div>
        </div>
        <div class="col-6 col-md-3 col-lg-1 product-item product-box text-center p-0" style="background-color: #ddd7d9;">
            <div class="col-12 p-0">
                <div class="product-caption my-1 position-absolute" style="z-index: 2;"> BEDS </div>
                <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'beds']) }}">
                      <img src="/img/press/menu/beds/mr-bunny-bed.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'beds']) }}">
                      <img src="/img/press/menu/beds/tristen-bed.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'beds']) }}">
                      <img src="/img/press/menu/beds/bun-van-bed.png" class="img-fluid w-100">
                    </a>
                  </div>
                </div>
            </div>
          <div class="col-12 position-absolute" style="bottom:2%;z-index: 1;"><a href="{{ route('category', ['category' => 'beds']) }}">KNOW MORE</a></div>
        </div>
        <div class="col-6 col-md-3 col-lg-1 product-item product-box text-center p-0" style="background-color: #f0dcca;">
            <div class="col-12 p-0">
                <div class="product-caption my-1 position-absolute" style="z-index: 2;"> SEATING </div>
                <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'seating']) }}">
                      <img src="/img/press/menu/seating/rocky-rocket.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'seating']) }}">
                      <img src="/img/press/menu/seating/mermaid-chair.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'seating']) }}">
                      <img src="/img/press/menu/seating/dainty-armchair.png" class="img-fluid w-100">
                    </a>
                  </div>
                </div>
            </div>
          <div class="col-12 position-absolute" style="bottom:2%;z-index: 1;"><a href="{{ route('category', ['category' => 'seating']) }}">KNOW MORE</a></div>
        </div>
        <div class="col-6 col-md-3 col-lg-1 product-item product-box text-center p-0" style="background-color: #e3dddf;">
            <div class="col-12 p-0">
                <div class="product-caption my-1 position-absolute" style="z-index: 2;"> LIGHTING </div>
                <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'lighting']) }}">
                      <img src="/img/press/menu/lighting/cloud-big.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'lighting']) }}">
                      <img src="/img/press/menu/lighting/cloud-small.png" class="img-fluid w-100">
                    </a>
                  </div>
                </div>
            </div>
          <div class="col-12 position-absolute" style="bottom:2%;z-index: 1;"><a href="{{ route('category', ['category' => 'lighting']) }}">KNOW MORE</a></div>
        </div>
        <div class="col-6 col-md-3 col-lg-1 product-item product-box text-center p-0" style="background-color: #cfdee0;">
            <div class="col-12 p-0">
                <div class="product-caption my-1 position-absolute" style="z-index: 2;"> STORAGE </div>
                <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'storage']) }}">
                      <img src="/img/press/menu/storage/puzzled-bookcase.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'storage']) }}">
                      <img src="/img/press/menu/storage/bubble-gum-chest.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'storage']) }}">
                      <img src="/img/press/menu/storage/bubble-gum-bookcase.png" class="img-fluid w-100">
                    </a>
                  </div>
                </div>
            </div>
          <div class="col-12 position-absolute" style="bottom:2%;z-index: 1;"><a href="{{ route('category', ['category' => 'storage']) }}">KNOW MORE</a></div>
        </div>
        <div class="col-6 col-md-3 col-lg-1 product-item product-box text-center p-0" style="background-color: #efdddc;">
            <div class="col-12 p-0">
                <div class="product-caption my-1 position-absolute" style="z-index: 2;"> PLAY & LEARN </div>
                <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'play-learn']) }}">
                      <img src="/img/press/menu/play-learn/bubble-gum-gym.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'play-learn']) }}">
                      <img src="/img/press/menu/play-learn/cloud-desk.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'play-learn']) }}">
                      <img src="/img/press/menu/play-learn/dolly-monkey-bars.png" class="img-fluid w-100">
                    </a>
                  </div>
                </div>
            </div>
          <div class="col-12 position-absolute" style="bottom:2%;z-index: 1;"><a href="{{ route('category', ['category' => 'play-learn']) }}">KNOW MORE</a></div>
        </div>
        <div class="col-6 col-md-3 col-lg-1 product-item product-box text-center p-0" style="background-color: #c2d6e8;">
            <div class="col-12 p-0">
                <div class="product-caption my-1 position-absolute" style="z-index: 2;"> MIRRORS </div>
                <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'mirrors']) }}">
                      <img src="/img/press/menu/mirrors/chameleon-mirror.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'mirrors']) }}">
                      <img src="/img/press/menu/mirrors/bubble-gum-mirror.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'mirrors']) }}">
                      <img src="/img/press/menu/mirrors/cloud-mirror.png" class="img-fluid w-100">
                    </a>
                  </div>
                </div>
            </div>
          <div class="col-12 position-absolute" style="bottom:2%;z-index: 1;"><a href="{{ route('category', ['category' => 'mirrors']) }}">KNOW MORE</a></div>
        </div>
        <div class="col-6 col-md-3 col-lg-1 product-item product-box text-center p-0" style="background-color: #d7e9d9;">
            <div class="col-12 p-0">
                <div class="product-caption my-1 position-absolute" style="z-index: 2;"> RUGS </div>
                <div class="col-12 owl-novelties owl-carousel owl-slide owl-theme nopadding position-relative">
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'rugs']) }}">
                      <img src="/img/press/menu/rugs/the-power-elephant-rug.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'rugs']) }}">
                      <img src="/img/press/menu/rugs/iv-planets-round-rug.png" class="img-fluid w-100">
                    </a>
                  </div>
          
                  <div class="item">
                    <a href="{{ route('category', ['category' => 'rugs']) }}">
                      <img src="/img/press/menu/rugs/cloud-rug.png" class="img-fluid w-100">
                    </a>
                  </div>
                </div>
            </div>
          <div class="col-12 position-absolute" style="bottom:2%;z-index: 1;"><a href="{{ route('category', ['category' => 'rugs']) }}">KNOW MORE</a></div>
        </div>
      </div>
</div>
<div class="container max-width-site pt-5">

    <div class="row page_contact_form">

        <div class="hidden-xs col-12 col-md-6 owl-main owl-carousel owl-slide owl-theme">
            <div class="item">
                <a href="{{ route('press-release', ['slug' => 'dreamhouse-adventures-bedroom']) }}"><img src="/img/slides/press/press-release-2022-dreamhouse-adventures-bedroom.jpg" class="cd-dot img-fluid"></a>
            </div>
            <div class="item">
                <a href="{{ route('press-release', ['slug' => 'press-release-2022-a-room-above-the-clouds']) }}"><img src="/img/slides/press/press-release-2022-a-room-above-the-clouds.jpg" class="cd-dot img-fluid"></a>
            </div>
            <div class="item">
                <a href="{{ route('press-release', ['slug' => 'an-adventure-around-the-world']) }}"><img src="/img/slides/press/press-release-2022-an-adventure-around-the-world.jpg" class="cd-dot img-fluid"></a>
            </div>
        </div>

        <div class="hidden-xs col-12 col-md-6">
            <div class="col-12 mb-3 mt-3 mt-md-0">
                <h6 class="my-1 text-uppercase" style="color: #89bab6;"><b>Welcome to</b></h6>
                <h4 class="mb-2 text-uppercase" style="color: #89bab6;text-align:initial;font-size: 22px;"><b>Circu Magical Furniture</b></h4>
                <p class="mt-0" style="color: #666;">Welcome to a world full of magic and fantasy, where your dreams turn into reality! Register for a Circu Press Account today, for access to a dedicated product and exclusive content download area featuring: </p>
                <p style="color: #666;"><b>Contact our Press PR </b><a href="mailto:press@circu.net" style="color: #89bab6;">press@circu.net</a></p>
            </div>

            @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                <p><span onclick="this.parentElement.style.display='none'" class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
                    {{Session::get('message')}}
                </p>
            </div>
            @endif

            @if($errors->any())
            <div class="form-group clearfix">
                <alert class="alert alert-danger float-left px-5 py-2" role="alert">
                    <span onclick="this.parentElement.style.display='none'" class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
                    <p class="m-0">
                        @foreach($errors->all() as $error)
                        {{ $error }}</br>
                        @endforeach
                    </p>
                </alert>
            </div>
            @endif

            <form method="POST" action="{{ route('process.press-register') }}" class="form_press_request form-parsley col-12 open-form-vt" data-validate="parsley">

                <div class="row">

                    {{ csrf_field() }}
                    <input type="hidden" name="origin" class="origin" />
                    <input type="hidden" name="referrer" class="referrer" />
                    <input type="hidden" name="lead_path" class="lead_path" />

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                            <span class="txt-request">Name*</span>
                            <input type="text" class="form-control field-input" name="name" data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                            <span class="txt-request">Email*</span>
                            <input type="email" class="form-control field-input" name="email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('specialty') ? 'has-error' : '' }} open-form">
                            <span class="txt-request">Occupation*</span>
                            <select class="custom-select field-select" name="specialty" data-parsley-required="true">
                                <option></option>
                                <option value="Magazine">Magazine</option>
                                <option value="Newspaper">Newspaper</option>
                                <option value="Blog">Blog</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }} open-form">
                            <span class="txt-request">Company Name*</span>
                            <input type="text" class="form-control field-input" name="company" data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }} open-form">
                            <span class="txt-request">Country*</span>
                            <select class="custom-select field-select" name="country" data-parsley-required="true">
                                @include('includes.options-country')
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }} open-form">
                            <span class="txt-request">City*</span>
                            <input type="text" class="form-control field-input" name="city" data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }} open-form">
                            <span class="txt-request">Phone</span>
                            <input type="text" class="form-control field-input" name="phone">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('website') ? 'has-error' : '' }} open-form">
                            <span class="txt-request">Website</span>
                            <input type="text" class="form-control field-input" name="website">
                        </div>
                    </div>

                    <div class="col-12">

                        <div class="option_right col-12 open-form">
                            <div class="row">
                                <div class="col-12 nopadding"><input type="checkbox" checked="checked" name="accept_terms" value="yes" id="accept_terms" data-parsley-multiple="accept_terms"><label for="accept_terms" class="label_left"></label><span class="blue">I HAVE READ AND ACCEPT YOUR PRIVACY POLICY*</span></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" onclick="ga('send','event','Press Login','Request Access','PRESSarea-requestacess');" id="request-password-tag" name="btn_request" class="btn-get-price py-2" style="font-size: 11.5px;">REQUEST ACCESS</button>
                    </div>
                </div>

            </form>

            <div class="col-12 my-3">
                <h4 class="mb-2 text-uppercase" style="color: #89bab6;font-size:1.2rem !important;"><b>Sign In</b></h4>
            </div>

            <form method="POST" class="form_press_login form-parsley col-12" action="{{ route('process.press-login') }}" data-validate="parsley">
                <div class="row">
                    <input type="hidden" name="origin" class="origin" />
                    <input type="hidden" name="referrer" class="referrer" />
                    <input type="hidden" name="lead_path" class="lead_path" />
                    {{ csrf_field() }}
                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                            <span class="txt-request">Email*</span>
                            <input type="email" class="form-control field-input" name="email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('password') ? 'has-error' : '' }}">
                            <span class="txt-request">Password*</span>
                            <input type="password" class="form-control field-input" name="password" data-parsley-required="true" data-parsley-trigger="change">
                        </div>
                    </div>
                    <div class="col">
                        <button type="submit" onclick="ga('send','event','Press Login','Request Access','PRESSarea-requestacess');" name="btn_login" class="btn-get-price py-2" style="font-size: 11.5px;">LOGIN</button>
                    </div>
                </div>
            </form>

        </div>

    </div>

    <div class="row">

        <div class="col-12 text-center pt-5 pb-2">
            <h5 class="title_highlight border_b_grey mb-4" style="color: #89bab6;"> PRESS RELEASES </h5>
        </div>

        @foreach($pressreleases as $pressrelease)

        <div class="col-6 col-sm-3 p-0">
            <div class="product_thumb">
                <a href="{{ route('press-release', $pressrelease->slug) }}">
                    <img src="/img/press/press-release/{{ $pressrelease->slug }}.jpg" class="img-fluid">
                </a>
                <p class="press-title_release m-0" style="height:44px;color: #666;">{!! $pressrelease->article_languages[0]->title !!}</p>
                <div class="slideToggle">
                    <a class="btn-get-price m-0" rel="modal:open" href="{{ route('modal-press-release', $pressrelease->slug) }}"><span><b>DOWNLOAD </b> PRESS RELEASE &gt;</span> </a>
                </div>
            </div>
        </div>

        @endforeach

        <div class="clearfix visible-xs visible-sm visible-md visible-lg"></div>

    </div>

    <div class="row">
        <div class="col-sm-6 order-1 order-sm-1">
            <div class="col-12 text-center pt-5 pb-2 nopadding">
                <h5 class="title_highlight border_b_grey mb-4" style="color: #89bab6;"> PRESS KIT </h5>
            </div>
        </div>

        <div class="col-sm-6 order-3 order-sm-2">
            <div class="col-12 text-center pt-5 pb-2 nopadding h-100">
                <h5 class="title_highlight border_b_grey mb-4" style="color: #89bab6;"> CIRCU LIVE </h5>
            </div>
        </div>

        <div class="col-sm-6 order-2 order-sm-3">
            <div class="col-12 text-center pb-2 nopadding">
                <a href="{{ asset('/docs/presskit-circu-magical-furniture.pdf') }}" target="_blank">
                    <img src="/img/press/press-kit-2022.jpg" class="img-responsive">
                </a>
            </div>
        </div>

        <div class="col-sm-6 order-4 order-sm-4">
            <div class="col-12 text-center pb-2 nopadding h-100">
                <img src="/img/press/video-circu-magical-furniture.jpg" class="img-responsive videoplayer h-100" data-video="https://www.youtube.com/embed/-f1XTMOpqVY?autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-12">

            <div class="col-12 text-center pt-5 pb-2">
                <h5 class="title_highlight border_b_grey mb-4" style="color: #89bab6;"> PRESS CLIPPING </h5>
            </div>

            <!-- cards-destop -->
            <div class="col-12 p-0">
              <div class="row grid">
                <div class="grid-sizer col-6 col-md-2 d-none"></div>

                <?php $i = 1 ?>
                @php $count = 0; @endphp
                @foreach($pressclipping as $clipping)
                @php
                $count++;
                @endphp
                @if ($count < 13) 
                <div class="grid-item col-6 col-md-2 {{ $i }} element-item element-item2 card-item">
                    <div class="product_thumb">
                        <a href="{{ route('press-clipping', $clipping->slug) }}">
                            <img src="/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg" border="0" alt="" onmouseover="this.src='/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg'" onmouseout="this.src='/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg'" class="img-responsive">
                            <div class="product-caption">{!! $clipping->article_languages[0]->title !!} </div>
                        </a>
                    </div>
                </div>
                @elseif($count >= 13)
                @if ($count == 13)
                <div id="demo-stock" class="row col-12 m-0 p-0 collapse">
                @endif
                  <div class="grid-item col-6 col-md-2 {{ $i }} element-item card-item">
                      <div class="product_thumb">
                          <a href="{{ route('press-clipping', $clipping->slug) }}">
                              <img src="/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg" border="0" alt="" onmouseover="this.src='/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg'" onmouseout="this.src='/img/press/clipping/covers/{{ $clipping->slug }}_s.jpg'" class="img-responsive">
                              <div class="product-caption">{!! $clipping->article_languages[0]->title !!} </div>
                          </a>
                      </div>
                  </div>
                  @if ($loop->last)
                </div>

                @if($i % 6 == 0)
                <div class="clearfix visible-sm visible-md visible-lg"></div>

                @endif


                <?php $i++ ?>
                @endif
                @endif
                @endforeach

              </div>
                <div class="row mb-3">
                    <div class="col-12 d-flex justify-content-center load-more">
                      <a href="#initial" data-toggle="collapse" data-target="#demo-stock">
                        <span class="btn btn--ebook newButton">SHOW MORE ></span>
                      </a>
                    </div>
                </div>
            </div>
           

        </div><!--  end col-12 -->

    </div> <!-- end row -->

</div><!-- container-->

<!-- <div class="container max-width-site">

        <div class="row"><div class="col-12 text-center mt-5 mb-3">
         <a href="{{ route('catalogue') }}"><img src="/img/download-catalogue-circu-magical-furniture.jpg" class="d-none d-md-block"><img src="/img/download-catalogue-circu-magical-furniture-mobile.jpg" class="d-block d-md-none"></a>
         </div>
        </div>

    </div> -->
<!-- container-->

@endsection
@section('footer-includes')
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" type="text/javascript"></script>

<script type="text/javascript">
  jQuery('.open-form-vt input[name="email"]').on('change', function() {
	    jQuery('.open-form').css('display', 'block');
	    });
  $(window).on("load", function() {
	 var $grid = $('.grid').isotope({
	   itemSelector: '.grid-item',
	   percentPosition: true,
	   masonry: {
	     columnWidth: '.grid-sizer'
	   }
	 });
	
	 $('.filter-trigger').click(function(e) {
	   $('.filters').find('.active-filter').removeClass('active-filter');
	   $(this).addClass("active-filter");
	   e.preventDefault();
	   var category = $(this).data('category');
	   setTimeout(function() {
	     $grid.isotope({
	       filter: '.' + category
	     });
	   }, 200);
	 });
	
	 $('.isotope-reset').click(function() {
	   $grid.isotope({
	     filter: '*'
	   });
	 });
	});
  $(document).on("click", '[data-toggle="collapse"] .newButton', function() {
	    if ($(this).hasClass('clicked')) {
	        $(this).removeClass('clicked');
	        $(this).html('SHOW MORE >');
	    } else {
	        $(this).addClass('clicked');
	        $(this).html('< SHOW LESS ');
	    }
	});

	$(".collapse").on('shown.bs.collapse', function() {
	    var $grid = $('.grid').isotope({
	        itemSelector: '.element-item',
	        percentPosition: true,
	        masonry: {
	            // use element for option
	            columnWidth: '.element-item2'
	        }
	    });
	});
	$(".collapse").on('hidden.bs.collapse', function() {
	    var $grid = $('.grid').isotope({
	        itemSelector: '.element-item',
	        percentPosition: true,
	        masonry: {
	            // use element for option
	            columnWidth: '.element-item2'
	        }
	    });
	});
    $('.owl-main').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: false,
        autoplay: true,
        fluidSpeed: 3000,
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
    $('.owl-novelties').owlCarousel({
        loop: true,
        margin: 10,
        lazyLoad: false,
        dots: false,
        nav: true,
        navText: ["<i class='fas fa-chevron-left arrow-banners'></i>", "<i class='fas fa-chevron-right arrow-banners'></i>"],
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
</script>
@endsection

