@php session_start(); @endphp
<html>
  
<head>
  <script>var tracker=getUrl();</script>
</head>

<body>

<form method="post" class="form-popup form-parsley" action="{{ route('process.campaign', ['name' => $product->slug] ) }}">

  <div class="row">

    <div class="form-popup-header col-12">
        <h1>REQUEST PRICE</h1> 
        <h3>{{ $product->name }}</h3>
    </div>

    {{ csrf_field() }}
    
    <input type="hidden" name="product_name" value="{{ $product->slug }}"/>
    <input type="hidden" name="origin" class="origin"/>
    <input type="hidden" name="referrer" class="referrer"/>
    <input type="hidden" name="lead_path" class="lead_path"/>
    <input type="text" name="interested" class="interested">
    
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
    
    <div class="col-sm-12">
      <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
        <span class="txt-request">Phone:*</span>
        <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}"/>
      </div>
    </div>
    
    <div class="col-sm-6">
      <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
        <span class="txt-request">Occupation:*</span>
        <select name="occupation" class="custom-select occupation" value="{{ old('occupation') }}">
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
      <div class="input-block" {{ $errors->has('website') ? 'has-error' : '' }}">
        <span class="txt-request">Website:*</span>
        <input type="text" name="website" class="form-control city" value="{{ old('website') }}"/>
      </div>
    </div>
    
    <div class="col-12">
        <button type="submit" id="request-price-tag" class="btn-request-piece">REQUEST PRICE</button>
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
