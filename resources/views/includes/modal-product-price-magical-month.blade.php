@php session_start(); @endphp
<html>

<head>
    <script>
        var tracker = getUrl();
    </script>
</head>
<style>
    .btn_isactive_formebook {
        background-color: #8bb9b6 !important;
        border: 1px solid #8bb9b6 !important;
        padding: 0;
        color: white !important;
        cursor: pointer;
        width: 220px;
        padding: 5px 10px;
        font-size: 12px;
    }

    .btn_check:focus {
        outline: none;
    }

    .btn_check {
        background-color: transparent;
        border: 1px solid #8bb9b6;
        padding: 0;
        color: #8bb9b6;
        cursor: pointer;
        width: 220px;
        padding: 5px 10px;
        font-size: 12px;
    }

    .btn_check:hover {
        background-color: #8bb9b6;
        border: 1px solid #8bb9b6;
        padding: 0;
        color: white;
        cursor: pointer;
        width: 220px;
        padding: 5px 10px;
        font-size: 12px;
    }

    @media (max-width:767px) {
        .div_btn_form {
            text-align: center;
            float: none;
        }
    }

    @media (min-width:768px) {
        .div_btn_form {
            float: left;
        }

        .btn_check_profissional {
            float: right;
        }
    }
</style>

<body>



    <div class="row">

        <div class="form-popup-header col-12">
            <h1>REQUEST PRICE</h1>
            <h3>{{ $product->name }} {{ ucwords($product->sub_category->sub_category_languages[0]->name) }}</h3>
            <h3 style="font-size: 15px !important;">SELECT YOUR PROFILE:</h3>

            <div class="col-12 col-md-6 pb-3 div_btn_form" id="form">
                <button class="btn_check btn_check_profissional" value="yes" type="button">PROFESSIONAL</button>
            </div>
            <div class="col-12 col-md-6 pb-3 div_btn_form">
                <button class="btn_check " value="no" type="button">FINAL COSTUMER</button>
            </div>
        </div>
        <div class="col-12 p-0 extra" id="extra" style="display: none">
            <form method="post" class="form-popup form-parsley" action="{{ route('process.product-price-magical-month', ['name' => $product->slug]) }}">
                {{ csrf_field() }}

                <input type="hidden" name="more_info" value="- Professional" />
                <input type="hidden" name="id_form" value="1" />
                <input type="hidden" name="product_name" value="{{ $product->slug }}" />
                <input type="hidden" name="origin" class="origin" />
                <input type="hidden" name="referrer" class="referrer" />
                <input type="hidden" name="lead_path" class="lead_path" />
                <input type="text" name="interested" class="interested" />

                <div class="col-sm-6 float-left">
                    <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                        <span class="txt-request">Name:*</span>
                        <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                    </div>
                </div>

                <div class="col-sm-6 float-left">
                    <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                        <span class="txt-request">Last Name:*</span>
                        <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                    </div>
                </div>

                <div class="col-sm-12 float-left">
                    <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                        <span class="txt-request">Email:*</span>
                        <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
                    </div>
                </div>

                <div class="col-sm-12 float-left">
                    <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <span class="txt-request">Phone:*</span>
                        <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}" />
                    </div>
                </div>

                <div class="col-sm-6 float-left">
                    <div class="input-block {{ $errors->has('occupation') ? 'has-error' : '' }}">
                        <span class="txt-request">Profession:*</span>
                        <select name="occupation" class="custom-select occupation" data-parsley-required="true" value="{{ old('occupation') }}">
                            @include('includes.options-occupation')
                        </select>
                    </div>
                </div>

                <div class="col-sm-6 float-left">
                    <div class="input-block {{ $errors->has('company') ? 'has-error' : '' }}">
                        <span class="txt-request">Company:*</span>
                        <input type="text" name="company" class="form-control company" data-parsley-required="true" value="{{ old('company') }}" />
                    </div>
                </div>

                <div class="col-sm-6 float-right">
                    <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }} ">
                        <span class="txt-request">Country:*</span>
                        <select name="country" class="custom-select country country-price" data-parsley-required="true" value="{{ old('country') }}">
                            @include('includes.options-country')
                        </select>
                    </div>
                </div>

                <div class="col-sm-6 float-left">
                    <div class="input-block {{ $errors->has('city') ? 'has-error' : '' }}">
                        <span class="txt-request">Website:*</span>
                        <input type="text" name="city" class="form-control city" data-parsley-required="true" value="{{ old('city') }}" />
                    </div>
                </div>

                <div class="col-sm-12 float-left">
                    <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }} state-price d-none">
                        <span class="txt-request">State:*</span>
                        <select name="state" class="custom-select state " data-parsley-required="true" value="{{ old('state') }}">
                            @include('includes.options-state')
                        </select>
                    </div>
                </div>


                <div class="col-12 mb-3 float-left">
                    <input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label>
                    <span class="blue">BOOK A MEETING WITH OUR MAGICAL TEAM</span>
                </div>

                <div class="col-12 float-left">
                    <button type="submit" onclick="ga('send','event','Get Price','Request Price','Product-getprice');" id="request-price-tag" class="btn-request-piece btn-prevent-multiple"><i class="spinner-visible fas fa-spinner fas-spin"></i> DOWNLOAD</button>
                </div>

            </form>
        </div>

        <div class="col-12 p-0 extra2" id="extra2" style="display: none">
            <form method="post" class="form-popup form-parsley" action="{{ route('process.product-price-magical-month', ['name' => $product->slug]) }}">
                {{ csrf_field() }}

                <input type="hidden" name="more_info" value="- Final Costumer" />
                <input type="hidden" name="product_name" value="{{ $product->slug }}" />
                <input type="hidden" name="id_form" value="2" />
                <input type="hidden" name="origin" class="origin" />
                <input type="hidden" name="referrer" class="referrer" />
                <input type="hidden" name="lead_path" class="lead_path" />
                <input type="text" name="interested" class="interested" />

                <div class="col-sm-6 float-left">
                    <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                        <span class="txt-request">Name:*</span>
                        <input type="text" name="name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                    </div>
                </div>

                <div class="col-sm-6 float-left">
                    <div class="input-block {{ $errors->has('name') ? 'has-error' : '' }}">
                        <span class="txt-request">Last Name:*</span>
                        <input type="text" name="last_name" class="form-control name" data-parsley-required="true" data-parsley-trigger="change" value="{{ old('name') }}" />
                    </div>
                </div>

                <div class="col-sm-12 float-left">
                    <div class="input-block {{ $errors->has('email') ? 'has-error' : '' }}">
                        <span class="txt-request">Email:*</span>
                        <input type="email" name="email" class="form-control email" data-parsley-required="true" data-parsley-type="email" data-parsley-trigger="change" value="{{ old('email') }}" />
                    </div>
                </div>

                <div class="col-sm-12 float-left">
                    <div class="input-block {{ $errors->has('phone') ? 'has-error' : '' }}">
                        <span class="txt-request">Phone:*</span>
                        <input type="text" name="phone" class="form-control phone" data-parsley-required="true" value="{{ old('phone') }}" />
                    </div>
                </div>
                <div class="col-sm-12 float-left">
                    <div class="input-block {{ $errors->has('country') ? 'has-error' : '' }}">
                        <span class="txt-request">Country:*</span>
                        <select name="country" class="custom-select country country-price" data-parsley-required="true" value="{{ old('country') }}">
                            @include('includes.options-country')
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 float-left">
                    <div class="input-block {{ $errors->has('state') ? 'has-error' : '' }} state-price d-none">
                        <span class="txt-request">State:*</span>
                        <select name="state" class="custom-select state" data-parsley-required="true" value="{{ old('state') }}">
                            @include('includes.options-state')
                        </select>
                    </div>
                </div>

                <div class="col-12 mb-3 float-left">
                    <input type="checkbox" name="virtual_meeting" value="yes" id="virtual_meeting"><label for="virtual_meeting" class="label_left"></label>
                    <span class="blue">BOOK A MEETING WITH OUR MAGICAL TEAM</span>
                </div>

                <div class="col-12 float-left">
                    <button type="submit" onclick="ga('send','event','Get Price','Request Price','Product-getprice');" id="request-price-tag" class="btn-request-piece btn-prevent-multiple"><i class="spinner-visible fas fa-spinner fas-spin"></i> DOWNLOAD</button>
                </div>

            </form>
        </div>
    </div>



    <script type="text/javascript">
        $('.btn_check').click(function() {

            var value = $(this).attr('value');
            console.log(value);
            if (value == 'yes') {
                $('.btn_check').removeClass('btn_isactive_formebook');
                $(this).addClass('btn_isactive_formebook');
                $('.extra').show();
                $('.extra2').hide();
            } else {
                $('.btn_check').removeClass('btn_isactive_formebook');
                $(this).addClass('btn_isactive_formebook');
                $('.extra').hide();
                $('.extra2').show();
            }

        });
    </script>
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