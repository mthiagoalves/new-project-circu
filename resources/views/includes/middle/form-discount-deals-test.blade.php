@php session_start(); @endphp
<html>

<head>
    <script>
        var tracker = getUrl();
    </script>
</head>

<style>
    @media(max-width: 540px){

    .formvisibleMobile{
        display: none;
    }   
    }
</style>

<body>

<form method="POST" action="{{ route('process.request-cuppon') }}" class="col-12 form-parsley form-catalogue-middle-banner form-d-block-mobile">

    <div class="row">
        <input type="hidden" name="more_info" value="DEALS - Extra 15% Discount for New Clients" />
        <input type="hidden" name="origin" class="origin" />
        <input type="hidden" name="referrer" class="referrer" />
        <input type="hidden" name="lead_path" class="lead_path" />
        <input type="text" name="interested" class="interested" /> {{ csrf_field() }}

        <p class="col-12 text-center mt-2 mt-lg-0 mb-lg-3 mb-0 p-0 title-banner-deals-form pb-3" style="color: #715e7c;"><b>SPECIAL VOUCHERS</b></p>
        <!-- <p class="col-12 text-center mt-2 mt-lg-0 p-0 subtitle-banner-deals-form pb-3"><b>*ONLY FOR NEW CLIENTS</b></p> -->
        <div class="col-sm-6 px-1">

            <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Name*" />
            </div>

            <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" placeholder="Email*" />
            </div>

            <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }} formvisibleMobile">
                <select name="country" class="custom-select country" data-parsley-required="true">
                    <option value="">Country*</option>
                    @include('includes.options-country')
                </select>
            </div>

        </div>

        <div class="col-sm-6 px-1">

            <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }} formvisibleMobile">
                <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                    <option value="">Occupation*</option>
                    @include('includes.options-occupation')
                </select>
            </div>

            <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }} formvisibleMobile">
                <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" placeholder="Company*" />
            </div>

            <div class="input-block">
                <button type="submit" onclick="ga('send','event','Banner','Download Now','Allproducts-newcatalogue');" class="btn btn--primary-green w-100 mb-1" style="color: #715e7c;" id="download-catalogue-tag">GET YOUR CUPPON <i class="fas fa-caret-right"></i></button>
            </div>

        </div>

    </div>

</form>


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
        $('.form-popup input[name="email"]').on('change', function() {
            $('.formvisible').css('display', 'block');
        });
        $(".country-price").change(function() {
            var selected_option = $(this).val();
            if (selected_option === 'United States') {
                $('.state-price').removeClass('d-none').children().attr('data-parsley-required', 'true');
            }
            if (selected_option != 'United States') {
                $('.state-price').addClass('d-none').children().attr('data-parsley-required', 'false');
            }
        });
    </script>

</body>

</html>