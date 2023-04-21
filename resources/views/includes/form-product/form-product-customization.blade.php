<form action="{{ route('process.productCustomization') }}" method="POST" class="row form--full-grey form-parsley">

    <input type="hidden" name="origin" class="origin"/>
    <input type="hidden" name="referrer" class="referrer"/>
    <input type="hidden" name="lead_path" class="lead_path"/>

    {{ csrf_field() }}

  <div class="col-sm-6 pr-half-2">
    <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
      <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Name*"/>
    </div>
    <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
        <select name="country" class="custom-select country" data-parsley-required="true">
            <option value="">Country*</option>
            @include('includes.options-country')
        </select>
    </div>
    <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
        <select name="occupation" class="custom-select occupation" data-parsley-required="true">
            <option value="">Occupation*</option>
            @include('includes.options-occupation')
        </select>
    </div>
    <div class="input-block {{ $errors->has('project') ? 'has-error' : '' }}">
        <select name="project" class="custom-select project" data-parsley-required="true">
            <option value="">Project</option>
            <option value="Hospitality">Hospitality</option>
            <option value="Residential">Residential</option>
        </select>
    </div>
  </div>
  <div class="col-sm-6 pl-half-2">
    <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
        <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*"/>
    </div>
    <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
        <input type="text" name="phone" class="form-control phone" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('phone') }}" placeholder="Phone"/>
    </div>
    <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
        <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" placeholder="Company*"/>
    </div>
    <div class="input-block {{ $errors->has('customization') ? 'has-error' : '' }}">
        <select name="customization" class="custom-select customization" data-parsley-required="true" value="{{ old('customization') }}">
            <option value="">Customization*</option>
            <option value="Different Color">Different Color</option>
            <option value="Different Materials">Different Materials</option>
            <option value="Different Dimensions">Different Dimensions</option>
        </select>
    </div>
    
  </div>
    <div class="col-12">
    <div class="input-block">
    <textarea name="project_info" id="" cols="30" rows="4" style="margin:0">Tell us more about the project and your customization needs ..</textarea>
    </div>
    </div>

    <div class="col-sm-6 offset-sm-6 pl-half-2">
    <button type="submit" onclick="ga('send','event','Product Info','Submit Request','Product-talkwithus');" class="btn btn--primary-green w-100 mb-1 float-right">SUBMIT YOUR REQUEST &nbsp;</button>
    </div>
</form>
