<form method="POST" action="{{ route('process.ebookroomsnew') }}" class="col-12 form-parsley form-catalogue-middle-banner">

    <div class="row">

        <input type="hidden" name="origin" class="origin" />
        <input type="hidden" name="referrer" class="referrer" />
        <input type="hidden" name="lead_path" class="lead_path" />
        <input type="text" name="interested" class="interested" />
        <input type="hidden" name="product_slug" value="magical-kids-bedrooms-playground-ideas" />
        <input type="hidden" name="product_name" value="Magical Kids Bedrooms and Playground Ideas" />

        {{ csrf_field() }}

        <h3 class="col-12 text-center mt-2 mt-lg-0 p-0" style="color:#FFFFFF;">MAGICAL KIDS BEDROOMS</h3>
        <h5 class="col-12 text-center mt-2 mt-lg-0 p-0" style="color:#FFFFFF;">AND PLAYGROUND IDEAS</h5>
        <div class="col-sm-6 px-1">

            <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Name*" />
            </div>

            <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*" />
            </div>

            <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
                <select name="country" class="custom-select country country-ebook" data-parsley-required="true">
                    @include('includes.options-country')
                </select>
            </div>
            <div class="input-block d-none {{ $errors->has('state') ? 'has-error' : '' }} state-ebook">
                <select name="state" class="custom-select state" data-parsley-required="true">
                    @include('includes.options-state')
                </select>
            </div>

        </div>

        <div class="col-sm-6 px-1">

            <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                    <option value="">Occupation*</option>
                    @include('includes.options-occupation')
                </select>
            </div>

            <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" placeholder="Company*" />
            </div>

            <div class="input-block">
                <button type="submit" onclick="ga('send','event','Banner','Download Now','Allproducts-newcatalogue');" class="btn btn--primary-green w-100 mb-1" id="download-catalogue-tag">DOWNLOAD NOW <i class="fas fa-caret-right"></i></button>
            </div>

        </div>

    </div>

</form>

<script type="text/javascript">
    document.getElementById("download-catalogue-tag").onclick = function() {
        ga('send', 'event', 'Botão', 'Clicar', 'Catalogue')
    };
</script>