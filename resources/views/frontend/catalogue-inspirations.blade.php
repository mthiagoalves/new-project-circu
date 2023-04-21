@extends('layouts.master')

@section('main-content')

  <div class="container max-width-site pt-5">

    <div class="row product">

      <div class="col-12">

        <h1 class="product_title">DOWNLOAD OUR INSPIRATIONS BOOK</h2>

        <div class="col-12 product_description">
          <p>Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies and magical world.</p>
          <p>Circu aims to be is the pinnacle of fun, freedom and life, introducing a new entire world and a new entire state of mind to the world. Circu is much more than a Furniture Brand. Its mission is to team up with parents and help them to really appreciate their inner child and their child’s visions and perspectives.</p>
          <p>Fill the form below to download your free catalogue.</p>

          <div class="col-12 nopadding">
                <div class="addthis_sharing_toolbox"></div>
          </div>
        </div>

        <div class="col-12 col-sm-8 offset-sm-2">

          @include('includes.errors')

          @if (session('message'))
                <div class="alert alert-success">
                  <span onclick="this.parentElement.style.display='none'"
                    class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
                  {{ session('message') }}
                </div>
          @endif

          <form method="POST" action="{{ route('process.catalogue-inspirations') }}" class="form-parsley">

            <div class="row">

              <input type="hidden" name="origin" class="origin"/>
              <input type="hidden" name="referrer" class="referrer"/>
              <input type="hidden" name="lead_path" class="lead_path"/>

              {{ csrf_field() }}

              <div class="col-sm-6">

                <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                <span class="txt-request">Name:*</span>
                <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}"/>
                </div>

                <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                <span class="txt-request">Email:*</span>
                <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}"/>
                </div>

                <div class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
                <span class="txt-request">Country:*</span>
                <select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
                @include('includes.options-country')
                </select>
                </div>

                <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                <span class="txt-request">Phone:*</span>
                <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}"/>
                </div>

              </div>

              <div class="col-sm-6">

                <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                <span class="txt-request">Occupation:*</span>
                <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                @include('includes.options-occupation')
                </select>
                </div>

                <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                <span class="txt-request">Company:*</span>
                <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}"/>
                </div>

                <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
                <span class="txt-request">City:*</span>
                <input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}"/>
                </div>

                <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
                <span class="txt-request">How did you hear about us?*</span>
                <select name="hear_about" class="custom-select hear_about" data-parsley-required="true" value="{{ old('hear_about') }}">
                @include('includes.options-hear-about')
                </select>
                </div>

              </div>

              <div class="col-12">
                    <button type="submit" id="download-inspirations-book-tag">DOWNLOAD NOW</button>
              </div>

            </div>

          </form>


        </div>

      </div><!-- end col-6 -->

      <div class="col-12">
          <div data-configid="23765176/57457031" style="width:100%; height:600px; margin:40px 0px 25px;" class="issuuembed"></div>
          <script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
      </div>

    </div><!-- end row -->

  </div><!-- container-->

@endsection

@section('meta')
  <title>Circu Magical Furniture</title>
  <meta name="description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta name="keywords" content="magical furniture, kids bedroom ideas, kids decor ideas, children decor ideas" />
  <meta name="author" content="circu">
  <meta property="og:type" content="website" />
  <meta property="og:title" content="About - Circu Magical Furniture" />
  <meta property="og:description" content="Circu was built under a dream! The dream is to allow children to dream their own dreams and to really give them space to be and live their fantasies" />
  <meta property="og:url" content="http://www.circu.net/about"/>
  <meta property="og:site_name" content="Circu Magical Furniture" />
  <meta property="og:price:amount" content="0.0" />
  <meta property="og:price:currency" content="USD" />
  <meta property="og:availability" content="preorder" />
  <meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection

@section('footer-includes')
      <script type="text/javascript">
      document.getElementById("download-inspirations-book-tag").onclick = function()
      {ga('send', 'event', 'Botão', 'Clicar', 'Inspirations Book')};
      </script>
@endsection
