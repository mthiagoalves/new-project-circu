@php session_start(); @endphp
<html>
  
<head>
  <script>var tracker=getUrl();</script>
</head>

<body>

<form method="post" class="form-popup form-parsley" action="{{ route('process.downloadHRImages') }}">

  <div class="row">

    <div class="form-popup-header col-12">
        <h1 class="text-uppercase">DOWNLOAD NOW <br> @php echo str_replace("-", " ", $slug); @endphp </h1>
    </div>

    {{ csrf_field() }}
    
    <input type="hidden" name="origin" class="origin"/>
    <input type="hidden" name="referrer" class="referrer"/>
    <input type="hidden" name="lead_path" class="lead_path"/>
    <input type="hidden" name="product_slug" value="{{$slug}}"/>
    <input type="text"  name="interested" class="interested">
    
    <div class="col-sm-12">
      <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
        <span class="txt-request">Name:*</span>
        <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}"/>
      </div>
    </div>
    
    <div class="col-sm-12">
      <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
        <span class="txt-request">Email:*</span>
        <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}"/>
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
    
    <div class="col-sm-6">
      <div class="input-block" {{ $errors->has('country') ? 'has-error' : '' }}">
        <span class="txt-request">Country:*</span>
        <select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
        @include('includes.options-country')
        </select>
      </div>
    </div>
    
    <div class="col-sm-6">
      <div class="input-block" {{ $errors->has('city') ? 'has-error' : '' }}">
        <span class="txt-request">City:*</span>
        <input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}"/>
      </div>
    </div>
    
    <div class="col-12">
        <button type="submit" id="request-price-tag" class="btn-request-piece">DOWNLOAD NOW HIGH RESOLUTION</button>
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
