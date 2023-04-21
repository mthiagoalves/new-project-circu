@extends('layouts.master')

@section('main-content')

@include('includes.menu-visual')

<div class="container max-width-site pt-3">

  <div class="row page_contact_form">

    <div class="hidden-xs col-12 col-md-6 owl-main owl-carousel owl-slide owl-theme">
      <div class="item">
        <a href="{{ route('new-products') }}"><img src="/img/slides/contact/novelties-circu-magical-furniture.jpg" class="cd-dot img-fluid"></a>
      </div>
      <div class="item">
        <a href="{{ route('inspirations-catalogue') }}"><img src="/img/slides/contact/inspiration-book-circu-magical-furniture.jpg" class="cd-dot img-fluid"></a>
      </div>
      <!-- <div class="item">
                  <a href="{{ route('catalogue') }}"><img src="/img/slides/contact/free-catalogue-circu-magical-furniture.jpg" class="cd-dot img-fluid"></a>
              </div> -->
    </div>

    <form name="form_page_contact" class="col-12 col-md-6 form_page_contact form-parsley" method="post" action="{{ route('process.contact') }}">

      <div class="row">
        <div class="col-12 mb-3 mt-5">
          <h6 class="my-1"><i><b>Welcome to</b></i></h6>
          <h4 class="mb-2"><b>Circu Magical Furniture</b></h4>
          <p class="my-0">Thank you for your interest! </p>
          <p class="my-0" style="color:#777;">Please complete this form to request the information you need:</p>
        </div>

        @if(Session::has('message'))
        <div class="alert alert-success" role="alert">
          <span onclick="this.parentElement.style.display='none'" class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
          {{Session::get('message')}}
        </div>
        @endif

        @include('includes.errors')

        <div class="col-sm-6">
          <input type="hidden" name="more_info" value="Contact" />
          <input type="hidden" name="origin" class="origin" />
          <input type="hidden" name="referrer" class="referrer" />
          <input type="hidden" name="lead_path" class="lead_path" />
          <input type="text" name="interested" class="interested">
          {{ csrf_field() }}

          <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
            <span class="txt-request">First Name:*</span>
            <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('first_name') }}" />
          </div>

          <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
            <span class="txt-request">Occupation:*</span>
            <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
              @include('includes.options-occupation')
            </select>
          </div>

          <div class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
            <span class="txt-request">Country:*</span>
            <select name="country" class="custom-select country country-ebook" data-parsley-required="true" value="{{ old('country') }}">
              @include('includes.options-country')
            </select>
          </div>

          <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
            <span class="txt-request">Phone:*</span>
            <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}" />
          </div>
        </div>

        <div class="col-sm-6">
          <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
            <span class="txt-request">Last Name:*</span>
            <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-type="name" data-parsley-trigger="change" value="{{ old('last_name') }}" />
          </div>
          <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
            <span class="txt-request">Email:*</span>
            <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
          </div>

          <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
            <span class="txt-request">Company:*</span>
            <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
          </div>

          <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
            <span class="txt-request">City:*</span>
            <input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}" />
          </div>
        </div>

        <div class="col-12">
          <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
            <span class="txt-request">How did you hear about us?*</span>
            <select name="hear_about" class="custom-select hear_about" data-parsley-required="true" value="{{ old('hear_about') }}">
              @include('includes.options-hear-about')
            </select>
          </div>
          <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }} d-none state-ebook">
            <span class="txt-request">State:*</span>
            <select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}">
              @include('includes.options-country')
            </select>
          </div>
        </div>

        <div class="col-sm-12">
          <div class="input-block {{ $errors->has('details') ? 'has-error' : '' }}">
            <span class="txt-request">Message:*</span>
            <textarea name="details" class="form-control details" data-parsley-required="true" value="{{ old('details') }}"></textarea>
          </div>
        </div>

        <div class="clearfix"></div>

        <div class="col-12">
          <div class="option_right col-12">
            <div class="row">
              <div class="col-12 nopadding"><input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label><span class="blue">BOOK A
                  MEETING WITH OUR MAGICAL TEAM</span></div>
              <div class="col-12 nopadding"><input type="checkbox" name="news" value="yes" id="news"><label for="news" class="label_left"></label><span class="blue">JOIN OUR NEWSLETTER</span></div>
            </div>
          </div>
        </div>

        <div class="col-12 my-4 text-center">
          <button type="submit" onclick="ga('send','event','Contact','Submit Request','Contact-requestcontact');" id="contact-us-tag" class="btn-border-green grow">SUBMIT REQUEST </button>
        </div>
      </div>
    </form>

  </div>

  <div class="row">

    <div class="col-12 marg_top_big py-4">

      <div class="col-12 text-center pt-5 pb-2">
        <h5 class="title_highlight border_b_grey py-2 mb-4"> GERAL INFO </h5>
      </div>

      <div class="col-12">
        <div class="row">

          <div class="col-md-4">
            <p>
              <b>PORTUGAL OFFICE</b><br>
              Travessa Marques de Sá, Nº 68 <br>
              4435 - 324 Rio Tinto . Portugal <br>
              <i class="fas fa-envelope"></i> <a href="mailto:info@circu.net"> info@circu.net</a> <br>
              <i class="fas fa-phone"></i> T. +351 911 780 428 <br>
            </p>
          </div>

          <div class="col-md-4">
            <p>
              <b>SALES DIRECTOR</b><br>
              Maria Simão<br>
              <i class="fas fa-envelope"></i> <a href="mailto:msimao@circu.net">msimao@circu.net</a><br>
              <i class="fas fa-phone"></i> T. +351 914 929 073 <br>
            </p>
          </div>

          <div class="col-md-4">
            <p>
              <b>PRESS PR</b><br>
              Andreia Tavares <br>
              <i class="fas fa-envelope"></i> <a href="mailto:press@circu.net">press@circu.net</a><br>
            </p>
          </div>



        </div>
      </div>

    </div><!--  end col -->

  </div> <!-- end row -->

  <!-- <div class="row"><div class="col-12 text-center mt-5 mb-3">
         <a href="{{ route('catalogue') }}"><img src="/img/download-catalogue-circu-magical-furniture.jpg" class="d-none d-md-block"><img src="/img/download-catalogue-circu-magical-furniture-mobile.jpg" class="d-block d-md-none"></a>
         </div>
        </div> -->

</div><!-- container-->

@endsection

@section('meta')
<title>Contact - Circu Magical Furniture</title>
<meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="Contact - Circu Magical Furniture" />
<meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
<meta property="og:url" content="http://www.circu.net/contact" />
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
</style>
@endsection

@section('footer-includes')
<script type="text/javascript">
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
  $('.owl-novelties').owlCarousel({
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
      768: {
        items: 1
      }
    }
  });
</script>
@endsection