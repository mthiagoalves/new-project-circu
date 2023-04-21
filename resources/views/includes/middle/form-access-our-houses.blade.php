<form method="POST" action="{{ route('process.our-houses') }}" id="form-acess-rooms" class="col-12 form-parsley form-ebook-interior-designers-middle-banner">

    <div class="row">

        <input type="hidden" name="origin" class="origin" />
        <input type="hidden" name="referrer" class="referrer" />
        <input type="hidden" name="lead_path" class="lead_path" />
        <input type="hidden" name="more_info" value="" />
        <input type="text" name="interested" class="interested">

        {{ csrf_field() }}
        <div class="col-12 px-1 pb-2 title-form-acess">
            <h1>BOOK YOUR VIRTUAL TOUR NOW</h1>
        </div>

        <div class="col-12 col-md-6 px-1">
            <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="First Name*" />
            </div>
        </div>
        <div class="col-12 col-md-6 px-1">
            <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Last Name*" />
            </div>
        </div>
        <div class="col-12 px-1">
            <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*" />
            </div>
        </div>
        <div class="col-12 col-md-6 px-1">
            <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                <select name="country" class="custom-select country country-ebook" data-parsley-required="true" value="{{ old('country') }}" placeholder="Country*">
                    @include('includes.options-country')
                </select>
            </div>
        </div>
        <div class="col-12 col-md-6 px-1">
            <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="city" class="form-control city" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('city') }}" placeholder="City*" />
            </div>
        </div>
        <div class="col-12 px-1">
            <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }} d-none state-ebook">
                <select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}" placeholder="State*">
                    @include('includes.options-state')
                </select>
            </div>
        </div>

        <div class="col-12 px-1">
            <div class="col-12 col-md-5 p-0 div-button-submit" style="right: 0;">
                <div class="input-block">
                    <a rel="modal:open" id="form-ourhouses" class="btn btn--primary-green w-100 mb-1" href="{{ route('modal-our-houses') }}"><span class="btn-form-acess">GET ACESS NOW <i class="fas fa-caret-right"></i></span></a>
                    <!-- <button type="submit" onclick="ga('send','event','Banner','Download Now','Allproducts-newcatalogue');" class="btn btn--primary-green w-100 mb-1" id="download-catalogue-tag">GET ACESS NOW <i class="fas fa-caret-right"></i></button> -->
                </div>
            </div>
        </div>


    </div>

</form>

<script type="text/javascript">
    // document.getElementById("download-catalogue-tag").onclick = function() {
    //     ga('send', 'event', 'Botão', 'Clicar', 'Catalogue')
    // };
</script>