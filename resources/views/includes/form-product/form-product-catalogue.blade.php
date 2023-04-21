<form method="POST" action="{{ route('process.catalogue') }}" class="form-parsley form--full-grey">

  <div class="row">

    <input type="hidden" name="origin" class="origin"/>
    <input type="hidden" name="referrer" class="referrer"/>
    <input type="hidden" name="lead_path" class="lead_path"/>

    {{ csrf_field() }}

    <div class="col-sm-6 pr-half">

        <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
            <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Name*"/>
        </div>

        <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
            <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*"/>
        </div>

        <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
            <select name="country" class="custom-select country" data-parsley-required="true">
                <option value="Country*">Country*</option>
                @include('includes.options-country')
            </select>
        </div>

        <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
            <input type="text" name="phone" class="form-control phone" value="{{ old('phone') }}" placeholder="Phone"/>
        </div>

    </div>

    <div class="col-sm-6 pl-half">

        <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
            <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                <option value="Occupation*">Occupation*</option>
                @include('includes.options-occupation')
            </select>
        </div>

        <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
            <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" placeholder="Company*"/>
        </div>

        <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
            <input type="text" name="city" class="form-control city" value="{{ old('city') }}" placeholder="City"/>
        </div>

        <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
            <select name="hear_about" class="custom-select hear_about" data-parsley-required="true" value="{{ old('hear_about') }}" placeholder="How did your hear about us?*">
                <option value="How did your hear about us?*">How did your hear about us?*</option>
                @include('includes.options-hear-about')
            </select>
        </div>
        <button type="submit" onclick="ga('send','event','Catalogue','Download Now','Product-downloadarea-catalogue');" class="btn btn--primary-green w-100 mb-1" id="download-catalogue-tag">DOWNLOAD NOW</button>
    </div>

  </div>

</form>

<script type="text/javascript">
    document.getElementById("download-catalogue-tag").onclick = function() 
    {ga('send', 'event', 'Botão', 'Clicar', 'Catalogue')};
</script>