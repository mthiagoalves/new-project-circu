@extends('layouts.master')

@section('main-content')

<div class="container max-width-site pt-5">

  <div class="row">

    <div class="col-12 col-md-2 hidden-sm hidden-xs"></div>

    <div class="col-12 col-md-8 my-5">

      <form action="{{ route('process.pricelist') }}" class="form-parsley" method="post">

        <div class="row">

          <h6 class="col-12 mb-5" style="text-align:center;">FILL THE FORM BELOW TO REQUEST OUR PRICELIST</h6>

          @if(Session::has('message'))
          <div class="alert alert-success" role="alert">
            <span onclick="this.parentElement.style.display='none'" class="position-absolute" style="right:10px; cursor:pointer;"> <i class="fas fa-times"></i> </span>
            {{Session::get('message')}}
          </div>
          @endif

          @include('includes.errors')

          <div class="col-sm-6">
            <input type="hidden" name="origin" class="origin" />
            <input type="hidden" name="referrer" class="referrer" />
            <input type="hidden" name="lead_path" class="lead_path" />

            {{ csrf_field() }}


            <div class="input-block {{ $errors->has('first_name') ? 'has-error' : '' }}">
              <span class="txt-request">First Name:*</span>
              <input type="text" name="first_name" class="form-control first_name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('first_name') }}" />
            </div>

            <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
              <span class="txt-request">Email:*</span>
              <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
            </div>

            <div class="input-block" style="float: left;" {{ $errors->has('country') ? 'has-error' : '' }}">
              <span class="txt-request">Country:*</span>
              <select name="country" class="custom-select country country-ebook" data-parsley-required="true" value="{{ old('country') }}">
                @include('includes.options-country')
              </select>
            </div>

            <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
              <span class="txt-request">Occupation:*</span>
              <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                @include('includes.options-occupation')
              </select>
            </div>

          </div>

          <div class="col-sm-6">

            <div class="input-block {{ $errors->has('last_name') ? 'has-error' : '' }}">
              <span class="txt-request">Last Name:*</span>
              <input type="text" name="last_name" class="form-control last_name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('last_name') }}" />
            </div>

            <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
              <span class="txt-request">Phone:</span>
              <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}" />
            </div>

            <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
              <span class="txt-request">City:*</span>
              <input type="text" name="city" class="form-control city" value="{{ old('city') }}" />
            </div>

            <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
              <span class="txt-request">Company:*</span>
              <input type="text" name="company" class="form-control company " data-parsley-required="true" value="{{ old('company') }}" />
            </div>

          </div>

          <div class="col-12">
            <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }} d-none state-ebook">
              <span class="txt-request">State:*</span>
              <select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}">
                @include('includes.options-state')
              </select>
            </div>
          </div>

          <div class="col-12">
            <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
              <span class="txt-request">How did you hear about us?*</span>
              <select name="hear_about" class="custom-select hear_about" data-parsley-required="true" value="{{ old('hear_about') }}">
                @include('includes.options-hear-about')
              </select>
            </div>
          </div>

          <div class="col-12 mb-3"><input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label><span class="blue">BOOK A MEETING WITH OUR MAGICAL TEAM</span></div>

          <div class="col-12">
            <button type="submit" id="request-pricelist-tag" class="btn-request-piece w-50">REQUEST PRICELIST</button>
          </div>

        </div>



    </div>

    </form>

  </div>

  <div class="col-md-2 hidden-sm hidden-xs nopadding"></div>

</div><!-- end row -->



</div><!-- container-->

@endsection

@section('meta')
<title>{{$meta_data->meta_title}}</title>
<meta name="description" content="{{$meta_data->meta_description}}" />
<meta name="keywords" content="{{$meta_data->key_words}}" />
<meta name="author" content="circu">
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$meta_data->meta_title}}" />
<meta property="og:description" content="{{$meta_data->meta_description}}" />
<meta property="og:url" content="http://www.circu.net/request-pricelist" />
<meta property="og:site_name" content="Circu Magical Furniture" />
<meta property="og:price:amount" content="0.0" />
<meta property="og:price:currency" content="USD" />
<meta property="og:availability" content="preorder" />
<meta property="og:image" content="http://www.circu.net/images/logo-circu-magical-furniture.png" />
@endsection