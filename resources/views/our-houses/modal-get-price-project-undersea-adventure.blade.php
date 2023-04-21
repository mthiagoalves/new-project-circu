@php session_start(); @endphp
<html>

<head>
    <script>
        var tracker = getUrl();
    </script>
</head>

<body>

    <form method="post" class="form-popup form-parsley" action="{{ route('process.get-price-project') }}">

        <div class="row">

            <div class="form-popup-header col-12">
                <h1>GET PROJECT PRICE</h1>
            </div>

            {{ csrf_field() }}

            <input type="hidden" name="origin" class="origin" />
            <input type="hidden" name="referrer" class="referrer" />
            <input type="hidden" name="lead_path" class="lead_path" />
            <input type="text" name="interested" class="interested" />
            <input type="hidden" name="room" value="An Undersea Adventure by ByMura" />

            <div class="col-sm-6">
                <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                    <span class="txt-request">First Name:*</span>
                    <input type="text" name="first_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                    <span class="txt-request">Last Name:*</span>
                    <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                </div>
            </div>

            <div class="col-sm-12">
                <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                    <span class="txt-request">Email:*</span>
                    <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
                    <span class="txt-request">Country:*</span>
                    <select name="country" class="custom-select country country-price" data-parsley-required="true" value="{{ old('country') }}">
                        @include('includes.options-country')
                    </select>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="input-block" {{ $errors->has('city') ? 'has-error' : '' }}">
                    <span class="txt-request">City:*</span>
                    <input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}" />
                </div>
            </div>
            <div class="col-sm-12 ">
                <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }} d-none state-price">
                    <span class="txt-request">State:*</span>
                    <select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}">
                        @include('includes.options-state')
                    </select>
                </div>
            </div>
            <div class="col-12 p-0 formvisible" style="display: none;">
                <div class="row m-0">
                    <div class="col-sm-12">
                        <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                            <span class="txt-request">Phone:*</span>
                            <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                            <span class="txt-request">Occupation:*</span>
                            <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                                @include('includes.options-occupation')
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                            <span class="txt-request">Company:*</span>
                            <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-block {{ $errors->has('hear_about') ? 'has-error' : '' }}">
                            <span class="txt-request">How did your hear about us?*</span>
                            <select name="hear_about" class="custom-select hear_about" data-parsley-required="true" value="{{ old('hear_about') }}">
                                @include('includes.options-hear-about')
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mb-3"><input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label><span class="blue">BOOK A MEETING WITH OUR MAGICAL TEAM</span></div>

            <div class="col-12">
                <button type="submit" onclick="ga('send','event','Get Price','Request Price','Product-getprice');" id="request-price-tag" class="btn-request-piece btn-prevent-multiple"><i class="spinner-visible fas fa-spinner fas-spin"></i>  GET PRICE</button>
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