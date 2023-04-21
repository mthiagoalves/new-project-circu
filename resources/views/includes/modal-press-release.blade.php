@php session_start(); @endphp
<html>
  
<head>
  <script>var tracker=getUrl();</script>
</head>

<body>

<form method="post" class="form-popup form-parsley" action="{{ route('process.download-press-release') }}">
  
  <div class="row">

    <div class="form-popup-header col-12">
        <h1>PRESS CONTENT</h1> 
    </div>

    @if(Session::has('message'))
      <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
      </div>
    @endif

    @include('includes.errors')

    <div class="col-sm-6">
        <input type="hidden" name="origin" class="origin"/>
        <input type="hidden" name="referrer" class="referrer"/>
        <input type="hidden" name="lead_path" class="lead_path"/>
        <input type="hidden" name="fair_name" value="{{ $pressrelease->slug }}"/>

        
        {{ csrf_field() }}

        <div class="input-block {{ $errors->has('first_name') ? 'has-error' : '' }}">
          <span class="txt-request">First Name:*</span>
          <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('first_name') }}"/>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-block {{ $errors->has('last_name') ? 'has-error' : '' }}">
          <span class="txt-request">Last Name:*</span>
          <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('last_name') }}"/>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
          <span class="txt-request">Email:*</span>
          <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}"/>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
          <span class="txt-request">Phone:</span>
          <input type="text" name="phone" class="form-control phone" data-parsley-required="false" value="{{ old('phone') }}"/>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
          <span class="txt-request">Occupation:*</span>
          <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
          @include('includes.options-occupation')
          </select>
        </div>
    </div>
    <div class="col-sm-6">
       <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
          <span class="txt-request">Company:*</span>
          <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}"/>
        </div>
    </div>                 
    <div class="col-sm-12">
      <div class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
        <span class="txt-request">Country:*</span>
        <select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
        @include('includes.options-country')
        </select>
      </div>
    </div>
    <div class="col-sm-12">
        <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
          <span class="txt-request">How did you hear about us?*</span>
          <select name="hear_about" class="custom-select hear_about" data-parsley-required="true" value="{{ old('hear_about') }}">
          @include('includes.options-hear-about')
          </select>
        </div>
    </div>

    <div class="col-12">
      <button type="submit" id="request-pricelist-tag" class="btn-request-piece">DOWNLOAD</button>
    </div>
                    

  </div>

</form>

<script type="text/javascript">
  $(".origin").val(tracker.url_origin);
  $(".referrer").val(tracker.referrer);
  $(".lead_path").val(tracker.flow);

  $(".form-parsley").on('submit', function(e){
      
      var form = $(this);

      form.parsley().validate();

      if (!form.parsley().isValid()){
          e.preventDefault();
      } 

  });
</script>

</body>
</html>
