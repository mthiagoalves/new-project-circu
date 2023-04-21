@extends('layouts.master-no-footer')

@section('main-content')
{{-- @if($ebook->slug != 'new-products-2022')
<div class="container-fluid p-0">
    <div class="col-12 p-0">
      <a href="https://www.circu.net/ebook/new-products-2022">
        <img src="/img/slides/main/new-products-2022.gif" alt="New Products 2022 - Circu Magical Furniture" class="img-fluid d-none d-md-block">
        <img src="/img/slides/main/new-products-2022-mobile.gif" alt="New Products 2022 - Circu Magical Furniture" class="img-fluid d-block d-md-none">
      </a>
    </div>
</div>
@endif --}}
<div class="container-fluid my-3">

  <div class="row">
    <div class="col-12 col-xl-10 offset-xl-1">
      <div class="row">
        <div class="col-12 col-lg-6 product-slide text-center">
          @if($ebook->slug == 'catalogue-circu-magical-furniture')
          <img src="/img/landing/download-catalogue/catalogue-circu-magical-furniture.jpg" class="img-fluid">
          @elseif($ebook->issue_code == '')
          <img src="/img/landing/download-catalogue/{{$ebook->slug}}.jpg" class="img-fluid">
          @else
          <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:750px;" src="//e.issuu.com/embed.html?d={{$ebook->issue_code}}&doAutoflipPages=true&hideIssuuLogo=true&u=trend.book"></iframe>
          @endif
        </div><!-- issuu code -->

        <div class="col-12 col-lg-6 product-details mt-3">

          <div class="row">

            <div class="col-12">

              <div class="product-details__intro clearfix col mb-3 mt-5 p-0">
                <div class="float-left">
                  <h1 class="product-details__name" style="text-align: initial;">{{ $ebook->article_languages[0]->title }}</h1>
                </div>

              </div><!-- product-details__intro -->

              <div class="product-details__description mb-3">
                <div class="col col-xl-10 text-justify p-0">
                  @if($ebook->slug == 'inside-every-child-dream-bedroom')
                  <p>Get inspired by the first series of our magical kid's bedrooms and playgrounds ideas. For boys, girls, or gender-neutral, in this ebook, you will find the most functional and incredible designs, where every detail is customizable and dreams come true!</p>
                  @elseif($ebook->slug == 'the-ultimate-lighting-collection')
                  <p>From chandeliers to floor lamps and from mid-century style to modern classic, we present to you The Ultimate Lighting Collection. Check out the best sellers selection to enlighten your spaces!<br><br>Download this ebook and discover more!</p>
                  @elseif($ebook->slug == 'textile-fabrics-key-trends-2024')
                  <p>A new welcoming into the wonders of textile world, a different supplement with a new perspective of trend forecast for you to create the most amazing projects. Give your work the gleam it deserves for the season of 2022/2024.</p>
                  @elseif($ebook->slug == 'multimillion-dollar-homes')
                  <p>The world is continuously looking for new and improved sources of inspiration. Luxury Houses talented team created this inspirational ebook composed of a series of houses entirely furnished and decorated with a huge collection of furniture, lighting and accessories, in partnership with some of the world’s top designers. Their creative minds developed beautiful and unique projects in a wide range of styles, that we are happy to share with you on the next pages. While some houses are more conceptual, others are focused on functionality and offer solutions for every family member’s modern way of living. In the end, there is a house for everyone.<br><br>Download this ebook and discover more!</p>
                  @elseif($ebook->article_languages[0]->description != '')
                  <p>{!!$ebook->article_languages[0]->description!!}</p>
                  @else
                  <p>CIRCU was built under a dream! The dream is to allow children to live their own fantasies and adventures in a magical world of their own.</p>
                  @endif
                </div>
              </div><!-- product-details__description -->
              <form method="post" class="col-xl-10  p-0 form-popup form-parsley" action="{{ route('process.downloadEbook') }}">

                <div class="row">

                  {{ csrf_field() }}

                  <input type="hidden" name="origin" class="origin" />
                  <input type="hidden" name="referrer" class="referrer" />
                  <input type="hidden" name="lead_path" class="lead_path" />
                  <input type="hidden" class="product_slug" name="product_slug" value="{{$ebook->slug}}" />
                  <input type="hidden" name="product_type" value="{{$ebook->key_words}}" />
                  <input type="hidden" name="product_name" value="{{$ebook->article_languages[0]->title}}" />
                  <input type="text" name="interested" class="interested">

                  <div class="col-sm-6">
                    <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                      <span class="txt-request">Name:*</span>
                      <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                      <span class="txt-request">Last Name:*</span>
                      <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                      <span class="txt-request">Email:*</span>
                      <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                      <span class="txt-request">Occupation:*</span>
                      <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                        @include('includes.options-occupation')
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                      <span class="txt-request">Company:*</span>
                      <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div style="margin: 0px 0px 12px !important;" class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
                      <span class="txt-request">Country:*</span>
                      <select name="country" class="custom-select country country-ebook" data-parsley-required="true" value="{{ old('country') }}">
                        @include('includes.options-country')
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div style="margin: 0px 0px 12px !important;" class="input-block" {{ $errors->has('city') ? 'has-error' : '' }}">
                      <span class="txt-request">City:*</span>
                      <input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}" />
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div style="margin: 0px 0px 12px !important;" class="input-block {{ $errors->has('email') ? 'has-error' : '' }} d-none state-ebook">
                      <span class="txt-request">State:*</span>
                      <select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}">
                        @include('includes.options-state')
                      </select>
                    </div>
                  </div>



                  <div class="col-12 mb-3"><input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label><span class="blue">BOOK A MEETING WITH OUR MAGICAL TEAM</span></div>



                  <div class="col-12">
                    <button type="submit" id="request-price-tag" class="btn-request-piece" style="color: #FFFFFF;font-size: 0.75rem;letter-spacing: 0.1rem;font-weight: bold;border: 1px solid transparent;padding: .375rem 1.75rem;">DOWNLOAD NOW <i class="fas fa-caret-right"></i></button>
                  </div>

                </div>

              </form>
              <!-- <div class="product-details__actions mb-3 print-d-none">

                <div class="block">
                  <a rel="modal:open" class="btn btn--primary-green w-50 mb-1" href="{{route('modal-ebook', ['ebook' => $ebook->slug] )}}"><span>DOWNLOAD NOW <i class="fas fa-caret-right"></i></span></a>
                </div>

              </div> -->
              <!-- product-details__actions -->

            </div>

          </div>

        </div><!-- product-details -->
      </div>
    </div>

  </div>

