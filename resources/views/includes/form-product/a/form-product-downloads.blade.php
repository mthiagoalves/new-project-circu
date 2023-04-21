<form method="POST" action="{{ route('process.product-downloads') }}" class="row form-parsley form--full-grey">

    <input type="hidden" name="product_name" value="{{ $product->slug }}"/>
    <input type="hidden" name="origin" class="origin"/>
    <input type="hidden" name="referrer" class="referrer"/>
    <input type="hidden" name="lead_path" class="lead_path"/>

    {{ csrf_field() }}

    <div class="col-12 px-0">
      <p>SELECT YOUR INFO</p>
    </div>
    <div class="col-12 col-lg-5 px-2">
      <div class="row">
        <div class="col-6 my-1 px-1">
          <div class="square">
            <input type="checkbox" id="checkbox_1" name="download_options[]" value="product sheet"/>
            <label for="checkbox_1"></label>
            <span>PRODUCT SHEET</span>
          </div>
        </div>
        <div class="col-6 my-1 px-1">
          <div class="square">
            <input type="checkbox" id="checkbox_2" name="download_options[]" value="pricelist"/>
            <label for="checkbox_2"></label>
            <span>PRICELIST</span>
          </div>
        </div>
        <div class="col-6 my-1 px-1">
          <div class="square">
            <input type="checkbox" id="checkbox_3" name="download_options[]" value="3d model"/>
            <label for="checkbox_3"></label>
            <span>3D MODEL</span>
          </div>
        </div>
        <div class="col-6 my-1 px-1">
          <div class="square">
            <input type="checkbox" id="checkbox_4" name="download_options[]" value="press release"/>
            <label for="checkbox_4"></label>
            <span>PRESS RELEASE</span>
          </div>
        </div>
        <div class="col-6 my-1 px-1">
          <div class="square">
            <input type="checkbox" id="checkbox_5" name="download_options[]" value="catalogue"/>
            <label for="checkbox_5"></label>
            <span>CATALOGUE</span>
          </div>
        </div>
        <div class="col-6 my-1 px-1">
          <div class="square">
            <input type="checkbox" id="checkbox_6" name="download_options[]" value="hr images"/>
            <label for="checkbox_6"></label>
            <span>HR IMAGES</span>
          </div>
        </div>
      </div>

    </div>

    <div class="col-12 col-lg-7 px-2">

      <div class="row">

        <div class="col-12 col-sm-6 my-1 px-1 {{ $errors->has('first_name') ? 'has-error' : '' }}">
          <input type="text" name="first_name" class="form-control first_name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('first_name') }}" placeholder="First Name*"/>
        </div>

        <div class="col-12 col-sm-6 my-1 px-1 {{ $errors->has('last_name') ? 'has-error' : '' }}">
          <input type="text" name="last_name" class="form-control last_name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('last_name') }}" placeholder="Last Name*"/>
        </div>

        <div class="col-12 col-sm-6 my-1 px-1 {{ $errors->has('email') ? 'has-error' : '' }}">
          <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*"/>
        </div>

        <div class="col-12 col-sm-6 my-1 px-1 {{ $errors->has('country') ? 'has-error' : '' }}">
        <select name="country" class="custom-select country" data-parsley-required="true">
            <option value="">Country*</option>
            @include('includes.options-country')
        </select>
        </div>

        <div class="col-12 col-sm-6 my-1 px-1 {{ $errors->has('occupation') ? 'has-error' : '' }}">
          <select name="occupation" class="custom-select occupation" data-parsley-required="true">
            <option value="">Occupation*</option>
            @include('includes.options-occupation')
          </select>
        </div>

        <div class="col-12 col-sm-6 my-1 px-1 {{ $errors->has('company') ? 'has-error' : '' }}">
          <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" placeholder="Company*"/>
        </div>

        <div class="col-12 col-sm-6 my-1 px-1 float-right ml-auto">
          <button type="submit" class="btn btn--primary-green w-100 mb-1" id="download-catalogue-tag">DOWNLOAD NOW <i class="fas fa-caret-right"></i></button>
        </div>

      </div>

      

    </div>

</form>