@php session_start(); @endphp
<html>

<head>
    <script>
        var tracker = getUrl();
    </script>
    <style>
        .name_product_modal_span span {
            color: #8bb9b6;
            letter-spacing: 2px;
            font-size: 16px;
            font-weight: 600;
            padding: 0 5px 0 0;
            text-align: center;
            line-height: 1.2;
            text-transform: capitalize;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }

        input[type="time"]::-webkit-calendar-picker-indicator {
            background: none;
            display: none;
        }

        @media(max-width:800px) {
            .form-meeting h1 {
                font-size: 1.3rem !important;
            }

            .form-meeting .name_product_modal_span p {
                font-size: 0.75rem !important !important;
                line-height: normal;
            }

        }

        @media (min-width: 991px) {
            .form-meeting input::-webkit-input-placeholder {
                /* WebKit browsers */
                color: transparent;
            }

            .form-meeting input:-moz-placeholder {
                /* Mozilla Firefox 4 to 18 */
                color: transparent;
            }

            .form-meeting input::-moz-placeholder {
                /* Mozilla Firefox 19+ */
                color: transparent;
            }

            .form-meeting input:-ms-input-placeholder {
                /* Internet Explorer 10+ */
                color: transparent;
            }
        }

    </style>
</head>

<body>

    <form method="post" class="form-popup form-parsley form-meeting" action="{{ route('process.book-a-meeting') }}">

        <div class="row">

            <div class="form-popup-header col-12 p-0 text-center">
                <h1 class="p-0">BOOK A METTING</h1>
                <div class="row m-0 pb-3 justify-content-center name_product_modal_span">
                    <p>Please fill the following form<br class="d-block d-md-none"> to receive your request</p>
                </div>
            </div>

            {{ csrf_field() }}

            <input type="hidden" name="origin" class="origin" />
            <input type="hidden" name="referrer" class="referrer" />
            <input type="hidden" name="lead_path" class="lead_path" />
            <input type="text" name="interested" class="interested" />

            <div class="col-sm-6">
                <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                    <span class="txt-request d-none d-md-block">First Name:*</span>
                    <input type="text" name="first_name" class="form-control name" data-parsley-required="true"
                        data-parsley-trigger="change" value="{{ old('name') }}" placeholder="First Name:*" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                    <span class="txt-request d-none d-md-block">Last Name:*</span>
                    <input type="text" name="last_name" class="form-control name" data-parsley-required="true"
                        data-parsley-trigger="change" value="{{ old('name') }}" placeholder="Last Name:*" />
                </div>
            </div>

            <div class="col-sm-12">
                <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                    <span class="txt-request d-none d-md-block">Email:*</span>
                    <input type="email" name="email" class="form-control email" data-parsley-required="true"
                        data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}"
                        placeholder="Email:*" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
                    <span class="txt-request d-none d-md-block">Country:*</span>
                    <select name="country" class="custom-select country country-price" data-parsley-required="true"
                        value="{{ old('country') }} ">
                        @include('includes.options-country')
                        <option value="" class="d-block d-md-none selected-input" disabled selected>Country*
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="input-block" {{ $errors->has('city') ? 'has-error' : '' }}">
                    <span class="txt-request d-none d-md-block">City:*</span>
                    <input type="text" name="city" class="form-control city" data-parsley-required="true"
                        value="{{ old('city') }}" placeholder="City:*" />
                </div>
            </div>
            <div class="col-sm-12 ">
                <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }} d-none state-price">
                    <span class="txt-request d-none d-md-block">State:*</span>
                    <select name="state" class="custom-select state" data-parsley-required="true"
                        value="{{ old('state') }}">
                        <option value="" class="d-block d-md-none selected-input" disabled selected>State*</option>
                        @include('includes.options-state')
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="input-block" {{ $errors->has('date') ? 'has-error' : '' }}">
                    <span class="txt-request d-none d-md-block" style="float: none !important;">Date:*</span>
                    <input type="date" class="form-control calendar text-uppercase" name="date" placeholder="Date">
                </div>
            </div>
            <div class="col-6">
                <div class="input-block" {{ $errors->has('time') ? 'has-error' : '' }}">
                    <span class="txt-request d-none d-md-block" style="float: none !important;">Time:*</span>
                    <input type="time" class="form-control time" name="time" style="width: 100%;">
                </div>
            </div>
            <div class="col-12 p-0 formvisible" style="display: none;">
                <div class="row m-0">
                    <div class="col-sm-12">
                        <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <span class="txt-request">Phone:*</span>
                            <input type="text" name="phone" class="form-control phone" data-parsley-required="true"
                                value="{{ old('phone') }}" placeholder="Phone:*" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                            <span class="txt-request">Occupation:*</span>
                            <select name="occupation" class="custom-select occupation" data-parsley-required="true"
                                value="{{ old('occupation') }}">
                                <option value="" class="d-block d-md-none selected-input" disabled selected>Occupation*
                                </option>
                                @include('includes.options-occupation')
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                            <span class="txt-request">Company:*</span>
                            <input type="text" name="company" class="form-control company" data-parsley-required="true"
                                value="{{ old('company') }}" placeholder="Company:*" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
                            <span class="txt-request">How did your hear about us?*</span>
                            <select name="hear_about" class="custom-select hear_about" data-parsley-required="true"
                                value="{{ old('hear_about') }}">
                                <option value="" class="d-block d-md-none selected-input" disabled selected>How did your
                                    hear about
                                    us?*</option>
                                @include('includes.options-hear-about')
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row m-0">
                    <div class="col-12 col-md-8 p-0">
                        <p style="clear:both;color: #666 !important;font-size:9.5px;line-height: normal;">BY CLICKING
                            REQUEST YOU CONFIRM
                            THAT YOU HAVE<br class="d-none d-md-block"> READ AND ACCEPTED OUR <a
                                href="https://www.circu.net/privacy-policy" target="_blank"
                                style="font-weight:600;">PRIVACY POLICY.</a></p>
                    </div>
                    <div class="col-12 col-md-4 p-0">
                        <button type="submit" class="btn-request-piece btn-prevent-multiple"><i
                                class="spinner-visible fas fa-spinner fas-spin"></i>BOOK A MEETING</button>
                    </div>
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
                $('.state-price').children().children().attr('value', '');
            }
        });
        if ($(window).width() < 991) {
            $('.selected-input').attr("selected");
        } else {
            $('.selected-input').removeAttr("selected");
        }
    </script>

</body>

</html>