</div>


@endsection



@section('head-includes')
<style>
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
    font-family: 'RalewayMedium', sans-serif;
    font-size: 12px;
    letter-spacing: 1px;
    padding: 0.5rem;
    color: #666666 !important;
    font-weight: normal;
  }

  .product--title .name {
    font-weight: bold;
    text-transform: uppercase;
    display: block;
  }

  .product--title .sub_category {
    text-transform: lowercase;
    display: block;
  }

  h2.category_name_title,
  .category_name_title {
    font-family: 'RalewayMedium', sans-serif;
    text-transform: uppercase;
    font-size: 1.1rem;
    letter-spacing: 2px;
    padding: 0.5rem 2rem;
    color: #666666 !important;
    font-weight: normal;
    cursor: pointer;
  }

  h2.category_name_title span {
    padding: 0 15px;
  }

  .hotspot {
    position: absolute;
    display: block;
    z-index: 0;
  }

  .hotspot--title {
    position: absolute;
    margin: 0;
    background-color: #FFFFFF;
    padding: 14px;
    width: 20em;
    max-width: 50vw;
    z-index: 1;
    opacity: 0;
    display: none;
    padding-right: 10px;
    color: #413e3e;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    transition: all cubic-bezier(.8, 0, .2, 1) .4s;
  }

  .close-hotspot {
    right: 0.4rem;
    top: 0.3rem;
    text-align: right;
    font-size: 1.1rem;
    position: absolute;
    cursor: pointer;
  }

  .hotspot-img {
    max-height: 180px;
    width: auto;
  }

  .hotspot-name {
    text-align: center;
    color: #7d7d7d;
    text-transform: uppercase;
    font-size: 0.8rem;
    letter-spacing: 1px;
  }

  a .hotspot-description {
    font-size: 0.6rem;
    line-height: 15px;
    color: #7d7d7d;
    text-transform: capitalize;
  }

  .hotspot-get-price {
    background-color: #94b7b3;
    color: #FFFFFF;
    padding: 4px 20px;
    margin: 5px 0px;
    display: inline-block;
  }

  .hotspot--title__right .hotspot--cta {
    float: right;
  }

  .hotspot--title__left .hotspot--cta {
    float: left;
  }

  .hotspot--cta {
    position: relative;
    float: right;
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    z-index: 9;
    background: transparent;
    border: 1px solid #fff;
    cursor: pointer;
    transition: all cubic-bezier(.8, 0, .2, 1) .4s;
  }

  .hotspot--cta::after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #fff;
    z-index: 2;
    transition: opacity .6s;
    animation: pulse 1.5s cubic-bezier(.8, 0, .2, 1) 0s infinite;
  }

  .hotspot:hover .hotspot--cta {
    transform: scale(.6);
  }

  /*.hotspot:hover .hotspot--cta:after {
      opacity: 0;
    }*/
  /*.hotspot--cta:hover + .hotspot--title{
      opacity: 1;
    }*/
  .lg-hotspot--selected {
    z-index: 999;
  }

  .lg-hotspot--selected .hotspot--title {
    opacity: 1;
    display: inline-block;
  }

  @keyframes pulse {
    0% {
      transform: scale(0.4);
    }

    33% {
      transform: scale(1);
    }

    66% {
      transform: scale(0.4);
    }

    100% {
      transform: scale(0.4);
    }
  }

  /*** ***/
  .hotspot--cloud-6-drawers {
    top: 5%;
    left: 9%;
  }

  .hotspot--cloud-6-drawers .hotspot--title {
    top: 18%;
    left: 105%;
  }

  .hotspot--cloud-bed {
    top: 21%;
    right: 59%;
  }

  .hotspot--cloud-bed .hotspot--title {
    top: 0%;
    right: 105%;
  }

  .hotspot--cloud-3-drawers {
    top: 26%;
    left: 73%;
  }

  .hotspot--cloud-3-drawers .hotspot--title {
    top: 9%;
    right: 105%;
  }

  /*** ***/
  .hotspot--kings-and-queens {
    top: 18%;
    right: 40%;
  }

  .hotspot--kings-and-queens .hotspot--title {
    top: 0%;
    left: 105%;
  }

  /*** ***/
  .hotspot--fantasy-air-balloon {
    top: 20%;
    right: 37%;
  }

  .hotspot--fantasy-air-balloon .hotspot--title {
    top: 0%;
    right: 105%;
  }

  .hotspot--little-cloud-nightstand {
    bottom: 24%;
    right: 28%;
  }

  .hotspot--little-cloud-nightstand .hotspot--title {
    top: 0%;
    right: 0%;
  }

  /*** ***/

  .hotspot--cloud-shelf-big {
    top: 4%;
    right: 33%;
  }

  .hotspot--cloud-shelf-big .hotspot--title {
    top: 0%;
    left: 105%;
  }

  .hotspot--letter-a {
    top: 33%;
    left: 20%;
  }

  .hotspot--letter-a .hotspot--title {
    top: -142%;
    left: 118%;
  }

  .hotspot---swing {
    bottom: 16%;
    right: 24%;
  }

  .hotspot--booboo-swing .hotspot--title {
    bottom: 0%;
    right: 105%;
  }


  @media screen and (max-width: 640px) {
    .hotspot--title {
      line-height: 40px;
      font-size: 10px;
    }

    .hotspot--cta {
      width: 40px;
      height: 40px;
    }
  }

  @media screen and (max-width: 420px) {
    .hotspot--title {
      line-height: 30px;
      font-size: 9px;
    }

    .hotspot--cta {
      width: 30px;
      height: 30px;
    }
  }

  @media screen and (max-width: 320px) {
    .hotspot--title {
      display: none;
    }

    .hotspot--cta {
      width: 20px;
      height: 20px;
    }

    .hotspot--cta::after {
      width: 5px;
      height: 5px;
    }
  }
</style>
@endsection

@section('meta')
<title>Ebook Circu Magical Furniture</title>
<meta name="description" content="Ebook Circu Magical Furniture" />
<meta name="keywords" content="Ebook Circu Magical Furniture" />
<meta name="author" content="circu">
<meta property="og:type" content="product" />
<meta property="og:title" content="Ebook Circu Magical Furniture" />
<meta property="og:description" content="Ebook Circu Magical Furniture" />
<meta property="og:url" content="" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="" />
@endsection