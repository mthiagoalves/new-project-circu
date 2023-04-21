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
    </style>
</head>

<body>

    <form method="post" id="formgetprice" class="form-popup form-parsley" action="{{ route('process.product-price', $product->slug) }}">

        <div class="row">

            <div class="form-popup-header col-12">
                <h1>REQUEST PRICE</h1>
                <div class="row m-0 pb-3 justify-content-center name_product_modal_span">
                    <span class="txt-request change_name_modal">{{ $product->name }}</span><span class="txt-request">
                        {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</span>
                </div>
            </div>

            {{ csrf_field() }}


            <input type="hidden" name="product_name" value="{{ $product->slug }}" />
            <input type="hidden" class="product_color" name="product_color" value="" />
            <input type="hidden" class="product_size_slug" name="product_size_slug" value="" />
            <input type="hidden" class="product_size_name" name="product_size_name" value="" />
            <input type="hidden" class="product_size_price_euro" name="product_size_price_euro" value="" />
            <input type="hidden" class="product_size_price_dollar" name="product_size_price_dollar" value="" />
            <input type="hidden" class="product_option_slug" name="product_option_slug" value="" />
            <input type="hidden" class="product_option_name" name="product_option_name" value="" />
            <input type="hidden" class="product_option_price_euro" name="product_option_price_euro" value="" />
            <input type="hidden" class="product_option_price_dollar" name="product_option_price_dollar" value="" />
            <input type="hidden" class="data-size" name="data-size" value="" />
            <input type="hidden" name="origin" class="origin" />
            <input type="hidden" name="referrer" class="referrer" />
            <input type="hidden" name="lead_path" class="lead_path" />
            <input type="text" name="interested" class="interested" />

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
                <button type="submit" onclick="ga('send','event','Get Price','Request Price','Product-getprice');" id="request-price-tag" class="btn-request-piece btn-prevent-multiple"><i class="spinner-visible fas fa-spinner fas-spin"></i> REQUEST PRICE</button>
            </div>

        </div>

    </form>

    <script type="text/javascript">
        $(".origin").val(tracker.url_origin);
        $(".referrer").val(tracker.referrer);
        $(".lead_path").val(tracker.flow);

        $product_color_slug = $('.fcurrent_color img').attr("data-target");

        //Size
        $product_size_slug = $('.fcurrent_size button').attr("data-target");
        $product_size_name = $('.fcurrent_size button').attr("data-name-size");
        $product_size_price_dollar = $('.fcurrent_size button').attr("data-price-dollar");
        $product_size_price_euro = $('.fcurrent_size button').attr("data-price-euro");

        $(".product_color").val($product_color_slug);
        $(".product_size_slug").val($product_size_slug);
        $(".product_size_name").val($product_size_name);
        $(".product_size_price_dollar").val($product_size_price_dollar);
        $(".product_size_price_euro").val($product_size_price_euro);



        //drawers
        $product_option_slug = $('.fcurrent_drawer img').attr("data-target");
        $product_option_name = $('.fcurrent_drawer img').attr("data-name-option");
        $product_option_price_dollar = $('.fcurrent_drawer img').attr("data-price-dollar");
        $product_option_price_euro = $('.fcurrent_drawer img').attr("data-price-euro");

        $(".product_option_slug").val($product_option_slug);
        $(".product_option_name").val($product_option_name);
        $(".product_option_price_dollar").val($product_option_price_dollar);
        $(".product_option_price_euro").val($product_option_price_euro);

        if ($product_size_slug != "standard") {
            $('.change_name_modal').text($product_size_name);
        } else {

        }
        if ($product_option_slug != "standard") {
            $('.change_name_modal').text($product_option_name);
        } else if ($product_option_slug == "") {

        }


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
    </script>

</body>

</html>