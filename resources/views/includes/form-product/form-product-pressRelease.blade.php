<form method="POST" action="{{ route('process.productPressRelease') }}" class="form-parsley form--full-grey">

  <div class="row">
    
    <input type="hidden" name="product_slug" value="{{ $product->slug }}"/>
    <input type="hidden" name="origin" class="origin"/>
    <input type="hidden" name="referrer" class="referrer"/>
    <input type="hidden" name="lead_path" class="lead_path"/>

        {{ csrf_field() }}
        <div class="col-12 np-lg">

        <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
        <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Name*"/>
        </div>

        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
        <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*"/>
        </div>

        <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
        <select name="country" class="custom-select country" data-parsley-required="true" value="{{ old('country') }}">
            <option value="">Country*</option>
            @include('includes.options-country')
        </select>
        </div>

        <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
        <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
            <option value="">Occupation*</option>
            @include('includes.options-occupation')
        </select>
        </div>
      </div>
        <div class="col-sm-6 offset-sm-6 pl-half">
         <button type="submit" onclick="ga('send','event','Press Release','Download Now','Product-downloadarea-pressrelease');" class="btn btn--primary-green w-100 mb-1">DOWNLOAD NOW </button>
        </div>

  </div>

</form>