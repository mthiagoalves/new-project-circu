<form method="post" class="form-popup form-parsley form-access-vt" action="{{ route('process.our-houses') }}">

    <div class="row m-0 p-0">

        {{ csrf_field() }}

        <input type="hidden" name="more_info" value="Access to VT Our Houses" />
        <input type="hidden" name="origin" class="origin" />
        <input type="hidden" name="referrer" class="referrer" />
        <input type="hidden" name="lead_path" class="lead_path" />

        <div class="col-12 col-md-6 p-0 pb-3 pb-md-0 pr-md-3">
            <div class="input-block m-0 mb-md-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="First Name*" />
            </div>
        </div>
        <div class="col-12 col-md-6 p-0 pb-3 pb-md-0 pl-md-0">
            <div class="input-block m-0 mb-md-3 {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Last Name*" />
            </div>
        </div>

        <div class="col-12 p-0 pb-3 pb-md-0">
            <div class="input-block m-0 mb-md-3 {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" id="emailvt" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*" />
            </div>
        </div>

        <div class="col-12 p-0 formvisible" style="display: none;">
            <div class="col-12 p-0">
                <div class="input-block m-0 mb-md-3 {{ $errors->has('country') ? 'has-error' : '' }}">
                    <select name="country" class="custom-select country country-acess" id="country" data-parsley-required="true" value="{{ old('country') }}">
                        <option value="">SELECT YOUR COUNTRY</option>
                        @include('includes.options-country')
                    </select>
                </div>
            </div>

            <div class="col-12 p-0 d-none state-acess" id="state">
                <div class="input-block m-0 mb-md-3 {{ $errors->has('state') ? 'has-error' : '' }} state-acess">
                    <select name="state" class="custom-select country" data-parsley-required="false" value="{{ old('state') }}">
                        <option value="">SELECT YOUR STATE</option>
                        @include('includes.options-state')
                    </select>
                </div>
            </div>

            <div class="row m-0 p-0">
                <div class="col-12 col-md-6 p-0 pb-3 pb-md-0 pr-md-3">
                    <div class="input-block m-0 mb-md-3 {{ $errors->has('company') ? 'has-error' : '' }}">
                        <input type="text" name="company" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('company') }}" placeholder="Company*" />
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0 pb-3 pb-md-0 pl-md-0">
                    <div class="input-block m-0 mb-md-3 {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <input type="text" name="phone" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('phone') }}" placeholder="Phone*" />
                    </div>
                </div>
            </div>

        </div>


        <div class="col-12 px-0 pt-0 pb-3 check-vt">
            <div class="row m-0 p-0">
                <label class="col-1-mine p-0 input-costum" style="width: 30px !important;">
                    <input type="checkbox" id="masdsle" name="checkMeeting" value="Book a Free Video Consultation">
                    <span class="checkmark"></span>
                </label>
                <div class="col-11 p-0 text-left">
                    <label for="msdale">BOOK A FREE VIDEO CONSULTATION WITH AN EXPERT</label>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-7 p-0 pr-md-3 div-form-privacu-policy">
            <div class="col-12 p-0">
                <p class="text-uppercase">By clicking request, you confirm that you have<br class="d-none d-md-block"> read and accepted our <a href="https://circu.net/privacy-policy" target="_blank" style="color:#9bbfbd;font-weight:bold;">Privacy Policy</a></p>
            </div>
        </div>

        <div class="col-12 col-md-5 text-right p-0 pb-3 pb-md-0 pl-md-3">
            <button type="submit" id="request-price-tag" class="btn-request-access">REQUEST</button>
        </div>

    </div>

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="/js/parsley.min.js"></script>
<script type="text/javascript">
    $(".origin").val(tracker.url_origin);
    $(".referrer").val(tracker.referrer);
    $(".lead_path").val(tracker.flow);

    $(".form-parsley").on('submit', function(e) {

        var form = $(this);

        form.parsley().validate();

        if (!form.parsley().isValid()) {
            e.preventDefault();
        } else {
            $('.btn-prevent-multiple').attr('disabled', 'true');
            $('.spinner-visible').show();
        }

    });
</script>
<script type="text/javascript">
    $(".country-acess").change(function() {
        var selected_option = $(this).val();
        console.log(selected_option);
        if (selected_option === 'United States') {
            $('.state-acess').removeClass('d-none').children().attr('data-parsley-required', 'true');
        }
        if (selected_option != 'United States') {
            $('.state-acess').addClass('d-none').children().attr('data-parsley-required', 'false');
        }
    });
</script>